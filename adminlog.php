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
	<link rel="stylesheet" type="text/css" href="tapfinder.css"> 

</head>
<body>
<?php
require "config.php";

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$receiveEmail = $_POST["adminEmail"];
$receivePassword = $_POST["adminPassword"];

$userId;
$deleteId;


function query_to_db($conn, $sql){
	$result = mysqli_query($conn, $sql);

	if (($result) AND mysqli_num_rows($result) > 0){
		echo "<h1>SORRY ADMIN! DON'T HAVE ENOUGH TIME FOR THIS, BUT KEEPING THIS FILE FOR FUTURE PURPOSES</h1>";
		?>
		<form>
<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Building/Location</button>

<div class="modal fade" id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">

         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">ADD A LOCATION:</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal body -->
         <form>
        <div class="form-group">
            <label for="usr">Building ID:</label>
            <input type="text" class="form-control" id="buildingId" name = "buildingId" >
         </div>
         <div class="form-group">
            <label for="pwd">Room Description:</label>
            <input type="password" class="form-control" id = "roomDesc" name = "roomD"> 
         </div>
         <div class="form-group">
            <label for="usr">Room Number:</label>
            <input type="text" class="form-control" id="roomNumb" name = "roomNumber" >
         </div>

         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Submit</button>
         </div>
         </form>

      </div>
   </div>
</div>

		</form>
		<form>
<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">DELETE A LOCATION:</button>

<!-- Delete Building -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Modal Header</h4>
						</div>
						<div class="modal-body">
							<p>Some text in the modal.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>

		</form>



		<?php
	} else{
		echo "<h2>Whoa Buddy! You typed something wrong!";
		die;

	}
}
$sql = "select admin_id from admin where admin_email = '".$receiveEmail."'
AND admin_password='" .$receivePassword."'";
echo 
query_to_db($conn, $sql);

mysqli_close($conn);
?>
</body>
</html>