<!DOCTYPE HTML>
<html>
<head>
<title>add salary</title>
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
 	<div class="grid-form">
 		
  <div class="grid-form1">
  	       <h3>Add salary</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Select staff</label>
									<div class="col-sm-8">
										
										<select name="staff" class="form-control1">
											<option value="">Select Staff</option>
											<?php  include('con_db.php');
												$sql=mysql_query("select * from staff") or die(mysql_error());
												while($row=mysql_fetch_array($sql)) {
											 ?>
											 <option value="<?php echo $row['Staff_ID']; ?>"><?php echo $row['Staff_Name']; ?></option>
											 <?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Salary Amount</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Samt" id="focusedinput" placeholder="Enter Salary Amount">
									</div>
								</div>
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" name="Add">Add</button>
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    </form>
    <?php 
    	include('con_db.php');
    	if(isset($_POST['Add'])) 
    	{
    		$staff=$_POST['staff'];
    		$samt=$_POST['Samt'];
    		$sql=mysql_query("INSERT INTO `staff_salary`(`Staff_ID`, `Salary`) VALUES ('$staff','$samt')");
    		if($sql)
    		{
    			echo '<script>alert("Salary has been added"); </script>';
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

