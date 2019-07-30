<?php 
	$servername = "db4free.net";
	$port = "3306";
	$username = "aptx4869";
	$password = "anan17081999";
	$dbname = "yolo1708";

	
	$conn = new mysqli($servername . ":". $port , $username, 
		$password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	echo "YOLO !!!";

 ?>