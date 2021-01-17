<?php 
include 'connection.php';
session_start();
$error = "";


	function checkInput($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	//Registering a User

		if (isset($_POST['signup'])) {
			if(empty($_POST['name']) || empty($_POST['uname']) || empty($_POST['email']) || empty($_POST['pword'])){
				echo "Provide the neccessary details";
			}else{
				$name = checkInput($_POST['name']);
				$username = checkInput($_POST['uname']);
				$password = checkInput($_POST['pword']);
				$email = checkInput($_POST['email']);
				$date = date('l d-m-y');

				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
					echo "Name - Only letters and white space allowed";

					// check if e-mail address is well-formed
				}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Invalid email format";

					// Check if the password contains more than 5 characters
				}elseif (strlen($password) < 5) {
					echo "Password should be more than 5 Characters";
				}else{
					$phone = '';
					$dob = '';
					$gender = '';
					$city= '';
					$country = '';
					$about_me = '';
					$cover_pic = 'default-cp.jpg';
					$profile_pic = 'profile.jpg'; 
					// storing data in the database
					$sql = "INSERT INTO users (name, password, email, username, phone, dob, gender, city, country, about_me, date_created, profile_pic, cover_pic) VALUES ('$name', '$password', '$email', '$username', '$phone', '$dob', '$gender', '$city', '$country', '$about_me', '$date', '$profile_pic', '$cover_pic' )";
					$insert = mysqli_query($con, $sql);
					if ($insert) {
						$sql_select = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
						$select = mysqli_query($con, $sql_select); 
						if (mysqli_num_rows($select) > 0) {
							$result = mysqli_fetch_assoc($select);
							$_SESSION['uid'] = $result['id'];
							mysqli_close();
							header("location: /winku/");
 						}else{
							echo "No User With Such Details, Please Check";
						}
					}else{
						echo "Error in Registration";
					}
				}
			}
		}


		//Login a User
		if (isset($_POST['signin'])) {
			extract($_POST);
			if(empty($_POST['email'])  && empty($_POST['password'])){
				echo "Provide the neccessary details";
			}else{
				$email = checkInput($_POST['email']);
				$password = checkInput($_POST['password']);

				$sql_select = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
				$select = mysqli_query($con, $sql_select);
				if (mysqli_num_rows($select) > 0) {
					$result = mysqli_fetch_assoc($select);
					$_SESSION['uid'] = $result['id'];
					mysqli_close();
					header("location: /winku/");
					}else{
						
					echo "No User With Such Details, Please Check";
				} 
			}
		}





// //REGISTERING A USER
// 	if (isset($_POST['register'])) {
// 		extract($_POST);

// 		//name validation
// 		if (empty($_POST['name'])) {
// 			$error = "Name field should not be empty";
// 		}else{
// 			// check if name only contains letters and whitespace
// 		    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
// 		      $error = "Name - Only letters and white space allowed";
// 		    }else{
// 		    	$name = checkInput($_POST['name']);	
// 		    }

			
			
// 		}
		
// 		//susername validation
// 		if (empty($_POST['uname'])) {
// 			$error = "Username field should not be empty";
// 		}else{
// 			$name = checkInput($_POST['name']);	
// 		}


// 		//email validation
// 	    if (empty($_POST['email'])) {
// 	    	$error = "Email field should not be empty";
// 	    }else{
	    	
// 	    	// check if e-mail address is well-formed
// 		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 		      $error = "Invalid email format";
// 		    }else{
// 		    	$email = checkInput($_POST['email']);
// 		    }
// 	    }


// 	    //password validation
// 	    if(empty($_POST['pword'])){
// 	    	$error = "Password field should not be empty";
// 	    }

// 	    $username = 
// 	    $date = date('l d-m-y h:ia');
	    	

// 	    $insert = mysqli_query($con, "INSERT INTO users (name, email, password) VALUES ('$name', '')");


// 	}
	