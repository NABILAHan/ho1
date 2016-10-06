
<!DOCTYPE html>
<html>
<head>
<title>D-aman_resort</title>
<!-- Custom Theme files -->

<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stylish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


     <link href="{{asset('New folder/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('New folder/css/business-casual.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script> 
 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<!--pop-up-->
<script src="{{asset('js/menu_jquery.js')}}"></script>
<!--//pop-up-->
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right,
    ul.topnav li {float: none;}
}
</style>
</head>
<body>
	<div class="container">
        <div class="col-md-12 headerRight"> 
        <div class="headerTop">
            <div class="info">
             <span class="phone">+66 (0) 81 959 7668</span>
             <br> info@daman-resort.com
         </div>
         
     </div>
 
</div>
        <div class="col-md-12">
 <div class="brand">D-aman Hotel & Resort </div></div></div>
	<!--header-->
	 <nav>
	<div class="header">
		<div class="container">
			<div class="header-left">
				<ul> 
					@if (Auth::guest())
						<li><a href="{{url('/login')}}">Login</a></li>
						<li><a href="{{url('/register')}}">Register</a></li>
					@else
					<li><a href="#">{{ Auth::user()->name }}</a></li>
					<li><a href="{{url('/auth/logout')}}">Logout</a></li>
					@endif
				</ul>
		</div>
		
			<div class="logo">
				<a href="{{url('home')}}"> <img src="{{asset('images/lo.png')}}" alt=""/></a>
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="{{asset('images/menu.png')}}" alt=""/> </span>
				<ul>
					<li><a href="{{url('home')}}">Home</a></li>
					<li><a href="{{url('meeting')}}">MeetingRoom</a></li>					
					<li><a href="{{url('room')}}">ReservationRoom</a></li>
					<li><a href="{{url('room')}}">Reservation</a></li>
					<li><a href="{{url('food')}}">Food</a></li>
					<li><a href="{{url('contact')}}">Contact</a></li>
				</ul>
				<!-- script-for-menu -->
				<script>					
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle("slow" , function(){
						});
					});
				</script>
				<!-- script-for-menu -->
			</div>
			 </nav>

			<div class="clearfix"> </div>	
			<!-- search-scripts -->
			<script src="{{asset('hotel/js/classie.js')}}"></script>
			<script src="{{asset('hotel/js/uisearch.js')}}"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
		</div>
	</div>	
	<!--banner-->

	<!--//banner-->
	@yield('content')
   
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<p><a href="http://www.d-aman.com/daman/index.php/th/">D-aman</a></p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="https://www.facebook.com/%E0%B8%94%E0%B8%B5-%E0%B8%AD%E0%B8%B2%E0%B8%A1%E0%B8%B2%E0%B8%99-%E0%B9%82%E0%B8%AE%E0%B9%80%E0%B8%95%E0%B9%87%E0%B8%A5-%E0%B9%81%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C-%E0%B8%A3%E0%B8%B5%E0%B8%AA%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97-516820028405882/?fref=ts" class="fb"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#" class="gg"></a></li>
					<li><a href="#" class="pn"></a></li>					
				</ul>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
	</script>	
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>