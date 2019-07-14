
<!DOCTYPE HTML>
<html>
<head>
<title>index</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body style="background-image: url('images/backgroundproceso.jpg'); ">

	<div class="login">
		<h1><a href="index.php">AutoScope </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form action='' method="post"> 
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Username" name="uname" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="pwd" required="">
					<i class="fa fa-lock"></i>
				</div>
				  

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="admin" value="Login">
					</label>
			</div>
			<div class="clearfix"> </div>
			</form>
			<?php include('con_db.php');
				if(isset($_POST['admin']))
				{
					$uname=mysql_real_escape_string($_POST['uname']);
					$pwd=mysql_real_escape_string($_POST['pwd']);
					$sql=mysql_query("select * from adminsignin where admin_uname='$uname' and admin_pwd='$pwd'") or die(mysql_error());
					$nums=mysql_num_rows($sql);
					$rows=mysql_fetch_array($sql);
					if($nums==1)
					{
						session_start();
						$_SESSION['uname']=$rows['admin_uname'];
						echo '<script>alert("Welcome Admin"); window.location="dashboard.php"; </script>';
					}
					else{
						echo '<script>alert("Your access is denied"); </script>';
					}
				}

			 ?>
		</div>
	</div>
		<!---->
<div class="copy-right"><p> &copy; 2017 AutoScope. All Rights Reserved | Design by: aravind </p></div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

