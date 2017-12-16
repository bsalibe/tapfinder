<!DOCTYPE html>

<html>

<head>
	<title>Tap Finder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="tapfinder.css">  
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
	<script type="text/javascript" src="liveSearch.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


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
	$receiveDelete =$_POST["deleteId"];
	$receiveBuildingName = $_POST["building_name"];
	$buildingId;

	$userId;
	$deleteId;


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
	//echo 
	query_to_db($conn, $sql);



//SQL CODES
$sqlFindId = "Select buildings.building_id from buildings where building_name = '".$receiveBuildingName."'";
$getId = mysqli_query($conn, $sqlFindId);
//echo '<script type="text/javascript">alert("'.$buildingId.'");</script>';

//////////

//$sqlCheckDuplicate; //= "Select user_id, user_save.building_id from user_save where (user_id='".$userId."' AND user_save.building_id = '".$buildingId."')";

//$numRows; //= mysqli_query($conn, $sqlCheckDuplicate);
//$duplicateCheck = mysqli_num_rows($numRows);
if (mysqli_num_rows($getId) == 1)
{
	
	$row = mysqli_fetch_assoc($getId);
	$GLOBALS['buildingId'] = $row['building_id'];
	//DEBUGGING
	;

	$sqlCheckDuplicate = "Select user_id, user_save.building_id from user_save where 
	(user_id='".$userId."' AND user_save.building_id = '".$buildingId."')";
//echo '<script type="text/javascript">alert("goodSoFar");</script>';
	if ($saveNum = mysqli_query($conn, $sqlCheckDuplicate))
	{
//		echo '<script type="text/javascript">alert("good so far");</script>';
		$rowCount = mysqli_num_rows($saveNum);
		if ($rowCount == 0)
		{
//			echo '<script type="text/javascript">alert("0");</script>';
			$sqlAdd = "Insert into user_save(user_id, user_save.building_id)
			Values ('".$userId."','".$buildingId."')";
			mysqli_query($conn, $sqlAdd);
		} else
		{
//			echo '<script type="text/javascript">alert("MORE THAN 0");</script>';
		}
	}

} else{
//	echo '<script type="text/javascript">alert("no building exists");</script>';
}


?>








	<!--                              NAVIGATION BAR                          -->






	<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
		<a class="navbar-brand" href="tapfinder.php">
			<img  src ="logout.svg" alt="LogOut" style="background-color: red; padding: 5px">
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="tapfinder.php">HOME</a>
			</li> 
			
			<li class="nav-item">
				<a class="nav-link" href="#about">ABOUT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#account">ACCOUNT</a>
			</li>

		</nav>





		<!--                               HOME PAGE                            -->







		<section id="introduction" class="sections">

			<h1 class= "text-white main-head">Tap Finder <span style="color: red">UMD</span></h1>

			<div class="input-group align-search" id= "response_form">      
               <input type="text" id="search" class="form-control" name="building_name" placeholder="Enter building name..." aria-label="Search for..." autofocus="autofocus">
               <!-- <input type="submit" id="submit_btn" name="submit"> -->
               <span class="input-group-btn">
                  <button id= "submit_btn" class="btn btn-success" type="button">Go!</button>
               </span>      
	         </div>
	         <div id="display" class="text-white"></div>
	         <div class="row fill-viewport"></div>

		</section>











		<!--                             USER ACCOUNT PAGE                           -->





		<!-- User can add building in their account -->


		<script>
			function hideAdd() {
				var x = document.getElementById("myModal");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
			}
			function changeText(){
				var elem = document.getElementById("addButton");
				if (elem.value=="Add Building") elem.value = "Cancel";
				else elem.value = "Add Building";
			}
		</script>

		<div id="account" class="sections">

			<h1>ACCOUNT</h1>

			<input type="button" onclick="hideAdd(), changeText()" type="button" class="btn btn-primary" id="addButton" value="Add Building"></button>

			<!-- form -->
			<div id="myModal" style = "display: none;">
				
							<h3 class="modal-title">Add Building</h3><br>
							<button onclick = "hideAdd(), changeText()" type="button" class="close" value ="CANCEL"></button>
							<br>
						<!-- USER INSERT BUILDING NAME -->
							




								<form  method ="POST" action = "userlogged.php">
								<input type="hidden" name="email" value="<?php echo htmlspecialchars($receiveEmail); ?>">
								<input type="hidden" name="password" value="<?php echo htmlspecialchars($receivePassword); ?>">
								<p><label></label>Building Name: <input type='text' id='searchOn' class="form-control typeahead" name ="building_name"></p>

								<button type=\"button\" class=\"btn btn-secondary\" >ADD</button>
								</form>



							<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
							<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>  
							<script type="text/javascript"> 
								$(function() {
									var buildingList = ['Worchester', 'Wicomico Hall', 'Van Munching Building', 'Tydings Hall', 'The Armor', 'Tawes Hall', 'Symons Hall', 'Susquehanna Hall', 'Stamp Student Union', 'St. Mary\'s Hall', 'South Campus Dining Hall', 'South Campus Commons 7', 'South Campus Commons 6', 'South Campus Commons 5', 'South Campus Commons 4', 'South Campus Commons 3', 'South Campus Commons 2', 'South Campus Commons 1', 'Somerset Hall', 'Skinner Building', 'Shoemaker Building', 'Service Building', 'School of Public Health', 'Ritchie Coliseum', 'Reckord Armory Building', 'Queen Anne\'s Hall', 'Plant Science Building', 'Physics Building', 'Physical Sciences Complex', 'Oakland Hall', 'Mitchell Building', 'Microbiology Building', 'McKeldin Library', 'Mathematics Building', 'Martin Hall (Engineering)', 'Marie Mount Hall', 'Main Administration Building', 'Leonardtown Office Building', 'Leonardtown Community Center', 'LeFrak Hall', 'Lee Building', 'LaPlata Hall', 'Knight Hall', 'Kim Engineering', 'Key Hall', 'Jimenez Hall', 'J.M. Patterson', 'Hornbake Library', 'Health Center', 'Harford Hall', 'Hagertown Hall', 'H.J. Patterson', 'Geology Building', 'Eppley Recreation Center', 'Engineering Laboratory Building', 'Engineering and Physical Sciences Library', 'Ellicott Hall', 'Elkton Hall', 'Easton Hall', 'Dorchester Hall', 'Denton Hall', 'Cumberland Hall', 'Computer Science Instructional Center', 'Computer and Space Sciences Building', 'Cole Student Activities Building', 'Clarice Smith Performing Arts Center', 'Chmical/Nuclear Engineering Building', 'Chincoteague Hall', 'Chestertown Hall', 'Chesapeake Building', 'Chemistry-Biochemistry', 'Cecil Hall', 'Carroll Hall', 'Cambridge Hall', 'Cambridge Community Center', 'Calvert Hall', 'Biomolecular Sciences', 'Biology/Psychology', 'Benjamin Building', 'Bell Air Hall', 'AV Williams', 'Art Sociology Building', 'Architecture Building', 'Anne Arundel Hall', 'Annapolis Hall', 'Animal Science Building', '251 North Dining Hall'];
    //autocomplete
    $("#searchOn").autocomplete({
    	errorElement:'div',
    	source: buildingList,
    	minLength: 1
    });                

});
</script>					

</div>

<?php

//echo "Data Retrieved<br><br>";
echo "<h4>SAVED BUILDINGS</h4>";?>

<div class="row">
	<div  id="tableHead" class="col-sm-3">Building Name</div>
	<div  id="tableHead" class="col-sm-3">Room Description</div>
	<div  id="tableHead" class="col-sm-2">Room Number</div>
	<div  id="tableHead" class="col-sm-3">Delete Building</div>
</div>

<!-- User can delete the building -->

<?php

//SQL CODES
$sqlDelete = "Delete from user_save where (user_id = '".$userId."' AND building_id = '".$receiveDelete."');";
if (!isset($receiveDelete)){

} else {
	$delete = mysqli_query($conn, $sqlDelete);
	if ($delete) {
		echo '<script type="text/javascript">alert("Building was deleted!");</script>';
	} else {
	}
}




$sql = "Select room.building_id, buildings.building_name, room.room_description, room.room_number FROM
room JOIN buildings JOIN user_save
ON (room.building_id = buildings.building_id) AND (user_save.building_id = buildings.building_id)
WHERE user_id='".$userId."';";
$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($result);

echo "<div id =\"savedBuildings\">";
if (mysqli_num_rows($result)) {   
	while($row = mysqli_fetch_assoc($result)) {
					//echo "<div id = \"buildingList\">";  don't forget to add the closing div for this
		echo 
		"<div class=\"row\">
		<div id = \"buildingList\" class=\"col-sm-3\">". $row['building_name'] ."</div>
		<div id = \"buildingList\" class=\"col-sm-3\">". $row['room_description'] ."</div>
		<div id = \"buildingList\" class=\"col-sm-2\">". $row['room_number'] ."</div>
		<div class=\"col-sm-2\"> 
			<form method=\"POST\" action=\"userlogged.php\">

				<input type=\"hidden\" name=\"email\" value=\"".$receiveEmail."\">
				<input type=\"hidden\" name=\"password\" value=\"".$receivePassword."\">
				<input type=\"hidden\" name=\"deleteId\" value=\"".$row['building_id']."\">
				<button id=\"delete\" class=\"btn btn-danger\">
					Delete Building</button>
				</form>
			</div>

			<div class=\"col-sm-2\">
			</div>";

			echo "</div><br>";
		}
	} else {
		echo "No results..";
	}
	echo "</div>";

	?>



</div>

</div>
</div>









<!--                                          ABOUT PAGE                                     -->










<div id ="about" class="sections">
	<h1> ABOUT </h1>
	<h3> <img src="logo.svg" alt="Logo" style="width:40px"> What is Tapfinder</h3> </br>
	<p> 
		TapFinder is dynamic web application that helps locate water filling stations.</br>
		TapFinder is focused for University of Maryland, College Park (UMCP)</br>
		We built this system to help users find filtered water stations around UMD, CP</br>
	</p>
	<h3>Ideal Scenario</h3>
	<ul>
		<li>Thirsty student is walking to class with an empty bottle</li>
		<li>Student opens the website and types name of building thats on the way to his/her class.</li>
		<li>Student finds the location of water filling station, and pops in the building for quick refill</li>
		<li>Student is hydrated and is on the way to class</li>

	</ul>
	<h3>Overarching goals</h3>
	<p>Our overarching goal is to help solve the issue of dehydration. Often times student may be so invested in their work, schedule, exams etc. that they do not hydrate properly. This can affect students physical health and academic performance. By building a system to find location of a water source, we are striving to ultimately help improve the health of students and faculty on campus.</p>

	<h3>Team</h3>
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
