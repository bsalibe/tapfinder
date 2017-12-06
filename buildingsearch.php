
<?php
//importing database connection file
require_once ("db_config.php");

//checks whether a value has been typed in search field
if (isset($_POST["building_name"])){
	$name = $_POST["building_name"];
	$query = $db->query("SELECT * FROM buildings WHERE building_name
		LIKE '%$name%' LIMIT 6");
	echo "<ul>";
	//each row contains a building name like user's input char
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

//closing php to do some front end java script
?>

	<!-- display each database suggestion matching inputted char -->
	<li onclick='update("<?php echo $row['building_name']; ?>")'>
		<!-- make it suggestion clickable -->
		<a><?php echo $row['building_name'];?>
	</li></a>
	
<!-- This appends closing braces to while loop and if condition -->	
<?php 
	}
}
?>
</ul>