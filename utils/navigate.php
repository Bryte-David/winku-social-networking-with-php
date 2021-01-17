<?php 
	include '../config.php';
	include '../timeline/timeline-photos.php'; 

$url = base_url;

	function photos(){
		$url = base_url;
		$photofile = file_get_contents('../timeline/timeline-photos.php');
		echo $photofile;
	}

if ($_GET['req'] == "photos") {
	return photos();
}


 ?>