
<?php include('session.php');
		include('con_db.php');
		$sid=$_GET['sid'];
		$sql=mysql_query("select * from service_request where Service_rqst_id='$sid'");
		$fetch=mysql_fetch_array($sql);
		$assign_date=$fetch['Req_Ser_For'];

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>assign work</title>
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
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Forms</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		


<!---->



<!---->
  <div class="grid-form1">
  	       <h3>Assign Work</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
							<form name="" method="post" action="">
						<div class="form-group">

							<label>Select Staff</label>
							<select name="staff" class="form-control">
								<option>Select Staff</option>
								<?php include('con_db.php');
									$sq=mysql_query("select * from staff");
									while($row=mysql_fetch_array($sq)) {
								 ?>
								<option value="<?php echo $row['Staff_ID']; ?>"> <?php echo $row['Staff_Name']; ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group">

							<label> Service From </label>
							<input type="text" name="sdate" value="<?php echo date('d-m-y',strtotime($assign_date)); ?>" placeholder="Enter from date" class="form-control" readonly>
						
						</div>
						<div class="form-group">

							<label> Return Date </label>
							<input type="date" name="rdate" placeholder="Enter Return date" class="form-control" required>
						
						</div>
							
						<p>&nbsp;</p>
						<div class="form-group">
						
							<input type="submit" name="assign" value="Assign" class="btn btn-primary">
						</div>
										
					</form>
					<?php 
    	include('con_db.php');
    	if(isset($_POST['assign'])) 
    	{
    		$staff=$_POST['staff'];
    		$sdate=$_POST['sdate'];
    		$rdate=$_POST['rdate'];
    		$svalid=mysql_query("select * from assign_work where Staff_ID='$staff' and S_ReturnDate>='$rdate'");
    		$nrows=mysql_num_rows($svalid);
    		if($nrows>0)
    		{
    			echo '<script>alert("Already assigned, Select someother Staff"); window.location="assignwork.php?sid='.$sid.'"; </script>';
    		}
    		else 
    		{
	    		$sql=mysql_query("INSERT INTO `assign_work`(`Staff_ID`, `Sreqst_ID`, `Assign_Date`, `S_ReturnDate`, `Status`) VALUES ('$staff','$sid','$sdate','$rdate','assign')");
	    		if($sql)
	    		{
	    			echo '<script>alert("Assigned"); window.location="view_bookings.php"; </script>';
	    		}
	    		else
	    		{
	    			echo '<script>alert("Failed to assign"); </script>';
	    		}
    	     }
    	}

    ?>
    
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

