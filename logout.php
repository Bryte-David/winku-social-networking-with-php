<?php  
	session_start();
	include 'config.php';

	$log_out = session_destroy();

	$route =  base_url."auth.php";

	if ($log_out) {
		header("location: $route");
	}



?>