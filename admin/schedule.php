
<!DOCTYPE HTML>
<html>
<head>
<title>schedule</title>
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
  	       <h3> schedule </h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Days</label>
									<div class="col-sm-8">
										<input type="checkbox" name="days[]" value="Monday">Monday
										<input type="checkbox" name="days[]" value="Tuesday">Tuesday
										<input type="checkbox" name="days[]" value="Wednesday">Wednesday
										<input type="checkbox" name="days[]" value="Thursday">Thursday
										<input type="checkbox" name="days[]" value="Friday">Friday
										<input type="checkbox" name="days[]" value="Saturday">Saturday
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">From Timings</label>
									<div class="col-sm-8">
										<input type="time" class="form-control1" name="ftime" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label" >To Timings</label>
									<div class="col-sm-8">
										<input type="time" class="form-control1" name="ttime" id="focusedinput">
									</div>
								</div>
								
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" name="save">Submit</button>
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
				<a href="view_schedule.php" class="btn-success btn">View Schedule</a>
			</div>
		</div>
	 </div>
    </form>
    <?php 
    	include('con_db.php');
    	if(isset($_POST['save'])) 
    	{
    		$days=implode(",", $_POST['days']);
    		$ftime=$_POST['ftime'];
    		$ttime=$_POST['ttime'];
    		$sql=mysql_query("INSERT INTO `schedule`( `days`, `from_timings`, `to_timings`, `updated_date`) VALUES ('$days','$ftime','$ttime',now())") or die(mysql_error());
    		if($sql)
    		{
    			echo '<script>alert("Schedule has been added"); </script>';
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

