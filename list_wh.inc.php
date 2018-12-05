<?php
//Starts the session
session_start();

//Checks if the list warehouse form has been submitted
if (isset($_POST['list_wh-submit'])) {

	//Establishes connection to database from the dbh.inc.php file
	require 'dbh.inc.php';

	 
		if( $_FILES['warePic']['name'] != "" )
		{
		   	$destFile = "warehousepics/".$_FILES['warePic']['name'];
			move_uploaded_file( $_FILES['warePic']['tmp_name'], $destFile );
		}
		else
		{
		    die("No file specified!");
		}


	//Creates variables from form entries
	$address = mysqli_real_escape_string($conn, $_POST['WHAddress']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$ZIP = mysqli_real_escape_string($conn, $_POST['WHZip']);
	$size = mysqli_real_escape_string($conn, $_POST['size']);
	$avail = mysqli_real_escape_string($conn, $_POST['avail']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$desc = mysqli_real_escape_string($conn, $_POST['description']);
	$twofourseven = mysqli_real_escape_string($conn, $_POST['twofourseven']);
	$machinery = mysqli_real_escape_string($conn, $_POST['machinery']);
	$weaponry = mysqli_real_escape_string($conn, $_POST['weaponry']);
	$loadingDock = mysqli_real_escape_string($conn, $_POST['loadingdock']);
	$security = mysqli_real_escape_string($conn, $_POST['security']);
	$boatAccess = mysqli_real_escape_string($conn, $_POST['boataccess']);
	$ownerEmail = $_SESSION[userEmail];

	//Error handlers
	//Check for empty fields
	if (empty($address) || empty($state) || empty($ZIP) || empty($size) || empty($avail) || empty($price)) {
		header("Location: ../Website%20Source%20Code/list_wh.php?error=emptyfields&address=".$address."&state=".$state."ZIP=".$ZIP."$size=".$size."&price=".$price);
		exit();
	} else {
			//Prepare SQL statement to insert values into database
			$sql = "INSERT INTO Warehouse (address, state, locindex, sqft, avail, price, bio, twentyFour, freeMach, weaponry, ldgDock, security, waterAccess, image_name, ownerEmail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);

			//Check if connection is established
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../Website%20Source%20Code/list_wh.php?error=sqlerror2");
				exit();
			} else {
				//Insert user values into user table
				mysqli_stmt_bind_param($stmt, "sssssssssssssss", $address, $state, $ZIP, $size, $avail, $price, $desc, $twofourseven, $machinery, $weaponry, $loadingDock, $security, $boatAccess, $destFile, $ownerEmail);
				mysqli_stmt_execute($stmt);
				header("Location: ../Website%20Source%20Code/list_wh.php?listing=success");
		}
	}
	//Close the database statement and connection
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}