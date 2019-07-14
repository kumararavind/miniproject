
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
 <link rel="stylesheet" href="pop/fonts/font.css">
     <link rel="stylesheet" href="pop/popup.css">
     <script src="pop/script.js"></script>
</head>
<body onload="pop()">

<div id="popup1" class="foreground">
        <div class="popup">
            <div class="popupcontainer">
            <h7>In Loving Memory Of</h7>
            <a class="close" href="index.php">&times;</a>
            <div class="popupcontent">
                <figure style="text-align: center">
                    <img src="pop/pic.jpg" alt="IMAGE"/>
                    <figcaption>Mrs. Rasheeda Z Khan<br/>HEAD OF ISE DEPARTMENT
                    </figcaption>
                </figure>
                <p>While the loss of a loved one is never easy,<br/> even when anticipated,
                <br/>it is most certainly the hardest when they are taken from us too soon.<br/>
                    We offer our sincere condolences for the loss of our beloved Professor.</p>
            </div>
            </div>
        </div>
    </div>
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

<!-- //header -->
	<div class="container" >
		
		<h2>AutoScope</h2>
		<h3>We are here to help you</h3>
			<!--timer-->
						<div class="agileits-timer"> 
							<div class="main-title">
						     
						</div>
						</div>
					
				</div>
	</div>
	
<div> <br></div>
<!-- about -->
<div class="about" id="about">
		<div class="container">
		 <div class="wthree_title_agile two">
						        <h3>About <span>Us</span></h3>
				</div>
				<p class="sub_para two">It’s time to drive</p>
		 <div class="inner_w3l_agile_grids">
            <div class="col-md-6 about-left-w3layouts">
				<h6 class="sub">WELCOME TO OUR AUTO SCOPE.</h6>
				<p>AUTO SCOPE'S car detailing process is a complete top to bottom, bumper-cleaning experience that will restore your vehicle's original power and beauty. If you wish your automobile optimum appearance, our auto spa is flexibility, technology and customer service. Our shop has full range of high quality and varied Automotive detailing, Car wash & Car Care products. Our reputation for offering the highest Quality products is unsurpassed</p>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
 </div>
<!--about-section-->
<div> <br></div>

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

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>