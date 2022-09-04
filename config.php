<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "test";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	
	// Check connection
	if ($conn -> connect_errno) {
		die("Connection failed: " . $conn->connect_error);
	}
?>