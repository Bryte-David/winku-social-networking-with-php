<?php 
include '../connection.php';

$userId = $_SESSION['uid'];

$status = true;

if (isset($_POST['dp'])) {
	$path = "../uploads/displaypics/";
	$file = $path . basename($_FILES['displaypic']['name']);
	$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
		
		if (empty($_FILES['displaypic']['name'])) {
			echo "";
		}else{

			//check if the file is an image
			$check = getimagesize($_FILES['displaypic']["tmp_name"]);
			if ($check === false) {
				echo "Select an Image";
				$status = false;
			}

			// Check file size
		if ($_FILES['displaypic']["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $status = false;
			}
			// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			    echo "Invalid File format";
			    $status = false;
			}
		$new_image_name = "dp".uniqid().'.png';

		//check is status is true for uploading 
		if ($status != false) {
			$upload = move_uploaded_file($_FILES['displaypic']['tmp_name'], $path.$new_image_name );
			if ($upload) {
				$query = mysqli_query($con, "UPDATE users SET profile_pic = '$new_image_name' WHERE id = '$userId'");
				if ($query) {
					// echo "Success";
				}else{
					echo "not updated";
				}
			}else{
				echo "not upload";
			}
		}
	}


}


if (isset($_POST['cp'])) {
	$path = "../uploads/coverpics/";
	$file = $path . basename($_FILES['coverpic']['name']);
	$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
		
		if (empty($_FILES['coverpic']['name'])) {
			echo "";
		}else{

			//check if the file is an image
			$check = getimagesize($_FILES['coverpic']["tmp_name"]);
			if ($check === false) {
				echo "Select an Image";
				$status = false;
			}

			// Check file size
		if ($_FILES['coverpic']["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $status = false;
			}
			// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			    echo "Invalid File format";
			    $status = false;
			}
		$new_image_name = "cp".uniqid().'.png';

		//check is status is true for uploading 
		if ($status != false) {
			$upload = move_uploaded_file($_FILES['coverpic']['tmp_name'], $path.$new_image_name );
			if ($upload) {
				$query = mysqli_query($con, "UPDATE users SET cover_pic = '$new_image_name' WHERE id = '$userId'");
				if ($query) {
					// echo "Success";
				}else{
					echo "not updated";
				}
			}else{
				echo "not upload";
			}
		}
	}


}




 ?>