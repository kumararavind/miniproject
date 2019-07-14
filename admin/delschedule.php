<?php 
	include('con_db.php');
	$scid=$_GET['scid'];

	$sql=mysql_query("DELETE FROM schedule where sch_id='$scid'");
	if($sql)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_schedule.php"; </script>';
	} 
	else
		{
		echo '<script>alert("Failed, try again"); window.location="view_schedule.php"; </script>';
	} 
?>