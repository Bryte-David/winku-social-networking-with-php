<?php 
include '../connection.php';
// session_start();

function checkInput($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}

$errors = array();
$success = '';

$userId = $_SESSION['uid'];


if (isset($_POST['update'])) {
	extract($_POST);
	$name = checkInput($_POST['name']);
	$username = checkInput($_POST['uname']);
	$email = checkInput($_POST['email']);
	$phone = checkInput($_POST['phone']);
	$dob = checkInput($_POST['dob']);
	$gender = checkInput($_POST['gender']);
	$city = checkInput($_POST['city']);
	$country = checkInput($_POST['country']);
	$about = checkInput($_POST['about']);

	//name validation
if (empty($name)) {
	$errors[] = '<p> Please enter Fullname </p>';

}elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		$errors[] = "Name - Only letters and white space allowed";

		// check if e-mail address is well-formed
	}

//uername validation
if (empty($username)) {
	$errors[] = '<p> Please enter username </p>';
}
// $check_username = "SELECT * FROM users where username = '$username' ";
// $run_username = mysqli_query($con, $check_username);
// $check = mysqli_num_rows($run_username);
// if ($check > 0) {
// 	$row = mysqli_fetch_assoc($run_username);
// 	if ($username = $row['username']) {
// 		$errors[] = "Username Already Exists";
// 	}
        
//  }

//email validation
 if(empty($email)){
 	$errors[] = '<p> Please enter Email Address  </p>';
 }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = "Invalid email format";
}
// $check_email = "SELECT * FROM users where email = '$email' ";
// $run_email = mysqli_query($con, $check_email);
// $check_e = mysqli_num_rows($run_username);
// if ($check_e > 0) {
// 	$res = mysqli_fetch_assoc($run_email);
// 	if ($email = $row['username']) {
// 		$errors[] = "Email Already Exists";
// 	}
        
// }

//gemder validation
if (empty($gender)) {
	$errors[] = '<p> Please enter gender </p>';
}

//dob validation
if (empty($dob)) {
	$errors[] = '<p> Please enter Date of Birth </p>';
}

//phone number validation
if (empty($phone)) {
	$errors[] = '<p> Please enter Phone Number </p>';
}

//city validation
if (empty($city)) {
	$errors[] = '<p> Please enter city </p>';
}

//country validation
if (empty($country)) {
	$errors[] = '<p> Please enter country </p>';
}

//about validation
if (empty($about)) {
	$errors[] = '<p> Please enter about </p>';
}

if (empty($errors)) {
	$update = "UPDATE users SET name = '$name', email = '$email', username = '$username', phone = '$phone', dob = '$dob',gender = '$gender', city = '$city', country = '$country',about_me = '$about' WHERE id = $userId ";
	$query = mysqli_query($con, $update);
	if ($query) {
		$success = "successful";
	}else{
		echo 'not successful';
	}



}else{
	print_r($errors);
}
	
}






