@extends('layouts.app')
@section('content')
<style>
	.badge
	{
		background:#09b2a7 !important
	}
</style>
<link rel="stylesheet" href="/css/select2.css">
    <script src="/js/select2.js"></script>
<div class="container" style="background:#eef;">
	<div class="col-sm-2 pull-right" style="border:10px solid #fff;padding-right:5px;background-color:#fff;padding-left:-17px">
		@foreach($categories as $category)
<a href="{{ route('category.showAll',[$category->name]) }}" class="btn btn-link" style="color:#555">{{$category->name}}</a>
		@endforeach
	
</div>
    <div class="col-sm-8 col-sm-offset-1" style="margin-top:-3px">
		 
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

		<form action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="panel panel-default">
				<div class="panel-body">
					
					<div class="form-group">
						<input class="form-control" name="title" placeholder="title" required>
						 
					</div>
					
					<div class="form-group">
						<input class="form-control" name="image" type="file">
						 
					</div>
					
					<div class="form-group">
						<textarea name="body" rows="9" cols="93" placeholder="body" required ></textarea>
						 
					</div>
					<div class="form-group">
						<label for="category">Category</label>
					<select class="form-control" name="category">
					@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach	 
					</select>
					</div>
					
					 <div class="form-group">
                            <select class="form-control select2-class" name="tags[]" multiple>
                                @foreach (Auth::user()->friends as $friend)
                                    <option value="{{ $friend->id }}">{{ $friend->user2->username }}</option>
                                @endforeach
                            </select>
                        </div>
						<input type="submit" value="Post" class="btn btn-primary btn-block " style="background:#09b2a7;padding:13px 13px 13px 13px;font-size:20px">
						
					</div>
				</div>
		</form>
		
		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading">
				
					<h1>
						<div class="panel-title">
						<img src="{{$post->user->profile_picture}}" style="border-radius:50%">{{ $post->user->username}}
							&nbsp;&nbsp;&nbsp;&nbsp;
							{{$post->title}}
						</div>
						    @if ($post->friends()->count() > 0)
                            <small>
                                with
                                @foreach ($post->friends as $tag)
                                    {{ $tag->user2->username }},
                                @endforeach
                            </small>
                        @endif
					</h1>
				</div>
			<div class="panel-body">
				<div class="pull-right">
					 <div class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" style="background:#c4e3f7">
								<li><a href="{{ route('post.show',[$post->id]) }}">Show Post</a></li>
								<li><a href="{{ route('post.edit',[$post->id])}}">Edit Post</a></li>
									
                <li><a href="{{url('delete/'.$post->id)}}">delete</a> 
									
									</li>           
                                </ul>
                            </div>
				</div>
			</div>
			<div class="panel-body">
				{{$post->body}}
				<br>
				<br>
				@if($post->image !=null)
				<img src="/images/{{$post->image}}" width="100%" height="600px">
				@endif
				<br>
				<div class="pull-right">
				Category  :<div class="badge">{{$post->category['name']}}
				</div></div>
			</div>
 <div class="panel-footer" data-postid="{{ $post->id }}">
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
                      <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-link">Comment</a>
                  </div>
                </div>
            @endforeach
        </div>
</div>
<script>
	$('.select2-class').select2();
</script>

	

@endsection