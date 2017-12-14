<?php

require "config.php";
if (isset($_GET['term'])){
	$return_arr = array();
	try {

		$conn = mysqli_connect($server, $username, $password, $db);
		$searchTerm = $_GET['term'];

		$sql = "Select * FROM buildings WHERE building_name LIKE '%".$searchterm."%'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
/*		$stmt = $conn->prepare("Select * FROM buildings WHERE building_name LIKE '%".$searchterm."%'");
		$stmt->execute(array('term' => '%'.$_GET['term'].'%'));
*/
		while($row = mysqli_fetch_assoc($result)) {
			$return_arr[] =  $row['building_name'];
		}
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}


	/* Toss back results as json encoded array. */
	echo json_encode($return_arr);
}


?>