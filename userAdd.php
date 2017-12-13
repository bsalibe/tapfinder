<?php

require "config.php";

// Create connection
	$conn = mysqli_connect($server, $username, $password, $db);
// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$receiveEmail = $_POST["email"];
	$receivePassword = $_POST["password"];
	$receiveFirst = $_POST["user_first_name"];
	$receiveLast = $_POST["user_first_name"];




?>