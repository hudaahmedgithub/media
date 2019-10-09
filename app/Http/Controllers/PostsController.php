<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use Image;
use App\Category;
use Storage;
class PostsController extends Controller
{
    public function index()
	{
		$posts=Post::all();
		$categories=Category::all();
		return view('post.index')->withPosts($posts)->withCategories($categories);
	}
	
	public function store(Request $request)
	{
		$this->validate($request,[
			'title'=>'required|max:255|unique:posts',
			'image'=>'image',
			'body'=>'required|max:255'
		]);
		$post=new Post;
		$post->title=$request->title;
		$post->body=$request->body;
		$post->category_id=$request->category;
		$post->user_id=Auth::user()->id;
		if($request->hasFile('image'))
		{
		$image=$request->file('image');
		$filename=time() . '.' .$image->getClientOriginalExtension() ;
		$location=public_path('/images/'.$filename);
		Image::make($image)->resize(800,600)->save($location);
		$post->image=$filename;
			
		}
		
		  $post->save();
        if (isset($request->tags)) {
            $post->friends()->sync($request->tags, false);
        }
		Session::flash('flash_message_success','your post is added');
		return redirect('/post');
	}
	
	public function show($id)
	{
		$post=Post::find($id);
		return view('post.show')->withPost($post);
	}
	
	public function edit($id)
	{
		$post=Post::find($id);
		if(Auth::user()->id !=$post->user_id)
		{
			abort(404);
		}
		if($post == null)
		{
			abort(404);
		}
		$categories=Category::all();
		return view('post.edit')->withPost($post)->withCategories($categories);
   }
	
   public function update(Request $request,$id)
   {
	   $post=Post::find($id);
	   
	   if(Auth::user()->id !=$post->user_id)
		{
			abort(404);
		}
		if($post == null)
		{
			abort(404);
		}
	   $this->validate($request,[
			'title'=>"required|max:255|unique:posts,title,$id",
			'image'=>'image',
			'body'=>'required|max:255'
		]);
		
		$post->title=$request->title;
		$post->body=$request->body;
		$post->category_id=$request->category;
		$post->user_id=Auth::user()->id;
	
		if($request->hasFile('image'))
		{
		$image=$request->file('image');
		$filename=time() . '.' .$image->getClientOriginalExtension() ;
		$location=public_path('/images/'.$filename);
		Image::make($image)->resize(800,600)->save($location);
			
	if($post->image !=null)
	{
		Storage::delete($post->image);
	}
		$post->image=$filename;
	}
	   
		$post->save();
	     if (isset($request->tags)) {
            $post->friends()->sync($request->tags);
        }
		Session::flash('flash_message_success','your post is updated');
		return redirect()->back();  
   }
	
	public function destroy($id)
	{
		$post=Post::find($id);
		if(Auth::user()->id !=$post->user_id)
		{
			abort(404);
		}
		if($post == null)
		{
			abort(404);
		}
		if($post->image != null)
		{
			Storage::delete($post->image);
		}
		$post->delete();
		Session::flash('flash_message_success','your post is deleted');
		return redirect()->back();
		
	}
}