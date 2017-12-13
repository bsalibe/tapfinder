<html>
<head>
	<title>Tap Finder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- for making ajax request-->
	<script type="text/javascript" src="js/liveSearch.js"></script>
	<!-- JQuery smooth scroll for SPA-->
	<script type="text/javascript" src="smoothScroll.js"></script>
	<!-- for CSS file. -->
	<link rel="stylesheet" type="text/css" href="tapfinder.css"> 
</head>
<body>
	<?php
			require "config.php";

			echo "<h2>Registration Status</h2>";

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

//SIGN UP FORM VALIDATION
   			if (!filter_var($receiveEmail, FILTER_VALIDATE_EMAIL)) {
   				echo "<h4>ERROR! NOT A VALID EMAIL</h4>"; die;
			}
			if ((!preg_match("/^[a-zA-Z ]*$/",$receiveFirst)) OR (!preg_match("/^[a-zA-Z ]*$/",$receiveLast))) {
 				echo "<h4>ERROR! FIRST NAME OR LAST NAME CONTAINS NUMBERS</h4>" ; die;
			}
			if((!isset($receiveFirst) || trim($receiveFirst) == '') ||
				(!isset($receiveLast) || trim($receiveLast) == '') ||
				(!isset($receivePassword) || trim($receivePassword) == '')){
				echo "<h4>ERROR! SOME VALUES ARE MISSING</h4>"; die;
			}
			
//BASIC QUERY FUNCTION   		
			function query_to_db($conn, $sql){
				$result = mysqli_query($conn, $sql);

				if (($result) AND mysqli_num_rows($result) > 0){
					echo "<h4>Email has already been used to register</h4>"; die;
				} else{
					echo "NOT SUCCESSFUL";
				}
			}
			$sqlEmail = "select account_id from accounts where email = '".$receiveEmail."';";
			query_to_db($conn, $sqlEmail);
			?>
</body>