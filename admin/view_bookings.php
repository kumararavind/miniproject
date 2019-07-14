
<?php
  
  // code to declare the winner and change the product status to ended
include 'session.php';
include 'con_db.php';

  $qry_select_product=mysql_query("SELECT * FROM `assign_work` where Status='done'");
  while ($row=mysql_fetch_array($qry_select_product)) 
  {
    $srqstid=$row['Sreqst_ID'];
    
        $qry_update_winner=mysql_query("UPDATE `service_request` SET `Status`='service_provided' WHERE `Service_rqst_id`='$srqstid'");

      
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>bookings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Forms</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 
  <div class="grid-form1">
  	       <h3>View Appointments</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<th>Sl No.</th>
									<th>User Name</th>
									<th>Service Type</th>
									<th>Vehicle No.</th>
									<th>Purpose</th>
									<th>Service Date</th>
									<th>Sent Date</th>
									<th>Action</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("SELECT * from service_request,vehicle,user where service_request.V_ID=vehicle.V_ID and vehicle.User_ID=user.User_ID and service_request.`Status`!='service_provided' group by Service_rqst_id order by Reqst_Date desc") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['Full_Name']; ?></td>
								 	<td><?php echo $row['Service_Type']; ?></td>
								 	<td><?php echo $row['V_No']; ?></td>
								 	<td><?php echo $row['Extra_Service']; ?></td>
								 	<td><?php echo $row['Req_Ser_For']; ?></td>
								 	<td><?php echo $row['Reqst_Date']; ?></td>
								 	<td><?php if($row['Status']=='req_sent')
								 	{
								 	$serdate=$row['Req_Ser_For'];
								 			$check=mysql_query("select * from service_request where Req_Ser_For='$serdate' and Status='confirmed'");
								 			$count=mysql_num_rows($check);
								 			if($count>0){ ?>
								 				<a href="rejectservice.php?sid=<?php echo $row['Service_rqst_id']; ?>" class="btn btn-danger"><i class="fa fa-close"></i></a> 
								 	<?php }
								 			else if($count<=0) { ?>
								 			<a href="acceptservice.php?sid=<?php echo $row['Service_rqst_id']; ?>" class="btn btn-info"><i class="fa fa-check"></i></a> 
								 	  <?php } }
								 	  else if($row['Status']=='confirmed') {  ?>
								 	  		<span style="color: green; font-weight: bold;">Confirmed</span>
								 	  		<?php $serv=$row['Service_rqst_id']; $bk=mysql_query("select * from assign_work where Sreqst_id='$serv'");
								 	  			$nc=mysql_num_rows($bk); $rd=mysql_fetch_array($bk);
								 	  			if($nc<=0) { 
								 	  		 ?>
								 	  		<a href="assignwork.php?sid=<?php echo $row['Service_rqst_id']; ?>" class="btn btn-info" title="Assign Work"><i class="fa fa-calendar-check-o"></i></a>
								 	  		<?php } else { $s_id=$rd['Staff_ID']; 
								 	  			$ss=mysql_query("select * from staff where Staff_ID='$s_id'");
								 	  			$wrt=mysql_fetch_array($ss);
								 	  		?>
								 	  			<span style="color: purple; font-weight: bold;">Assigned to <?php echo $wrt['Staff_Name']; ?> </span>
								 	<?php  } } else if($row['Status']=='rejected') {  ?>
								 		<span style="color: red; font-weight: bold;">Cancelled</span>
								 	<?php  }
								 	   ?></td>
								 </tr>
								 <?php } ?>
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
	<!--//scrolling js-->
<!---->

</body>
</html>

