<?php 
session_start();
include '../connection.php';




function getDp(){
	include '../connection.php';
	$userId = $_SESSION['uid'];

	$select = "SELECT profile_pic FROM users WHERE id = '$userId' ";
	$query = mysqli_query($con, $select);
	$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$json = json_encode(array('data'=>$result));
	echo $json;
}


function getCp(){
	include '../connection.php';
	$userId = $_SESSION['uid'];

	$select = "SELECT cover_pic FROM users WHERE id = '$userId' ";
	$query = mysqli_query($con, $select);
	$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$json = json_encode(array('data'=>$result));
	echo $json;
}


if ($_GET['pic'] == "dp") {
	return getDp();
}elseif ($_GET['pic'] == "cp") {
	return getCp();
}

?>