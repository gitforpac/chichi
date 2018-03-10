<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "maniniyot";

// Create connection
$dbcon = new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
} 

?>
