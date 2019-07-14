
<!DOCTYPE HTML>
<html>
<head>
<title>staff</title>
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
  	       <h3>View Staff</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<th>Sl No.</th>
									<th>Staff name</th>
									<th>Address</th>
									<th>Contact</th>
									<th>Work Type</th>
									<th>E Mail</th>
									<th>Salary</th>
									<th>Action</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("select * from staff,staff_salary where staff.Staff_ID=staff_salary.Staff_ID") or die(mysql_error());
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['Staff_Name']; ?></td>
								 	<td><?php echo $row['Address']; ?></td>
								 	<td><?php echo $row['Contact_no']; ?></td>
								 	<td><?php echo $row['Worker_Type']; ?></td>
								 	<td><?php echo $row['E_Mail']; ?></td>
								 	<td><?php echo $row['Salary']; ?></td>
								 	<td><a href="upstaff.php?st_id=<?php echo $row['Staff_ID']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> <a href="deletestaff.php?st_id=<?php echo $row['Staff_ID']; ?>" onclick="return DeleteSure();" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
								 </tr>
								 <?php } ?>
							</table>
    
  </div>
 	</div>
 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2018 Autoscope. All Rights Reserved | Design by: aravind<p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
<!---->
<script type="text/javascript">
	function DeleteSure()
		{
			return confirm("Are you sure to delete this?");
		}
</script>

</body>
</html>