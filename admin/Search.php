<!DOCTYPE HTML>
<html>
<head>
<title>search</title>
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
  	       <h3>Searched</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<?php include 'con_db.php';
							if(isset($_POST['search']))
							{
								
							?>
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<th>Sl No.</th>
									<th>Customer name</th>
									<th>Vehicle no</th>
									<th>Brand</th>
									<th>V Type</th>
									<th>Model</th>
									<th>Model no</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
								if(preg_match("/[A-Z  | a-z | 0-9 | - ]+/", $_POST['sname']))
								{ 
								$sname=$_POST['sname']; 
									$qry=mysql_query("SELECT * from vehicle where vehicle.`Brand` LIKE '%".mysql_real_escape_string($sname)."%' or vehicle.`V_Type` LIKE '%".mysql_real_escape_string($sname)."%' group by V_ID") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<?php $uid= $row['User_ID']; 
								 		$sr=mysql_query("SELECT * FROM user where User_ID='$uid'");
								 		$res=mysql_fetch_array($sr);
								 	 ?>
								 	<td><?php echo $res['Full_Name']; ?></td>
								 	<td><?php echo $row['V_No']; ?></td>
								 	<td><?php echo $row['Brand']; ?></td>
								 	<td><?php echo $row['V_Type']; ?></td>
								 	<td><?php echo $row['Model']; ?></td>
								 	<td><?php echo $row['model_no']; ?></td>
								 	
								 </tr>
								 <?php } ?>
							</table>
							<?php } } ?>
    
  </div>
 	</div>
 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2018 Autoscope. All Rights Reserved | Design by:aravind</p>	    </div>
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