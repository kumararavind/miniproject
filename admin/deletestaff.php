<?php 
	include('con_db.php');
	$st_id=$_GET['st_id'];
	$sql=mysql_query("delete from staff where Staff_ID='$st_id'") or die(mysql_error());
	if($sql)
	{
		echo '<script>alert("Staff detail has been deleted"); window.location="view_staff.php";</script>';
	}
	else 
		{
		echo '<script>alert("Couldnt be deleted, try again"); window.location="view_staff.php";</script>';
	}

?>