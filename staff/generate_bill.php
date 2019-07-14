
<?php include('staffsession.php');
$wid=$_GET['wid'];
$uid=$_GET['uid'];
include('con_db.php');
$sql=mysql_query("SELECT * FROM assign_work,user,service_request where service_request.Service_rqst_id=assign_work.Sreqst_ID and service_request.User_id='$uid' and service_request.User_ID=user.User_ID");
$read=mysql_fetch_array($sql);
 ?>

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
				<h1><a  href="homepage.php" "><span >AUTO</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
				
			</ul>
		</div>
		<div class="header_right" style="margin-top: 20px;">
		     <?php include('userheader.php'); ?>

		</div>

		<div class="clearfix"></div>
</div>

<!-- //header -->
<h2 style="text-align: center; margin-top: -75px;">BILLS</h2>
<hr>

	<div class="clearfix"></div>
		<br>
			<div class="container">
		<div class="row">
			<div class="col-d-2"></div>
			<div class="col-md-10">
			  <form action="" method="post">
			  <div class="form-group col-md-4">
			  	<label>User name</label>
				<input type="text" name="username" value="<?php echo $read['Full_Name']; ?>" class="form-control" readonly>
			  </div>
			  <div class="form-group col-md-4">
			  	<label>Work</label>
				<input type="text" name="work" value="<?php echo $read['Extra_Service'];?>" class="form-control" readonly>
			  </div>
			  <div class="col-md-2">
				<input type="submit" class="btn btn-warning" style="margin-top:20px; " name="save" value="Submit">
			 </div>
			  </form>
			   <?php 
    	include('con_db.php');
    	if(isset($_POST['save'])) 
    	{
    		$sql=mysql_query("INSERT INTO `bill`(Staff_ID,`User_ID`,`Work_ID`, `billdate`) VALUES ('$sid','$uid','$wid',now())") or die(mysql_error());
    		if($sql)
    		{
    			echo '<script>alert("Enter the spare part details");window.location="generate_bill.php?wid='.$wid.'&&uid='.$uid.'"; </script>';
    		}
    		else
    		{
    			echo '<script>alert("Failed to generate"); </script>';
    		}
    	}

    ?>
			</div>
		</div>		
			
		<div class="row">
			<div class="col-md-4" style="margin-left: -27px;">
				<div class="well login-container" style=" margin-top: -2px;">
					<h4 class="text-center">Generate Bill </h4>
					<hr>
					<form name="" method="post" action="">
						<div class="form-group">
							<label>Item name</label>
							<input type="text" name="iname" placeholder="Enter item name" class="form-control" required=""> 
						</div>
						<div class="form-group">
							<label>Quantity</label>
							<input type="text" name="qty" id="qty" onblur="showTotal();" placeholder="Enter the Quantity" class="form-control" required> 
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="text" name="price" id="price" onblur="showTotal()" value="0" placeholder="Enter the price" class="form-control" required=""> 
						</div>
						<div class="form-group">
							<label>Tax</label>
							<input type="text" name="tax" value="0" onblur="showTotal()" id="tax" placeholder="Enter the tax rate" class="form-control" required=""> 
						</div>
						<div class="form-group">
							<label>Total</label>
							<input type="text" name="total" id="total" placeholder="Enter the total amount" class="form-control" readonly> 
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="submit" name="Add" value="Add" class="btn btn-primary btn-block">
						</div>
						
							
					</form>
					
					<?php include('con_db.php');
				if(isset($_POST['Add']))
				{
					$iname=mysql_real_escape_string($_POST['iname']);
					$qty=mysql_real_escape_string($_POST['qty']);
					$price=mysql_real_escape_string($_POST['price']);
					$tax=mysql_real_escape_string($_POST['tax']);
					$total=mysql_real_escape_string($_POST['total']);
					$sq=mysql_query("SELECT * FROM bill WHERE Staff_ID='$sid' order by billid desc limit 1");
					$req=mysql_fetch_array($sq);
					$billid=$req['billid'];

					$sql=mysql_query("INSERT INTO `bill_details`(`billid`, `itemname`, `qty`, `price`, `tax`, `total`) VALUES ('$billid','$iname','$qty','$price','$tax','$total')") or die(mysql_error());
					if($sql)
					{
						
								echo '<script>alert("Vehicle Details is added"); window.location="generate_bill.php?wid='.$wid.'&&uid='.$uid.'"; </script>';
							}
							else
							{
								echo '<script>alert("Failed , Try again"); </script>';
							}
					}
			 ?>
				</div>
			</div>	
			<div class="col-md-5">
					<h4 style="text-align: center; color: white;">Bill</h4>
					<table class="table table-bordered table-hover" style="background-color: white;">
							<form action="" method="post">
								<tr>
									<th>Sl No.</th>
									<th>Item</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Tax</th>
									<th>Total</th>

								</tr>

									<?php include('con_db.php');
								$i=1;
									$sq=mysql_query("SELECT * FROM bill WHERE Staff_ID='$sid' order by billid desc limit 1");
									$req=mysql_fetch_array($sq);
									$billid=$req['billid'];
									$qry=mysql_query("select * from bill_details,bill where Staff_ID='$sid' and bill_details.`billid`='$billid' and bill_details.billid=bill.billid and bill.`status`='not_generated'") or die(mysql_error());
									$gtotal=0;
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								  <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['itemname']; ?></td>
								 	<td><?php echo $row['qty']; ?></td>
								 	<td><?php echo $row['price']; ?></td>
								 	<td><?php echo $row['tax']; ?></td>
								 	<td><?php echo $row['total']; ?></td>
								 </tr>
								 <input type="hidden" name="bill" value="<?php echo $billid;?>">
								 <?php $gtotal=$gtotal + $row['total']; } ?>
								 <tr>
								 	<th colspan="5" style="text-align: right;">Grand Sum</th>
								 	<td colspan="6"><input type="text" name="gtotal" value="<?php echo $gtotal; ?>" readonly></td>
								 </tr>
								 <tr>
								 	<td colspan="6"><input type="submit" name="calculate" value="Finalize" class="btn btn-primary pull-right"></td>
								 </tr>
								 </form>
								 <?php 
    	include('con_db.php');
    	if(isset($_POST['calculate'])) 
    	{
    		$gt=$_POST['gtotal'];
    		$bill=$_POST['bill'];
    		$sql=mysql_query("UPDATE bill SET gtotal='$gtotal',status='generated' where billid='$bill'") or die(mysql_error());
    		if($sql)
    		{
    			$st=mysql_query("UPDATE assign_work set Status='done' where Work_ID='$wid'");
    			echo '<script>alert("Done");window.location="my_works.php"; </script>';
    		}
    		else
    		{
    			echo '<script>alert("Failed to calculate"); </script>';
    		}
    	}

    ?>
							</table>
				</div>
		
		</div>

	</div>
	<div class="clearfix"></div>
		<br>
			
<script type="text/javascript">
		$("#password").password('toggle');
	</script>
	<script type="text/javascript">
		function showTotal()
		{
			var qty=parseFloat(document.getElementById('qty').value);
			var price=parseFloat(document.getElementById('price').value);
			var tax=parseFloat(document.getElementById('tax').value);
			var total= (qty * price) + ((qty*price) * (tax/100));
			document.getElementById('total').value=total;
		}
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
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>