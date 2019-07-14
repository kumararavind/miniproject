<!DOCTYPE html>
<html>
<head>
<title>Auto Scope</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile" style="font-family: trebuchet ms;">
		<div class="header_left">
			<ul>
				<h1><a  href="index1.php" "><span >AUTO</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
				
			</ul>

		</div>
		<div class="header_right" style="margin-top: 20px;">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav ">
							<li><a href="index1.php" class="hvr-underline-from-center active">HOME</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN <span class="caret"></span></a>				
							  <ul class="dropdown-menu" role="menu">
				                <li><a href="admin/index.php">ADMIN</a></li>
				                <li><a href="emplogin.php">STAFFS</a></li>
				                <li><a href="userlogin.php">USERS</a></li>
				              </ul>                
				            </li>
						</ul>
					</div>
		</div>
		<div class="clearfix"></div>
</div>

			<div class="container">

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="well login-container">
					<h4 class="text-center">USER LOGIN </h4>
					<hr>
					
					
					
					<form name="" method="post" action="">
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" placeholder="Enter your Email" class="form-control" required> 
						</div>
						
						<div class="form-group">

							<label>Password:</label>
							<input type="password" id="password" name="password" placeholder="Enter your Password"  data-toggle="password" class="form-control" required>
						
						</div>
							
						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">
							<a href="user_reg.php" class="btn btn-danger btn-block">REGISTER </a>
						</div>
								
					</form>
					<?php include('con_db.php');
				if(isset($_POST['login']))
				{
					$email=mysql_real_escape_string($_POST['email']);
					$pwd=mysql_real_escape_string($_POST['password']);
					$sql=mysql_query("select * from user where E_Mail='$email' and Password='$pwd'") or die(mysql_error());
					$nums=mysql_num_rows($sql);
					$rows=mysql_fetch_array($sql);
					if($nums>=1)
					{
						session_start();
						$_SESSION['uname']=$rows['Full_Name'];
						$_SESSION['uid']=$rows['User_ID'];

						echo '<script>alert("Welcome '.$_SESSION['uname'].'"); window.location="userpage.php"; </script>';
					}
					else{
						echo '<script>alert("Your access is denied"); </script>';
					}
				}

			 ?>
				</div>
			</div>		  
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
		$("#password").password('toggle');
	</script>
<!-- //banner -->
<div><br></div>
	
<!-- footer -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h3>About us</h3>
				<p>AUTO SCOPE'S car detailing process is  a complete top to bottom, bumper cleaning experience that will restore your vehicle's original power and beauty.</p>
<div class="w3ls_newsletter_social">
				
			</div>				
			</div>
			<div class="col-md-3 footer-grid">
			     <h3>Need Help ?</h3>
					<ul>
						
						<li><a class="scroll" href="index1.php">Home</a></li>
					</ul>
					
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-grid">
			     <h3>CONTACT US</h3>
			     	<p>MANGALORE, KARNATAKA</p>
					<p>+91 9999999999</p>
					<p>SHREE DEVI INSTITUTE OF TECH KENJAR, MANAGALORE</p>
					<p><a href="mailto:info@example.com">shreedevi@gmail.com</a></p>	
				<div class="clearfix"> </div>
			</div>

			<div class="col-md-3 footer-grid">
			 	<h3>Opening Hours</h3>
					<p>Monday-Friday:7.00AM-10.00PM</p>	
					​<p>Saturday-Sunday:7.00AM-8.00PM</p>
				<div class="clearfix"> </div>
			</div>
			
	
	</div>
	<div><br><br></div>
	<div><br><br></div>
	<div class="w3l_footer_agile">
			<p>© 2017 autoscope. All Rights Reserved | Design by <a href="">aravind</a></p>
			
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

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>