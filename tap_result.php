<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}
	table, th, td {
    border: 1px solid black;
}
	td:first-child { 
        color: blue;
        font: italic bold 20px Georgia, serif; 
    };

</style>


</head>
<body>

<?php 


$building_name = $_POST["building_name"];


$db = new mysqli('localhost', 'root', 'root', 'inst377');

$building_result = $db->query("SELECT room_description, room_number 
	FROM inst377.room JOIN inst377.buildings 
		ON inst377.buildings.building_id = inst377.room.building_id 
	WHERE buildings.building_name = '$building_name'");




echo "<table><tr><th>$building_name</th></tr>";

while($row = $building_result->fetch_assoc()){
	echo "<tr><td>" .$row["room_number"]. "</td></tr>";
}







?>



</body>
</html>