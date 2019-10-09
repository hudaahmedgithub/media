<style>
    body
{

}
header {
    height: auto;
   
    position: fixed;
    width: 100%;
    z-index: 999;
}
header i.icon {
    position: absolute;
    right: 30px;
    top: 32px;
    cursor: pointer;
    z-index: 10;
    display: none;
}

header .logo h2 {
    font-size: 45px;
    color: #000;
}

header nav .nav-list {
    list-style: none;
    margin-bottom: 0;
    display: flex;
    justify-content: space-around;
}

header nav .nav-list .list a {
    display: block;
    padding: 15px 0;
    margin: 9px 0;
	font-size:20px;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease-in-out ;  
}

header nav .nav-list .list a:hover {
    color: #000;
}



@media (max-width:575px) {
   
    header .logo h2 {
        text-align: center
    }
    header nav .nav-list {
        display: none ;      
	    padding: 0;  
        text-align: center;
        
    }
    header i.icon {
        display: block
    }
}


/*home*/
section .sec
{
	padding:20px 0;
    margin-bottom: 30px;
}
.overlay
{
	position:absolute;
	top:0;
	right:0;
	bottom:0;
	left:0;
	background:rgba(0,0,0,0.2);
}
.sticky
{
	
    margin-top: 0px;
    background:#fff;
	color:#fff;	
}


section.home
{
	height:680px;
    background-size:cover;
    background-position:center;	
    background-size:cover;
	background-attachment:fixed;
	background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.9)), url("../images/home/skill-bg.jpg");
	position:relative;
}
.mag
{
    height:680px;
    width: 100%;
    background-size:cover;
    background-position:center;	
    background-size:cover;
	background-attachment:fixed;
	position:relative;
}

.home .home-tit
{
	margin-top:200px;
	font-size:50px;
	color:#9f7590;
	
}
.home-parg
{
	margin-top:30px;
	font-size:25px;
	color:#990033;
}
@media (max-width:575px)
{ 
header
{
	background:#000;
}
.home-tit
{
	font-size:25px;
	
}
	.button
	{
		margin-bottom:10px;
	}
}
.button
{
	width:180px;
	height:10%;
	margin-top:20px;
	background-color:#990033;
	
	color:#fff;
	padding:10px 0;
	font-size:25px;
	text-align:center;
}
.button:hover
{
	background-color:#fff;
	color:#990033;
}
.pricing
{
    margin-top: 900px;
    background: #fff;
    margin-bottom: -200px;
    margin-right: -430px;
   
}

.pricing .plan
{
    text-align: center;
    margin-left: 20px;
    background: #ffeeee;
    transition: all 0.5s ease-in-out;
}
.pricing .plan-title.active
    {
        background: #003;
    }
.pricing .plan .plan-title
{
   background: #D68806;
   color: azure;
   padding: 10px 0;
    width: 100%;
    transition: all 0.5s ease-in-out;
}

.pricing .plan:hover .plan-title
{
    background:#CC5500;
    
}
.pricing .plan:hover p
{
    color: #046;
}

.pricing .plan:hover
{   
    position: relative;
    margin-top: -20px;
  
}
.pricing .plan .plan-title img
    {
        border-radius: 50%;
        width: 200px;
        height: 200px;
    }
.pricing .plan .plan-title span
{
    display: block;
    margin-bottom: 10px;
    transform: all 0.5s ease-in-out;
    
}
.pricing .plan .plan-title .price
{
    color: #fff;
    
}
.pricing ul
{
border-top: 2px solid #990033; 
}

.pricing ul li
{
    margin-top: 10px;
    font-size: 20px;
    color: #000;


}
.pricing .plan .pl-desc
{
    font-size: 50px;
    color: #990033;
  
    
}
.section
{
	padding:20px 0;
   
}
.section-tit
{
	font-size:40px;
	color:#990033;
}
.line
{
	width:200px;
	background-color:#999;
	height:3px;
	margin:auto;
	margin-bottom:20px;
	
}
.line span
{
	display:block;
	width:130px;
	height:6px;
	background-color:#990033;
	margin:auto;   /*center*/
	position:relative;
	bottom:2px;
}
.section p
{
	line-height:1.5;
	font-size:20px;
	color:#333;
	margin:auto;
	width:50%;
}
@media (max-width:575px)
{
	.section p
	{
		width:100%;
	}
}
/*about*/

    </style>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
		
	<!--	<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
      