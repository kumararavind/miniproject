<?php 
	session_start();
	$sname=$_SESSION['sname'];
	$sid=$_SESSION['sid'];
	if(!(isset($sid)))
	{
		header('location: ../index1.php');
	}

?>