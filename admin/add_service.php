
<!DOCTYPE HTML>
<html>
<head>
<title>admin</title>
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
 
 	
 	<!--grid-->
 	<div class="grid-form">
 		


<!---->



<!---->
  <div class="grid-form1">
  	       <h3>Add service</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="POST">
								
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1" required="" pattern="[a-zA-Z]"></textarea></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Service Cost</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Scost" id="focusedinput" placeholder="Enter Service cost" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Service Type</label>
									<div class="col-sm-8">
										<select name="Stype" class="form-control1" required="">
											<option value="">Select service type</option>
											<option value="brake and transmission ">Brake and Transmission 
											</option>
											<option value="body repair ">Body Repair 
											</option>
											<option value="vehicle refinishing">Vehicle Refinishing</option>
											<option value="vehicle inspections">Vehicle Inspections</option>
											<option value="other"> Other </option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Service Duration</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Sduration" id="focusedinput" placeholder="Enter Service Duration" required="">
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
    		$scost=$_POST['Scost'];
    		$duration=$_POST['Sduration'];
    		$desc=$_POST['desc'];
    		$stype=$_POST['Stype'];
    		$sql=mysql_query("INSERT INTO `service`(`Desciption`, `S_Cost`, `S_Type`, `S_Duration`) VALUES ('$desc','$scost','$stype','$duration')") or die(mysql_error());
    		if($sql)
    		{
    			echo '<script>alert("Service been added"); </script>';
    		}
    		else
    		{
    			echo '<script>alert("Failed to add"); </script>';
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

