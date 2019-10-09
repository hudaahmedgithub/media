<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;
use Session;
class CommentController extends Controller
{
    public function index(Request $request)
	{
		
		$comment=new Comment;
		$comment->comment=$request->comment;
		$comment->user_id=Auth::user()->id;
		$comment->post_id=$request->post_id;
		$comment->save();
		Session::flash('flash_message_success','your comment is added');
		return redirect()->back();
	}
}
