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
echo'	
<div class= "container">
<div style="background: #b3e0ff !important" class ="jumbotron fixed-top">
	<ul class="nav nav-tabs nav-justified 
	border border-top-0 border-right-0 border-left-0 border-white"
	style="font-size: 20px">
	<li class="nav-item">
		<a class="nav-link active" href="userlogged.php">Your Account</a>
	</li>
</ul>
</nav>
</div>

<div class = "container">


</div>



<div class="fixed-bottom" style="padding:10px">
	<a href="about.html"><button type="button" class="btn btn-lg btn-danger btn-block"
	onmouseover="" style="cursor: pointer;">
	Logout</button></a>
</div>';

mysqli_close($conn);
?>
</body>
</html>

