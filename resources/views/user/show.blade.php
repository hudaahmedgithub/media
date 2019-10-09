@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		
        <div class="col-md-8 col-md-offset-2">
			<div class="pull-right" data-friendid="{{$users->id}}">
				
		    @if(Auth::check())
				
				@php
				    $i=Auth::user()->friends()->count();
				    $c=1;
				@endphp
				@foreach(Auth::user()->friends as $user_1)
				@if($user_1->user2->id==$users->id)
				      <a class="btn btn-link remove-friend">Remove Friend</a>
				@break
				@elseif($i==$c)
				       <a class="btn btn-link friend">Add Friend</a>
				@endif
				@php
				$c++;
				@endphp
					@endforeach
				@if($i==0)
				<a class="btn btn-link friend">Add Friend</a>
				@endif
			
				@endif
			
			<a href="{{route('friend.show',$users->id)}}"class="btn btn-link">View Friend</a>
			</div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <img src="{{$users->profile_picture}}">
                  Welcom  {{$users->username}}
					
                </div>
				
				<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#posts" aria-controls="post" role="tab" data-toggle="tab">Post</a></li>
	
  <li role="presentation"><a href="#comments" aria-controls="comment" role="tab" data-toggle="tab">Comments</a></li>
   <li role="presentation"><a href="#categories" aria-controls="category" role="tab" data-toggle="tab">Category</a></li>
					</ul>		
					
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="posts">
		{{$users->posts()->count()}}  post
		@foreach($users->posts as $post)
	  <div class="panel panel-default">
		  <div class="panel-heading">
			  <h1 class="panel-title">
				  created by {{$post->user->username}}
				  <br>
				  {{$post->title}}
		  </h1>
		</div>
		  <div class="panel-body">
			  {{$post->body}}
			  Category :  <div class="badge">{{$post->category['name']}}</div>
		  </div>
		  
	  </div>
	  @endforeach
		</div>
   
		
    <div role="tabpanel" class="tab-pane" id="comments">
		{{$users->comments()->count()}} Comments
	  @foreach($users->comments as $comment)
	   <div class="panel panel-default">
		   <div class="panel-body">
			   <div class="col-sm-9">
			   {{$comment->comment}}
		   </div>
			   <div class="col-sm-3">
				   <small><a href="{{route('post.show',[$comment->post->id])}}">View Post</a></small>
			   </div>
	   </div>
		   </div>
		   @endforeach
		
		 
	  </div>
   <div role="tabpanel" class="tab-pane fade" id="categories">
	   {{$users->categories()->count()}} Categories
	   @foreach($users->categories as $category)
	   <div class="panel panel-default">
		   <div class="panel-body">
			   {{$category->name}}
		   </div>
	   </div>
	   @endforeach
	   
	  </div>
	  

</div>
            </div>
        </div>
    </div>
</div>
</div>
	<!--http://gravatar.com/avatar/dce39c824923cf330eb0215340da6151?d=monsterid-->
@endsection
