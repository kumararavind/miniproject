<?php 
	include('con_db.php');
	$sid=$_GET['sid'];
	$sql=mysql_query("UPDATE service_request SET Status='rejected' where Service_rqst_id='$sid'") or die(mysql_error());
	if($sql)
	{
		echo '<script>alert("Cancelled"); window.location="view_bookings.php";</script>';
	}
	else 
		{
		echo '<script>alert("Couldnt cancel, try again"); window.location="view_bookings.php";</script>';
	}

?>