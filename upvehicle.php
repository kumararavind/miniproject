
<?php include('usersession.php');
	include('con_db.php');
	$vid=$_GET['vid'];
	$sql=mysql_query("select * from vehicle where V_ID='$vid'") or die(mysql_error());
	$row=mysql_fetch_array($sql);
 ?>

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
<h2 style="text-align: center; margin-top: -75px;">UPDATE VEHICLE</h2>
<hr>
			<div class="container">

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="well login-container" style=" margin-top: -2px;">
					
					<form name="" method="post" action="">
						<div class="form-group">
							<label>User ID</label>
							<input type="text" name="uid" placeholder="Enter Your ID" value="<?php echo $uid;?>" class="form-control" readonly> 
						</div>
						
						<div class="form-group">

							<label>Vehicle Number</label>
							<input type="text" name="vnum" value="<?php echo $row['V_No']; ?>" placeholder="Enter vehicle Number" class="form-control" required>
						
						</div>
						<div class="form-group">

							<label>Vehicle Type</label>
							<select name="vtype" onblur="showBrand(this.value)" class="form-control">
								<option value="<?php echo $row['V_Type']; ?>" style="background-color: yellow;"><?php echo $row['V_Type']; ?></option>
								<option value="two wheeler"> Two wheeler </option>
								<option value="three wheeler"> Three wheeler </option>
								<option value="four wheeler"> Four wheeler </option>
							</select>
						</div>
						<div class="form-group">

							<label> Brand </label>
							<select name="brand" id="brand" class="form-control">
								<option value="<?php echo $row['Brand']; ?>" style="background-color: yellow;"><?php echo $row['Brand']; ?></option>								
							</select>
						</div>

						<div class="form-group">

							<label> Model </label>
							<input type="text" name="model" value="<?php echo $row['Model']; ?>" placeholder="Enter vehicle model" class="form-control" required>
						
						</div>
						<div class="form-group">

							<label> Model No </label>
							<input type="text" name="model_no" value="<?php echo $row['model_no']; ?>" placeholder="Enter vehicle model no" class="form-control" required>
						
						</div>
							
						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="submit" name="update" value="Update" class="btn btn-primary btn-block">
						</div>
						
							
					</form>
					<script>
						function showBrand(a) 
							{
				  				//alert('sdfghjk');
				  				if (window.XMLHttpRequest) 
				  					{
				    					// code for IE7+, Firefox, Chrome, Opera, Safari
				    					xmlhttp=new XMLHttpRequest();
				  					} 
				  				else
				  					{ // code for IE6, IE5
				    					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  					}
				  				xmlhttp.onreadystatechange=function() 
				  				{
				  					if (xmlhttp.readyState==4 && xmlhttp.status==200)
										{
				    					 
											document.getElementById("brand").innerHTML=this.responseText;;
										}
								}
				  				xmlhttp.open("GET","showbrand.php?q="+a,true);
				  				xmlhttp.send();
							}
					</script>
					<?php include('con_db.php');
				if(isset($_POST['update']))
				{
					$uid=mysql_real_escape_string($_POST['uid']);
					$vnum=mysql_real_escape_string($_POST['vnum']);
					$vtype=mysql_real_escape_string($_POST['vtype']);
					$brand=mysql_real_escape_string($_POST['brand']);
					$model=mysql_real_escape_string($_POST['model']);
					$model_no=mysql_real_escape_string($_POST['model_no']);
					$sql=mysql_query("UPDATE `vehicle` SET `V_No`='$vnum',`Brand`='$brand',`V_Type`='$vtype',`Model`='$model',`model_no`='$model_no' WHERE V_ID='$vid' and User_ID='$uid'") or die(mysql_error());
					if($sql)
					{
						
								echo '<script>alert("Vehicle Detail is updated"); window.location="add_vehicle.php"; </script>';
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