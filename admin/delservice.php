<?php 
	include('con_db.php');
	$s_id=$_GET['sid'];
	$sql=mysql_query("delete from service where S_ID='$s_id'") or die(mysql_error());
	if($sql)
	{
		echo '<script>alert("Service has been deleted"); window.location="view_service.php";</script>';
	}
	else 
		{
		echo '<script>alert("Couldnt be deleted, try again"); window.location="view_service.php";</script>';
	}

?>