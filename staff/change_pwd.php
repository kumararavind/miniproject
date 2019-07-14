
<!DOCTYPE html>
<html>
<head>
<title>Auto Scope</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.flipster.css">
		<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/bootstrap-show-password.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile">
		<div class="header_left">
			<ul>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
			</ul>
		</div>
		<div class="header_right">
		     

		</div>
		<div class="clearfix"></div>
</div>
<!-- //header -->

	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="homepage.php"><span class="logo-c">Auto</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="home.php" class="hvr-underline-from-center active">Home</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointments<span class="caret"></span></a>				
							  <ul class="dropdown-menu" role="menu">
				                <li><a href="">View Appointments</a></li>
				                <li><a href="">Update report</a></li>
				              </ul>                
				            </li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<span class="caret"></span></a>				
							  <ul class="dropdown-menu" role="menu">
				                <li><a href="">Change Password </a></li>
				                <li><a href="logout.php">logout</a></li>
				              </ul>                
				            </li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>
		</div>
		<div class="clearfix"></div>
		<br>
			<div class="container">

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="well login-container">
					<h4 class="text-center">Change Password </h4>
					<hr>
					
					<form name="" method="post" action="">
						<div class="form-group">
							<label>Current Password</label>
							<input type="password" name="cupassword" placeholder="Enter your current password" class="form-control" required> 
						</div>
						
						<div class="form-group">

							<label>New Password:</label>
							<input type="password" id="password" name="npassword" placeholder="Enter your new Password"  data-toggle="password" class="form-control" required>
						
						</div>

						<div class="form-group">

							<label>Re_enter Password:</label>
							<input type="password" id="password" name="rpassword" placeholder="Re_Enter your  Password"  data-toggle="password" class="form-control" required>
						
						</div>
								
						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="change" name="Change" value="CHANGE" class="btn btn-primary btn-block">
						</div>
						
							
					</form>
					
				
<script type="text/javascript">
		$("#password").password('toggle');
	</script>
<!-- //banner -->

<!-- footer -->
	<div class="newsletter">
		 <?php include('userfooter.php'); ?>
		</div>
<!-- //footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--scripts--> 
<!-- Counter required files -->
		<script type="text/javascript" src="js/dscountdown.min.js"></script>
		<script src="js/demo-1.js"></script>
		<script>
			jQuery(document).ready(function($){						
				$('.demo2').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black'
					});								
			});
		</script>
	<!-- //Counter required files -->

	<!--//scripts--> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<script src="js/modernizr.custom.js"></script>
		
							
	<script src="js/jquery.flipster.js"></script>
<script>

	$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });


</script>	
<!--banner Slider starts Here-->
							 <!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination :false,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>