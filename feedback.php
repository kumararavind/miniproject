
<?php include('usersession.php'); ?>
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

</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile" style="font-family: trebuchet ms;">
		<div class="header_left">
			<ul>
				<h1><a  href="userpage.php" "><span >AUTO</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
				
			</ul>
		</div>
		<div class="header_right" style="margin-top: 20px;">
		     <?php include('userheader.php'); ?>

		</div>

		<div class="clearfix"></div>
</div>

<!-- //header -->
<h2 style="text-align: center; margin-top: -75px;">YOUR FEEDBACK</h2>
<hr>

		<div class="container">

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="margin-left: -27px;">
				<div class="well login-container" style=" margin-top: -2px;">
					
					<form  name="" method="post" action="">
						<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Comments</label><br>
									<div class="col-sm-12"><textarea name="fbck" id="txtarea1" class="form-control1"></textarea></div>
						</div>

						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="submit" name="send" value="Add" class="btn btn-primary btn-block">
						</div>
						
							
					</form>

					<?php include('con_db.php');
				if(isset($_POST['send']))
				{
					$feedback=mysql_real_escape_string($_POST['fbck']);
					$sql=mysql_query("INSERT INTO `feedback`(`User_ID`, `date`, `feedback`) VALUES ('$uid',now(),'$feedback')") or die(mysql_error());
					if($sql)
					{
						
								echo '<script>alert("Your feedback is sent to the admin"); window.location="userpage.php"; </script>';
							}
							else
							{
								echo '<script>alert("Failed , Try again"); </script>';
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

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>