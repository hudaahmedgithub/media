<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style media="screen">
		.active-like
		{
			color: #222;
			text-decoration: underline;
		}
		</style>
	 <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background:#04B4cc">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Blog') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
						
                        
			 @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Friend Request <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @foreach (Auth::user()->friends1->where('approved', '=', false) as $friend1)
                                        <li>
                                            <img src="{{ $friend1->user1->profile_picture }}" alt="Profile Picture" width="50" height="50">
                                            <div style="display: inline-block">
                                                {{ $friend1->user1->username }}
                                                <div data-userid="{{ $friend1->user1->id }}">
                                                    <a href="#" class="btn btn-success btn-sm request">Accept</a>
                                                    <a href="#" class="btn btn-danger btn-sm request">Cancel</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    @if (Auth::user()->friends1->where('approved', '=', false)->count() == 0)
                                        You Don't have any Friend Request
                                    @endif
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/home') }}">Profile</a></li>
                                    <li><a href="{{ url('/post') }}">Post</a></li>
                                    <li><a href="{{ url('/category') }}">Category</a></li>
                                    <li><a href="{{ url('/users') }}">Users</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
   
	
	<script>
		
$(document).ready(function()
{
	$('.like').click(function(e)
	{
	e.preventDefault();
	var like=e.target.previousElementSibling == null;
	var postid=e.target.parentNode.dataset['postid'];
				
	var data = {
		isLike: like,
		post_id: postid,
		
		}
		axios.post('/like',data).then(reponse=>{
		e.currentTarget.className="btn btn-link like"
		console.log(reponse['data']);
			})
	})
});
	
	
$('.friend').click(function(e) {
    e.preventDefault();
    var friendid = e.target.parentNode.dataset['friendid'];
    var data = {
        friend_id: friendid
    }
    axios.post('/friend', data).then(response => {
        e.target.innerHTML = "Remove Friend";
        e.currentTarget.className = "btn btn-link remove-friend";
    })
})

$('.remove-friend').click(function(e) {
    e.preventDefault();
    var friendid = e.target.parentNode.dataset['friendid'];
    var data = {
        friend_id: friendid
    }
    axios.post('/friend/remove', data).then(response => {
        e.target.innerHTML = "Add Friend";
        e.currentTarget.className = "btn btn-link friend";
    })
})

$('.request').click(function(e)
	{
	e.preventDefault();
	var request=e.target.previousElementSibling == null;
	var userid=e.target.parentNode.dataset['userid'];
		var data = {
			  isRequest:request,
			    user_id: userid
				}
				axios.post('/request',data).then(response=>{
					if(response.data['true'])
						{
							e.currentTarget.parentElement.innerHTML="<span class='success'> you don</span>";
						}
					else
					{
						e.currentTarget.parentElement.innerHTML="<span class='danger'> you dont done</span>";
					}
			})
				console.log(data)
});
	

	</script>
</body>
</html>
