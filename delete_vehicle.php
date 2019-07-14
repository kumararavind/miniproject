<?php 
	include('con_db.php');
	$vid=$_GET['vid'];
	$sql=mysql_query("delete from vehicle where V_ID='$vid'") or die(mysql_error());
	if($sql)
	{
		echo '<script>alert("Details has been deleted"); window.location="add_vehicle.php";</script>';
	}
	else 
		{
		echo '<script>alert("Couldnt be deleted, try again"); window.location="add_vehicle.php";</script>';
	}

?>