<?php

//mysql connection details

$username = "root"; //have to verify when on google cloud
$password = "root";

//will have to be changed to IP address later
$dsn = "mysql:host=localhost;dbname=inst377;charset=utf8mb4";

//PDO instead of mysqli
$db = new PDO($dsn, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>