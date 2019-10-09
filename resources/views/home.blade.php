@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <img src="{{Auth::user()->profile_picture}}">
                 {{Auth::user()->username}}
					<div class="pull-right">
						<a href="{{route('friend.show',Auth::user()->id)}}">View Friends</a>
					</div>
                </div>
				
				<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#posts" aria-controls="post" role="tab" data-toggle="tab">Post</a></li>
	
  <li role="presentation"><a href="#comments" aria-controls="comment" role="tab" data-toggle="tab">Comments</a></li>
   <li role="presentation"><a href="#categories" aria-controls="category" role="tab" data-toggle="tab">Category</a></li>
	  <li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Tag</a></li>
					</ul>		
					
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="posts">
		{{Auth::user()->posts()->count()}}  post
		@foreach(Auth::user()->posts as $post)
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
			Category :  <div class="badge">{{$post->category->name}}</div>
		  </div>
		  
	  </div>
	  @endforeach
		</div>
   
		
    <div role="tabpanel" class="tab-pane" id="comments">
		{{Auth::user()->comments()->count()}} Comments
	  @foreach(Auth::user()->comments as $comment)
	   <div class="panel panel-default">
		   <div class="panel-body">
			   <div class="col-sm-9">
			   {{ $comment->comment }}
		   </div>
			 <div class="col-sm-3">
               <small><a href="{{ route('post.show', [$comment->post_id]) }}">View Post</a></small>
                                    </div>
	   </div>
	  </div>
		 @endforeach
	  </div>
   <div role="tabpanel" class="tab-pane fade" id="categories">
	   {{Auth::user()->categories()->count()}} Categories
	   @foreach(Auth::user()->categories as $category)
	   <div class="panel panel-default">
		   <div class="panel-body">
			   {{$category->name}}
		   </div>
	   </div>
	   @endforeach
	   
	  </div>
	  
	  <div role="tabpanel" class="tab-pane fade" id="tag">
	
	   @foreach(Auth::user()->friends1 as $friend)
		  @foreach($friend->user1->posts as $post)
		  @foreach($post->friends as $tag)
		  @php
		  $u=App\User::find($tag->id);
		  @endphp
		<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                       {{ $post->title }}
                         <div class="pull-right">
                          <div class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             <span class="caret"></span>
                                                </a>

           <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ route('post.show', [$post->id]) }}">Show Post</a></li>
                
                                </ul>
                                            </div>
                                        </div>
                                    </h3>
                                  </div>
                                  <div class="panel-body">
                                    {{ $post->body }}
                                    <br />
                                    Category: <div class="badge">{{ $post->category->name }}</div>
                                  </div>
                                </div>
		@endforeach
	@endforeach
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
