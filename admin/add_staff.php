
<!DOCTYPE HTML>
<html>
<head>
<title>add staff</title>
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
<div class="grid-form">
 		
<div class="grid-form1">
  	       <h3>Add Staff</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Staff Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Sname" id="focusedinput" pattern="[a-zA-Z]{3,14}" placeholder="Enter Staff name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-8"><textarea name="address" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Contact no</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Cno" id="focusedinput"
										pattern="[0-9]{10}" placeholder="Enter Contact_no" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Work Type</label>
									<div class="col-sm-8">
										<select name="w_type" class="form-control1">
											<option value="">Select work type</option>
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
										<input type="text" class="form-control1" name="Email" id="focusedinput" placeholder="Enter email address" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="pwd" id="focusedinput" placeholder="Enter the password" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Conform Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="cpwd" id="focusedinput" placeholder="Enter the password again" required>
									</div>
								</div>

      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" name="save">Submit</button>
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    </form>
    <?php 
    	include('con_db.php');
    	if(isset($_POST['save'])) 
    	{
    		$sname=$_POST['Sname'];
    		$address=$_POST['address'];
    		$cno=$_POST['Cno'];
    		$w_type=$_POST['w_type'];
    		$pwd=$_POST['pwd'];
    		$cpwd=$_POST['cpwd'];
    		$email=$_POST['Email'];
    		if($pwd==$cpwd)
    		{
	    		$sql=mysql_query("INSERT INTO `staff`(`Staff_Name`, `Address`, `Contact_no`, `Worker_Type`, `E_Mail`, `Password`) VALUES ('$sname','$address','$cno','$w_type','$email','$pwd')") or die(mysql_error());
	    		if($sql)
	    		{
	    			echo '<script>alert("Staff  details has been added"); </script>';
	    		}
	    		else
	    		{
	    			echo '<script>alert("Failed to add"); </script>';
	    		}
        	}
        	else{
        		echo '<script>alert("Password Mismatch"); </script>';
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

