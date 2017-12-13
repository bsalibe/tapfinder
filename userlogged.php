<!DOCTYPE html>

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

<!-- AUTOMATIC PAGE SCROLL WITH CLICK -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">

			<?php
			require "config.php";

			echo "<h2>Hello! Stay Hydrated</h2>";

// Create connection
			$conn = mysqli_connect($server, $username, $password, $db);
// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$receiveEmail = $_POST["email"];
			$receivePassword = $_POST["password"];

    		$userId;
			function query_to_db($conn, $sql){
				$result = mysqli_query($conn, $sql);

				if (($result) AND mysqli_num_rows($result) > 0){
					//echo "You are logged in";
					$answer = mysqli_fetch_assoc($result);
					$GLOBALS ['userId'] = $answer['user_id'];
				} else{
					//echo "EITHER";
					//echo "Error: " .$sql. "<br>" . mysqli_error($conn);
					echo "<h3 style='text-align: center; color: red; padding: 10px;'>
					Oops! Your Email, Password, or both were typed incorrectly</h3>";
					echo "<form action =\"tapfinder.php\">
					<button type=\"submit\" style='margin-left:43%; margin-top: 10%;
					padding: 10px; border-radius: 10px; background-color: green;'> 
					CLICK TO GO BACK</button></form>";
					die;

				}
			}

			$sql = "select user_id from user where email = '".$receiveEmail."'
			AND password='" .$receivePassword."'";
			echo 
			query_to_db($conn, $sql);?>

	<!-- Main Navigation, import style sheet-->
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
		<a class="navbar-brand" href="tapfinder.php">
			<img  id ="logout" alt="LogOut" style="background-color: red; padding: 5px">
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#home">HOME</a>
			</li> 
			<li class="nav-item">
				<a class="nav-link" href="#account">ACCOUNT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about">ABOUT</a>
			</li>


		</nav>


		<!-- HOME PAGE-->
		<div id="home" class="sections">


			<h1> HOME </h1>

			<input type="text" id="building_name" placeholder="Enter building name"/>
			<br><b>Ex: </b><i>Mckeldin, Stamp</i><br/>

			<!-- Search Suggestions is displayed here -->
			<div id="Suggestions"></div>


		</div>

		<!-- USER ACCOUNT PAGE -->

		<div id="account" class="sections">

			<h1>ACCOUNT</h1>

			<form>
			<button type="submit" class="btn btn-success">Add Building</button>
			</form>


			<?php

//echo "Data Retrieved<br><br>";
			echo "<h4>SAVED BUILDINGS</h4>";?>

			<div class="row">
				<div  id="tableHead" class="col-sm-1">Building ID</div>
				<div  id="tableHead" class="col-sm-3">Building Name</div>
				<div  id="tableHead" class="col-sm-3">Room Description</div>
				<div  id="tableHead" class="col-sm-1">Room Number</div>
				<div  id="tableHead" class="col-sm-2">Delete Building</div>
			</div>



			<?php

//SQL CODES
			$sql = "Select room.building_id, building_name, room_description, room_number FROM
			room JOIN buildings JOIN user
			ON (room.building_id = buildings.building_id) AND 
			((room.building_id = user.saved_one) OR
			(room.building_id = user.saved_two) OR
			(room.building_id = user.saved_three) OR
			(room.building_id = user.saved_four) OR
			(room.building_id = user.saved_five)
			)
			WHERE user.user_id='".$userId."';";
			$result = mysqli_query($conn, $sql);
			$row  = mysqli_fetch_assoc($result);

			echo "<div id =\"savedBuildings\">";
			if (mysqli_num_rows($result) > 0) {   
				while($row = mysqli_fetch_assoc($result)) {
					//echo "<div id = \"buildingList\">";  don't forget to add the closing div for this
					echo 
					"<div class=\"row\">
					<div id = \"buildingList\" class=\"col-sm-1\">". $row['building_id'] ."</div> 
					<div id = \"buildingList\" class=\"col-sm-3\">". $row['building_name'] ."</div>
					<div id = \"buildingList\" class=\"col-sm-3\">". $row['room_description'] ."</div>
					<div id = \"buildingList\" class=\"col-sm-1\">". $row['room_number'] ."</div>
					<div class=\"col-sm-2\">
						<form>
						<button type=\"submit\" class=\"btn btn-danger\">Delete Building</button>
						</form>
					<div class=\"col-sm-2\"></div>
					</div>";

				echo "</div><br>";
			}
		} else {
			echo "No results..";
		}
		echo "</div>";
/*foreach ($row as &$value) {
	echo $value. "<br>";
}*/
?>


<div id="userArea">

	<!-- SQL CONNECTION -->


	<div id=userDash> 

	</div>

</div>
</div>



<!-- ABOUT PAGE -->

<div id ="about" class="sections">
	<h1> ABOUT </h1>
	<h3> <img src="logo.svg" alt="Logo" style="width:40px"> What is Tapfinder</h3> </br>
	<p> 
		TapFinder is dynamic web application that helps locate water filling stations.</br>
		TapFinder is focused for University of Maryland, College Park (UMCP)</br>
		We built this system to help users find filtered water stations around UMD, CP</br>
	</p>
	<h4>Ideal Scenario</h4>
	<ul>
		<li>Thirsty student is walking to class with an empty bottle</li>
		<li>Student opens the website and types name of building thats on the way to his/her class.</li>
		<li>Student finds the location of water filling station, and pops in the building for quick refill</li>
		<li>Student is hydrated and is on the way to class</li>

	</ul>
	<h4>Overarching goals</h4>
	<p>Our overarching goal is to help solve the issue of dehydration. Often times student may be so invested in their work, schedule, exams etc. that they do not hydrate properly. This can affect students physical health and academic performance. By building a system to find location of a water source, we are striving to ultimately help improve the health of students and faculty on campus.</p>

	<h4>Team</h4>
	<ul>
		<li>Aseem Dhakal, BSIS</li>
		<li>Bukar Sun Aibe, BSIS</li>
		<li>Kyle Chin, BSIS</li>
		<li>Oni Oluwayesi, BSIS</li>
	</ul>

	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
	onmouseover="" style="cursor: pointer;">
	Show Contact Information
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Contact Email</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				contact_tapfinder@gmail.com
			</div>
			<div class="modal-body">
				Please state your purpose in the subject line when you email
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

</div>
</div>

<?php mysqli_close($conn)?>

<!-- about page content goes in here, import style sheet-->

</body>
