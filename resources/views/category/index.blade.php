@extends('layouts.app')
@section('content')
<div class="container">
   <div class="col-sm-6">
	    @foreach($categories as $cat)
	   <div class="panel panel-default">
		   
		   <div class="panel-body">
			  
			   {{$cat->name}}
		   </div>
		   <div class="panel-footer">
			<img src="{{$cat->user->profile_picture}}"> created by  {{$cat->user->username}}
		   </div>
		  
	   </div>
	   @endforeach
	   {{ $categories->links() }}
	</div>
	 
	 <div class="col-sm-6">
		 	 
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

		 <div class="well">
			 
			 <form method="post">
				 {{csrf_field()}}
				 <div class="form-group">
				 <label for="name" class="control-label">
				 name
				 </label>
				 <input type="text" name="name" class="form-control" placeholder="Name" required>
				 </div>
				 <input type="submit" value="submit" class="btn btn-primary btn-block" style="background:#09b2a7">
			 </form>
		 </div>
	</div>
	
	
	
	
	
	
@endsection