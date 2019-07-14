<?php 
	session_start();
	$u_name=$_SESSION['uname'];
	$uid=$_SESSION['uid'];
	if(!(isset($uid)))
	{
		header('location: index1.php');
	}

?>