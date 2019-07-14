
<?php include('session.php');
$billid=$_GET['billid'];
$uid=$_GET['uid'];
include('con_db.php');
$sq=mysql_query("SELECT * FROM bill,user where billid='$billid' and user.User_ID='$uid' and bill.User_ID=user.User_ID");
$read=mysql_fetch_array($sq);
$stid=$read['Staff_ID'];
$wid=$read['Work_ID'];
$qry=mysql_query("SELECT * FROM service_request,assign_work where assign_work.Sreqst_ID=service_request.Service_rqst_id and assign_work.`Work_ID`='$wid'");
$wr=mysql_fetch_array($qry);
$qr=mysql_query("SELECT * FROM staff where Staff_ID='$stid'");
$res=mysql_fetch_array($qr);

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>final bill</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>


</head>
<body>
<div id="wrapper">
       <?php include('sidebar.php'); ?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Forms</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 		
<!---->

<!---->
  <div class="grid-form1">
  	       <h3>View Bill Details</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
							<table class="table table-bordered table-striped table-hover">
								<form action="" method="post">
								<tr>
									<th colspan="6">Staff Name : <h4 style="color: orange; "><?php echo $res['Staff_Name']; ?></h4></th>
								</tr>
								<tr>
									<th colspan="6">Work : <h4 style="color: orange; "><?php echo $wr['Extra_Service']; ?></h4></th>
								</tr>
								<tr>
									<th>Sl No.</th>
									<th>Item</th>
									<th>Qty</th>
									<th>Rate</th>
									<th>Tax</th>
									<th>Total</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("select * from bill_details,bill where bill.billid=bill_details.billid and bill_details.`billid`='$billid'") or die(mysql_error()); $ntotal=0;
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
								 <?php $ntotal=$ntotal + $row['total']; } ?>
								 <tr>
								 	<th colspan="5" style="text-align: right;">Total Sum</th>
								 	<td colspan="6"><input type="text" id="gtotal" name="gtotal" class="form-control" value="<?php echo $ntotal; ?>" readonly></td>
								 </tr>
								  <tr>
								 	<th colspan="5" style="text-align: right;">Discount</th>
								 	<td colspan="6"><input type="text" name="disc" onblur="showfinalamt(this.value)" id="disc" value="0" class="form-control"></td>
								 </tr>
								 <tr>
								 	<th colspan="5" style="text-align: right;">Grand Sum</th>
								 	<td colspan="6"><input type="text" name="finalamt" value="<?php echo $ntotal; ?>" id="finalamt" class="form-control" readonly=""></td>
								 </tr>
								 <tr>
								 	<td colspan="6"><input type="submit" name="calculate" value="Finalize" class="btn btn-primary pull-right"></td>
								 </tr>
								 </form>
								 <?php 
    	include('con_db.php');
    	if(isset($_POST['calculate'])) 
    	{
    		$finalamt=$_POST['finalamt'];
    		$bill=$_POST['bill'];
    		$discount=$_POST['disc'];
    		$sql=mysql_query("UPDATE bill SET gtotal='$finalamt',status='finalized',discount='$discount' where billid='$bill'") or die(mysql_error());
    		if($sql)
    		{
    			echo '<script>alert("Final bill is generated");window.location="bill.php"; </script>';
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
 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2018 Autoscope. All Rights Reserved | Design by: aravind</p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script type="text/javascript">
		function showfinalamt(a)
		{
			var gtotal=parseFloat(document.getElementById('gtotal').value);
			var finalamt= gtotal - a;
			document.getElementById('finalamt').value= finalamt;
		}
	</script>
	<!--//scrolling js-->
<!---->

</body>
</html>
