<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "malcolm_photography";

	$con = mysqli_connect($server,$username,$password,$db_name);

	if (!$con) {
		die("Connection Failed !!!");
	}else {
		// echo "Successfully Connected !!!";
	}

 ?>