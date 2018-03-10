<?php

require 'dbconnect.php';

$name = $_GET['name'];

$sql = "INSERT INTO mdt(name) VALUES('$name')";

$query = mysql_query($sql_query);

var_dump($query);


?>