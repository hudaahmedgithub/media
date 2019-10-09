@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/select2.css">
    <script src="/js/select2.js"></script>
<div class="container">
	<div class="col-sm-8 col-sm-offset-2">
	<a href="{{url('post')}}">return back</a>
		 
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
	
		{!! Form::model($post,['method'=>'PUT' ,'files'=>true, 'route'=>['post.update',$post->id]]) !!}
			{{csrf_field()}}
			
			<div class="panel panel-default">
				<div class="panel-body">
					
					<div class="form-group">
						{{ Form::text('title',null,['class'=>'form-control','placeholder'=>'title']) }}
						 
					</div>
					
					<div class="form-group">
						<input class="form-control" name="image" type="file">
						 
					</div>
					
					<div class="form-group">
						{{ Form::textarea('body',null,['class'=>'form-control','placeholder'=>'body']) }}
						 
					</div>
					<div class="form-group">
						<label for="category">Category</label>
					<select class="form-control" name="category">
					@foreach($categories as $category)
					<option value="{{$category->id}}" 
							{{ $category->id == $post->category_id ? 'selected' : '' }}>{{$category->name}}</option>
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
						<input type="submit" value="Post" class="btn btn-primary btn-block " style="background:#09b2a7">
						
					</div>
				</div>
		{!! Form::close() !!}
	</div>
	
	<script>
	$('.select2-class').select2();
</script>

	@endsection