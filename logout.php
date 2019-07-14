<?php 
	session_start();
	session_destroy();
	header('location: index1.php?signed_out');

?>