<?php 
include '../connection.php';
session_start();

$userId = $_SESSION['uid'];

if (isset($_GET['uid'])) {
	$id = $_GET['uid'];

	$query = "DELETE FROM friend_requests WHERE req_sender = '$userId' AND req_receiver = '$id' ";
	$sql = mysqli_query($con, $query);
	if ($sql) {
		echo "Cancelled";
	}
}


?>