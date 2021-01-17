<?php  

include '../connection.php';
session_start();

$userId = $_SESSION['uid'];

if (isset($_GET['uid'])) {
	$id = $_GET['uid'];
	$date = date('l d-m-Y');
	$status = "sent";

	$query = "INSERT INTO friend_requests (req_sender, req_receiver, date, status) VALUES ('$userId', '$id', '$date', '$status') ";
	$insert = mysqli_query($con, $query);
	if ($insert) {
		echo "Request Sent";
	}
}