<?php 


$userId = $_SESSION['uid'];
$posted = "";

$status = true;

if (isset($_POST['publish'])) {

	$content = checkInput($_POST['content']);
	$date = date('D-M-Y h:ia');
	$video = "";

	if (empty($_FILES['img']['name'])) {
		$img_name = "";
		$insert = "INSERT INTO posts (userId, content, image, video, date_posted) VALUES ('$userId', '$content', '$img_name', '$video', '$date' )";
		$sql = mysqli_query($con, $insert);
		if ($sql) {
			$posted = "<div class='alert alert-success'>Content Successfully Published </div>";;
		}else{
			echo "not posted";
		}
	}else{
		$path = "../uploads/posts/";
		$file = $path . basename($_FILES['img']['name']);
		$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
		$new_img_name = "posts".uniqid().'.png';

		//check if the file is an image
		$check = getimagesize($_FILES['img']["tmp_name"]);

		// Check file size
		if ($_FILES['img']["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $status = false;
			}
			// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			    echo "Invalid File format";
			    $status = false;
			}

		//check is status is true for uploading 
		if ($status != false) {
			$upload = move_uploaded_file($_FILES['img']['tmp_name'], $path.$new_img_name );
			if ($upload) {
				$insert = "INSERT INTO posts (userId, content, image, video, date_posted) VALUES ('$userId', '$content', '$new_img_name', '$video', '$date' )";
				$sql = mysqli_query($con, $insert);
				if ($sql) {
					$posted = "<div class='alert alert-success'>Post Successfully Published </div>";
				}else{
					$posted = "<div class='alert alert-danger'>Something went Error</div>";
				}
			}
		}
	}
}

