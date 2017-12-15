
<?php

$con = MySQLi_connect(
   "localhost", //Server host name.
   "root", //Database username.
   "root", //Database password.
   "inst377" //Database name or anything you would like to call it.
 
);
 
//Check connection
 
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error(); 
}


if (isset($_POST['building_name'])) {
 
   $Name = $_POST['building_name']; 	
//Search query.
 
   $Query = "SELECT room_number 
  FROM room r JOIN buildings b
    ON r.building_id = b.building_id 
  WHERE b.building_name = '$Name';";
 
//Query execution
 
   $ExecQuery = MySQLi_query($con, $Query);
 
//Creating unordered list to display result.
 
   echo '
 <span>Water Station(s) in '. $Name .' building: </span> 
<ul>
  ';
 
   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) { 	

       ?>
 
   <!-- Creating unordered list items.
        By passing fetched result as parameter. -->

   <li onclick='fill("<?php echo $Result['room_number']; ?>")'>
   <a><?php echo "room " . $Result['room_number']; ?></li></a>
   <!--php code for closing while loop and staring if.-->
   <?php

}

}
?>

</ul>