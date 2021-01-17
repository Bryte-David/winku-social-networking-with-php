<?php 


	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'Winku';

			// create connection
		$con = mysqli_connect($servername, $username, $password, $dbname);

		if (!$con) {
			die("Database Connection Failed: " . mysqli_connect_error());
		}

	

	// // Create database
	// $sql = "CREATE DATABASE $dbname";
	// if (mysqli_query($con, $sql)) {
	//     echo "Database created successfully";
	// } else {
	//     echo "Error creating database: " . mysqli_error($con);
	// }




	

	



?>