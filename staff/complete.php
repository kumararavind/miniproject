<?php 
	include('con_db.php');
	$aid=$_GET['aid'];
	$sql=mysql_query("UPDATE assign_work SET Status='completed' where Work_ID='$aid'") or die(mysql_error());
	if($sql)
	{
		echo '<script>alert("Done"); window.location="viewappointment.php";</script>';
	}
	else 
		{
		echo '<script>alert("Failed, try again"); window.location="viewappointment.php";</script>';
	}

?>