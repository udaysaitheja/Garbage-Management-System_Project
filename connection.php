<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'garbagemanager';  


$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
     echo "Connection Error";

}

?>
