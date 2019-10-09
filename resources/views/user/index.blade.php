@extends('layouts.app')

@section('content')
 
<div class="container">
      <div class="col-sm-12">
		  {{$users->links()}}
			@foreach($users as $user)
			<div class="col-xs-6 shadow" style="border:10px solid #fff">
				<img src="{{$user->profile_picture}}" style="border-radius:50%; width:100px;height:100px">
				{{$user->username}}
				
				<a href="{{route('user.show',$user->id)}}" style="margin-left:90px">View User</a>
		</div>
		 
	@endforeach
		  
	</div>
            <div class="panel panel-default">
				
				@endsection