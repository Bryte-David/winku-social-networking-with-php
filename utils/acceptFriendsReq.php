<?php  

include '../connection.php';
session_start();

$userId = $_SESSION['uid'];

if (isset($_GET['uid'])) {
	$id = $_GET['uid'];
	$date = date('l d-m-Y');

	$que = "INSERT INTO friends_list (user_id, friends_id) VALUES ('$userId', '$id') ";
	$insert = mysqli_query($con, $que);
	if ($insert) {
		deleteFromFriendsReqTable($id, $userId, $con);
		echo "Accepted";
	}
}



function deleteFromFriendsReqTable($id, $userId, $con){
	$query = "DELETE FROM friend_requests WHERE req_sender = '$id' AND req_receiver = '$userId' ";
	$sql = mysqli_query($con, $query);
}