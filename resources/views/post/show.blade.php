@extends('layouts.app')
@section('content')
<style>
.badge
	{
		background:#09b2a7
	}
</style>
<div class="container">
        <div class="col-sm-6 col-sm-offset-3">
			<a href="{{url('post')}}">return back</a>
		<div class="panel panel-default" style="margin:0px">
			<div class="panel-heading">
				
					<h1>
						<div class="panel-title">
					{{ $post->title }}
							created by :{{$post->user->username}}
							@if ($post->friends()->count() > 0)
                           
                                with
                                @foreach ($post->friends as $tag)
                                    {{ $tag->user2->username }},
                                @endforeach
                          
                        @endif
						</div>
					</h1>
			</div>
			<div class="panel-body">
				{{$post->body}}
				<br>
				@if($post->image !=null)
				<img src="/images/{{$post->image}}" width="100%" height="400px">
				@endif
				<br>
				<br>
		
			</div>
			<div class="panel-footer" data-postid="{{ $post->id }}">
                  @if (Auth::check())
                      @php
                          $i = Auth::user()->likes()->count();
                          $c = 1;
                          $likeCount = $post->likes()->where('like', '=', true)->count();
                          $dislikeCount = $post->likes()->where('like', '=', false)->count();
                      @endphp
                      @foreach (Auth::user()->likes as $like)
                          @if ($like->post_id == $post->id)
                              @if ($like->like)
                                  <a href="#" class="btn btn-link like active-like">Like <span class="badge">{{ $likeCount }}</span></a>
                                  <a href="#" class="btn btn-link like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                              @else
                                  <a href="#" class="btn btn-link like">Like <span class="badge">{{ $likeCount }}</span></a>
                                  <a href="#" class="btn btn-link like active-like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                              @endif
                              @break
                          @elseif ($i == $c)
                              <a href="#" class="btn btn-link like">Like <span class="badge">{{ $likeCount }}</span></a>
                              <a href="#" class="btn btn-link like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                          @endif
                          @php
                              $c++;
                          @endphp
                      @endforeach
                      @if ($i == 0)
                          <a href="#" class="btn btn-link like">Like <span class="badge">{{ $likeCount }}</span></a>
                          <a href="#" class="btn btn-link like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                      @endif
                  @else
                      <a href="{{ url('login') }}" class="btn btn-link">Like <span class="badge">{{ $likeCount }}</span></a>
                      <a href="{{ url('login') }}" class="btn btn-link">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                  @endif
				<a href="" class="btn btn-link">Comment</a>
			</div>
			</div>
			@foreach($post->comments as $comment)
			<div class="panel panel-info" style="margin:0px">
				<div class="panel-body">
					<img src="{{$comment->user->profile_picture}}">
					{{$comment->comment}}
					<div class="pull-right">
					commented by : {{$comment->user->username}}
						
					</div>
				</div>
			</div>
			@endforeach
			@if(Auth::check())
			<div class="panel panel-info" style="margin:0px">
				<div class="panel-body">
					<form action="{{ url('/comment') }}" method="post">
						{{csrf_field()}}
					<input type="hidden" name="post_id" value="{{$post->id}}">
					<input type="text" placeholder="Write Comment" class="form-control" name="comment" required>
					<input type="submit" value="Comment" class="btn btn-primary btn-block" style="background:#09b2a7">
					</form>
				</div>
			</div>
	@endif
				 
     @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_error')!!}</strong>
            </div>
            
            @endif
            
             @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_success')!!}</strong>
            </div>
            
            @endif
			
	</div></div>

@endsection