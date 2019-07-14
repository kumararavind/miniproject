
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
<h2 style="text-align: center; margin-top: -75px;">ADD APPOINTMENT DETAILS</h2>
<hr>
			<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4 style="text-align: center; color: white;">View Schedule</h4>
					<table class="table table-bordered table-hover" style="background-color: white;">
								<tr>
									<th>Sl No.</th>
									<th>Days</th>
									<th>From Time</th>
									<th>To Time</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("select * from schedule") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php $days=$row['days'];
								 			$dy=explode(",", $days);
								 			foreach ($dy as $key => $value) {
								 				echo $value. ' ';
								 			}
								 	 ?></td>
								 	<td><?php echo $row['from_timings']; ?></td>
								 	<td><?php echo $row['to_timings']; ?></td>

								 </tr>
								 <?php } ?>
							</table>
				</div>
				<div class="col-md-6">
					<h4 style="text-align: center; color: white;">View Services</h4>
					<table class="table table-bordered table-hover" style="background-color: white;">
								<tr>
									<th>Sl No.</th>
									<th>Service Type</th>
									<th>Desc</th>
									<th>Cost</th>
									<th>Duration</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("select * from service") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <form action="" method="post">
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['S_Type'];
								 	 ?></td>
								 	<td><?php echo $row['Desciption']; ?></td>
								 	<td><?php echo $row['S_Cost']; ?></td>
									<td><?php echo $row['S_Duration']; ?></td>
									
								 </tr>
								 </form>
								 <?php } ?>
							</table>
				</div>
			</div>
			
		<div class="row">
			<div class="col-md-4" style="margin-left: -27px;">
				<div class="well login-container" style=" margin-top: -2px;">
					<h4 class="text-center">Book Service </h4>
					<hr>
					
					
					
					<form name="" method="post" action="">
						<div class="form-group">
							<label>User ID</label>
							<input type="text" name="uid" placeholder="Enter Your ID" value="<?php echo $uid;?>" class="form-control" readonly> 
						</div>
						
						<div class="form-group">

							<label>Vehicle Number</label>
							<select name="vid" class="form-control">
							<option value="">Select your Vehicle</option>
							<?php include('con_db.php');
									$qry=mysql_query("select * from vehicle where User_ID='$uid'") or die(mysql_error());
									while($rw=mysql_fetch_array($qry))
									{
								 ?>
								 <option value="<?php echo $rw['V_ID']; ?>"> <?php echo $rw['V_No']; ?> </option>
								 <?php } ?>
							</select>
						</div>
						<div class="form-group">

							<label>Service Type</label>
							<select name="stype" class="form-control">
								<option value="">Select service type</option>
							<?php include('con_db.php');
									$qry=mysql_query("select * from service") or die(mysql_error());
									while($rw=mysql_fetch_array($qry))
									{
								 ?>
								 <option value="<?php echo $rw['S_Type']; ?>"> <?php echo $rw['S_Type']; ?> </option>
								 <?php } ?>
						
							</select>
						</div>
						<div class="form-group">

							<label> Problem </label>
							<input type="text" name="problem" placeholder="Enter vehicle problem" class="form-control" required>
						</div>

						<div class="form-group">

							<label> Service Book For </label>
							<input type="datetime-local"  name="datetime" value="date" class="form-control" required>
						
						</div>
						
							
						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="submit" name="Add" value="Add"  class="btn btn-primary btn-block">
						</div>
						
							
					</form>
					
					<?php include('con_db.php');
				if(isset($_POST['Add']))
				{
					$uid=mysql_real_escape_string($_POST['uid']);
					$vid=mysql_real_escape_string($_POST['vid']);
					$stype=mysql_real_escape_string($_POST['stype']);
					$prob=mysql_real_escape_string($_POST['problem']);
					$dt=mysql_real_escape_string($_POST['datetime']);
					$dt1=date_default_timezone_get(timezone_location_get('asia/kolkata'));
					if($dt==$dt2)
					{
						echo '<script>alert("todays date is not possible");
						window.location="servicebook.php"</script>';
					}
					
					$sql=mysql_query("INSERT INTO `service_request`( `User_ID`, `V_ID`, `Reqst_Date`, `Service_Type`, `Extra_Service`, `Req_Ser_For`, `Status`) VALUES ('$uid','$vid',now(),'$stype','$prob','$dt','req_sent')") or die(mysql_error());
					if($sql)
					{
						
								echo '<script>alert("Vehicle Details is added"); window.location="servicebook.php"; </script>';
							}
							else
							{
								echo '<script>alert("Failed , Try again"); </script>';
							}
					}
				
			 ?>
				</div>
			</div>	
			<div class="col-md-8">
				<table class="table table-bordered  table-hover" style="background-color: white; margin-left: 50px;margin-top: 50px;">
								<tr>
									<th>Sl No.</th>
									<th>Vehicle no</th>
									<th>Service Type</th>
									<th>Service Date</th>
									<th>Problem</th>
									<th>Sent Date</th>
									<th>Status</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("select * from service_request,vehicle where service_request.V_ID=vehicle.V_ID and vehicle.User_ID='$uid'") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['V_No']; ?></td>
								 	<td><?php echo $row['Service_Type']; ?></td>
								 	<td><?php echo $row['Req_Ser_For']; ?></td>
								 	<td><?php echo $row['Extra_Service']; ?></td>
								 	<td><?php echo $row['Reqst_Date']; ?></td>
								 	<td><?php if($row['Status']=='req_sent') { ?>
								 	<span style="color: orange; font-weight: bold;">Yet to confirm</span>
								 	 <?php } else if($row['Status']=='confirmed') { ?>
								 	 <span style="color: green; font-weight: bold;">Confirmed</span>
								 	  <?php }else if($row['Status']=='rejected') { ?>
								 	 <span style="color: red; font-weight: bold;">Sorry, Schedule is booked</span>
								 	  <?php } ?></td>
								 	

								 </tr>
								 <?php } ?>
							</table>
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
						<!-- <script src="js/responsiveslides.min.js"></script>
							<script>
								
								$(function () {
								  
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


</script>	 -->
<!--banner Slider starts Here-->
							 <!-- required-js-files-->
							<!-- <link href="css/owl.carousel.css" rel="stylesheet">
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
							    </script> -->
								 <!--//required-js-files-->

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>