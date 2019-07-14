
<?php include('staffsession.php'); ?>
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
				<h1><a  href="homepage.php" "><span >AUTO</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
				
			</ul>
		</div>
		<div class="header_right" style="margin-top: 20px;">
		     <?php include('userheader.php'); ?>

		</div>

		<div class="clearfix"></div>
</div>

<!-- //header -->
<h2 style="text-align: center; margin-top: -75px;">APPOINTMENTS</h2>
<hr>

			<div class="container">

		<div class="grid-form1">
  	       
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
							<table class="table table-bordered table-striped table-hover" style="background-color: white;">
								<tr>
									<th>Sl No.</th>
									<th>Problem</th>
									<th>Vehicle no</th>
									<th>Customer</th>
									<th>From date</th>
									<th>To date</th>
									<th>Status</th>


								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("SELECT Extra_Service,V_No,Full_Name,S_ReturnDate,Assign_Date,assign_work.`Status`,Work_ID,user.`User_ID` from assign_work,service,service_request,user,vehicle where service_request.Service_rqst_ID=assign_work.Sreqst_ID and user.User_ID=service_request.User_ID and assign_work.Staff_ID='$sid' and user.User_ID=vehicle.User_ID group by assign_work.`Work_ID`") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['Extra_Service']; ?></td>
								 	<td><?php echo $row['V_No']; ?></td>
								 	<td><?php echo $row['Full_Name']; ?></td>
								 	<td><?php echo date('d-m-Y',strtotime($row['Assign_Date'])); ?></td>
								 	<td><?php echo date('d-m-Y',strtotime($row['S_ReturnDate'])); ?></td>
								 	<td> <?php if($row['Status']=='assign') {?>
								 	<a href="complete.php?aid=<?php echo $row['Work_ID']; ?>" class="btn btn-primary">Complete</a> <a href="incomplete.php?aid=<?php echo $row['Work_ID']; ?>" class="btn btn-danger">Not Done</a>
								 	<?php } else if($row['Status']=='completed'){ ?>
								 		<span style="color: green; font-size: 25px; font-weight: bold; ">Completed</span>
								 		<?php $wid=$row['Work_ID'];
								 			$qq=mysql_query("select * from bill where Work_ID='$wid' and status='not_generated'");
								 			$rc=mysql_num_rows($qq);
								 			if($rc<=0){
								 		?>
								 		<a href="generate_bill.php?wid=<?php echo $row['Work_ID']; ?>&&uid=<?php echo $row['User_ID']; ?>" class="btn btn-warning">Report</a>
								 	   <?php } else if($rc>0) {?>
								 	   <span style="color: purple; font-size: 25px; font-weight: bold; ">Bill Sent to Manager</span>
								 	<?php } } else if($row['Status']=='not_done'){ ?>
								 		<span style="color: red; font-size: 25px; font-weight: bold; ">Not Done</span>
								 	<?php }else if($row['Status']=='done'){ ?>
								 		<span style="color: blue; font-size: 25px; font-weight: bold; ">Bill sent to Manager</span>
								 	<?php }  ?>
								 	</td>
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