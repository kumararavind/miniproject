
<?php include('session.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>change pwd</title>
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
				<a href="dashboard.php">Home</a>
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
  	       <h3>Change Password</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="POST">
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Enter Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="opass" id="focusedinput" placeholder="Enter the Password" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">New Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="npass" id="focusedinput" placeholder="Enter the new password" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Confirm password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="cpass" id="focusedinput" placeholder="Enter the password again" required>
									</div>
								</div>
							
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" type="submit" name='change'>Change</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    </form>
    <?php include('con_db.php');
				if(isset($_POST['change']))
				{
					//echo 'hey';
					$opass=mysql_real_escape_string($_POST['opass']);
					$npass=mysql_real_escape_string($_POST['npass']);
					$cpass=mysql_real_escape_string($_POST['cpass']);
					$sql=mysql_query("select * from adminsignin where admin_uname='$u_name' and admin_pwd='$opass'") or die(mysql_error());
					$nums=mysql_num_rows($sql);
					if($nums==1)
					{
						if($npass==$cpass)
						{
							$qry=mysql_query("UPDATE adminsignin SET admin_pwd='$npass' where admin_uname='$u_name'");
							if($qry)
							{
								echo '<script>alert("Password is changed successfully"); window.location="dashboard.php"; </script>';
							}
							else{
								echo '<script>alert("Failed , Try again"); </script>';
								}
						}
						else{
							echo '<script>alert("Password Mismatch"); </script>';
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

