<?php 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "UnipiCms";

#Database Connection
$dbc = mysqli_connect($host, $user, $password, $dbname)
OR die('Error connecting to database: '.mysqli_connect_error());

?>