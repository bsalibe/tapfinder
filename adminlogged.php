<html>
<head>
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

	<!-- TRYING SUBMIT -->
	<script>
		$("#submitBuilding").click(function(){
			buildingName = $('input[name="buildingName"]').val();
			altName = $('input[name="altName"]').val();

			$.post("insert.php",
			{
				buildingName: buildingName,
				altName: altName
			}
				);
		});
	</script>
</head>

<body style="background-color: #ccebff; padding-top: 200px; padding-bottom: 70px">
<?php 
// The code that you recieve input data from the form goes to here.
$server = "localhost";
$username = "root";
$password = "root";
$db = "sakila"; //TYPE DATABASE NAME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//Create Connection
$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
echo'	<div class= "container">
		<div style="background: #b3e0ff !important" class ="jumbotron fixed-top">
			<ul class="nav nav-tabs nav-justified 
			border border-top-0 border-right-0 border-left-0 border-white"
			style="font-size: 20px">
			<li class="nav-item">
				<a class="nav-link" href="adminlogged.php">Admin</a>
			</li>
		</ul>
	</nav>
</div>

<!-- ************** INSERT BUILDING NAME************** -->

<div class="container">
	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalOne" 
	onmouseover="" style="cursor: pointer;">
	Add New Building
	</button>

	<!-- The Modal -->
	<div class="modal fade" id="modalOne">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">New Building Name:</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- ********************************** FORM -->
				<div class="modal-body">
					<form>
						<div class="form-group">
							Building Name: <input type="text" class="form-control" name="buildingName">
						</div>
						<div class="form-group">
							Alternate Name:
							<input type="text" class="form-control" name="altName">
						</div>
						<button id="submitBuilding" type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>


				<div class="modal-body">
					Please double-check your spelling
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
</div>
</br>

<!-- **************** INSERT WATER LOCATION WITH BUILDING ID ************ -->

<div class="container">
	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTwo" 
	onmouseover="" style="cursor: pointer;">
	Add New Location
	</button>

	<!-- The Modal -->
	<div class="modal fade" id="modalTwo">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Add Location</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- ********************************** FORM -->
				<div class="modal-body">
					<form>
						<div class="form-group">
						Building Id:
							<input type="text" class="form-control" name="buildingId">
						</div>
						<div class="form-group">
							<label for="location">Location:</label>
							<input type="text" class="form-control" name="location">
						</div>
						<button id="submitLocation"type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>


				<div class="modal-body">
					Please double-check your spelling
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
</div>
</br>

<!-- **************** REMOVE LOCATION WITH ID **************** -->

<div class="container">
	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalThree" 
	onmouseover="" style="cursor: pointer;">
	Remove A Location	</button>

	<!-- The Modal -->
	<div class="modal fade" id="modalThree">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Remove Location</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- ********************************** FORM -->
				<div class="modal-body">
					<form>
						<div class="form-group">
						<label for="buildingId">Building Id:</label>
							<input type="buildingId" class="form-control" id="buildingId">
						</div>
						<div class="form-group">
							<label for="location">Location:</label>
							<input type="location" class="form-control" id="location">
						</div>
						<button id="submitDelete" type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>


				<div class="modal-body">
					Please doublecheck your spelling
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="fixed-bottom" style="padding:10px">
<button type="button" class="btn btn-lg btn-danger btn-block">Logout</button>
</div>';
  
mysqli_close($conn);
?>
</body>
</html>

