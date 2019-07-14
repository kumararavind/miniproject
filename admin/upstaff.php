
<?php include('session.php');
	include('con_db.php');
	$st_id=$_GET['st_id'];
	$sql=mysql_query("select * from staff where Staff_ID='$st_id'") or die(mysql_error());
	$fetch=mysql_fetch_array($sql);

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>update staff</title>
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
 	<div class="grid-form">
 		


<!---->



<!---->
  <div class="grid-form1">
  	       <h3>Add service</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="post">
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Staff Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $fetch['Staff_Name']; ?>" name="Sname" id="focusedinput" placeholder="Enter Staff name">
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-8"><textarea name="address" id="txtarea1" cols="50" rows="4" class="form-control1"><?php echo $fetch['Address']; ?></textarea></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Contact no</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $fetch['Contact_no']; ?>"  name="Cno" id="focusedinput" placeholder="Enter Contact_no">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Work Type</label>
									<div class="col-sm-8">
										<select name="w_type" class="form-control1">
											<option value="<?php echo $fetch['Worker_Type']; ?>" style="background-color:lightblue;"><?php echo $fetch['Worker_Type']; ?></option>
											<option value="brake and transmission technician">Brake and Transmission Technician</option>
											<option value="body repair technicians">Body Repair Technicians
											</option>
											<option value="vehicle refinishers">Vehicle Refinishers</option>
											<option value="vehicle inspectors">Vehicle Inspectors</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email Address</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo $fetch['E_Mail']; ?>" name="Email" id="focusedinput" placeholder="Enter email address">
									</div>
								</div>
								
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" name="update">Update</button>
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    </form>
   <?php 
    	include('con_db.php');
    	if(isset($_POST['update'])) 
    	{
    		$sname=$_POST['Sname'];
    		$address=$_POST['address'];
    		$cno=$_POST['Cno'];
    		$w_type=$_POST['w_type'];
    		$email=$_POST['Email'];
    		
	    		$sql=mysql_query("UPDATE `staff` SET `Staff_Name`='$sname',`Address`='$address',`Contact_no`='$cno',`Worker_Type`='$w_type',`E_Mail`='$email' WHERE Staff_ID='$st_id'") or die(mysql_error());
	    		if($sql)
	    		{
	    			echo '<script>alert("Staff  details has been updated"); window.location="view_staff.php";</script>';
	    		}
	    		else
	    		{
	    			echo '<script>alert("Failed to update"); </script>';
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

