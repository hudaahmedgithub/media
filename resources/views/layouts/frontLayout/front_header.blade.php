<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
?>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a><i class="fa fa-phone"></i> 01023579754</a></li>
								<li><a><i class="fa fa-envelope-o"></i> admin1000@yopmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('index')}}"><img src="images/home/logo.png" alt="" /></a>
						</div>
					
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							  
								<!--<li><a href="{{'/cart'}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>-->
                                <li><a href="{{'/posts'}}"><i class="fa fa-shopping-cart"></i>write post</a></li>
                                <li><a id="posts" href="{{'/posts'}}"><i class="fa fa-shopping-cart"></i>view post</a></li>
                               <li><a href="{{'/#advice'}}"><i class="fa fa-shopping-cart"></i>Advice</a></li>
                                <li><a href="{{'/#caring'}}"><i class="fa fa-shopping-cart"></i>caring problem</a></li>
                                <li><a href="{{'/pages/contact'}}"><i class="fa fa-lock"></i> Contact</a></li>
								@if(empty(Auth::check()))
								<li class="login"><a  href="{{'/login-register'}}"><i class="fa fa-lock"></i> Login</a></li>
                                @else
                                <li><a href="{{'/user-logout'}}"><i class="fa fa-lock"></i>Logout</a></li>
                                @endif
							</ul>
						</div>
					</div>
				</div>
		
	<!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('/')}}" class="active">Home</a>
                            <li class="dropdown"><a href="#">Blogs<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                           <li><a href="{{'/#advice'}}"><i class="fa fa-shopping-cart"></i>Advice</a></li>
                            <li><a href="/pages/contact">contact</a></li>
                            
                            @if(empty(Auth::check()))
								<li><a href="{{'/login-register'}}"><i class="fa fa-lock"></i> Login</a></li>
                                @else
                                <li><a href="{{'/user-logout'}}"><i class="fa fa-lock"></i>Logout</a></li>
                                @endif
                               
                                    </ul>
                              </li>
                                
								<li class="dropdown"><a href="#">Problems<i class="fa fa-angle-down"></i></a>
                                   
                            <ul id="product" role="menu" class="sub-menu">
                                
                               @foreach($mainCategories as $cat)         
                                <li><a href="{{asset('/products/'.$cat->name)}}">{{$cat->name}}</a></li>
                                @endforeach
                                    </ul>
                              </li>
								
								<!--<li><a href="404.html">404</a></li>-->
								
                            </ul>
					
					
					</div>
				</div>
                </div></div>
		</div><!--/header-bottom-->
	</header><!--/header-->
<br><br><br><br><br><br><br><br>
