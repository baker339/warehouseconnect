<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "g1090438";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>