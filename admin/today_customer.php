
<!DOCTYPE HTML>
<html>
<head>
<title>todays customer</title>
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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Forms</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 		

  <div class="grid-form1">
  	       <h3>View Customers</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<th>Sl No.</th>
									<th>Customer name</th>
									<th>Image</th>
									<th>Address</th>
									<th>Contact</th>
									<th>E_Mail</th>
								</tr>
								<?php include('con_db.php');
								$i=1; $cdate=date('Y-m-d');
									$qry=mysql_query("select * from user where Reg_date='$cdate'") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['Full_Name']; ?></td>
								 	<td><img src="../photos/<?php echo $row['Image']; ?>" height="60px" width="60px"></td>
								 	<td><?php echo $row['Address']; ?></td>
								 	<td><?php echo $row['Contact_no']; ?></td>
								 	<td><?php echo $row['E_Mail']; ?></td>
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
