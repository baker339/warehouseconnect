<?php
//start php session variables
session_start();

//Checks for form submission
if (isset($_POST["signup-submit"])) {
	
	//Establishes connection to database from the dbh.inc.php file
	require 'dbh.inc.php';

	//Creates variables from form entries
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$busnID = mysqli_real_escape_string($conn, $_POST['EINSS']);
	$ZIP = mysqli_real_escape_string($conn, $_POST['zipcode']);
	$pw = mysqli_real_escape_string($conn, $_POST['password']);
	$pw2 = mysqli_real_escape_string($conn, $_POST['password2']);
	$OwnLease = mysqli_real_escape_string($conn, $_POST['OwnerLessee']);

	//Error handlers
	//Check for empty fields
	if (empty($name) || empty($email) || empty($busnID) || empty($ZIP) || empty($pw) || empty($pw2)) {
		header("Location: ../Website%20Source%20Code/signup.php?error=emptyfields&uid=".$username."&email=".$email."&busnID=".$busnID."&ZIP=".$ZIP);
		exit();
	} 
	//Check if email is of valid format AND name is valid format
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
		header("Location: ../Website%20Source%20Code/signup.php?error=invalidmailname&busnID=".$busnID."&ZIP=".$ZIP);
		exit();
	} 
	//Check if email is of valid format
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../Website%20Source%20Code/signup.php?error=invalidemail&uid=".$username."&busnID=".$busnID."&ZIP=".$ZIP);
		exit();
	} 
	//Check if name is valid format
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
		header("Location: ../Website%20Source%20Code/signup.php?error=invalidname&email=".$email."&busnID=".$busnID."&ZIP=".$ZIP);
		exit();
	} 
	//Check if the passwords match
	else if($pw !== $pw2) {
		header("Location: ../Website%20Source%20Code/signup.php?error=passwordcheck&uid=".$username."&email=".$email."&busnID=".$busnID."&ZIP=".$ZIP);
		exit();
	} else {
		//Check if warehouse owner or lessee is checked
		if (empty($OwnLease)) {
			header("Location: ../Website%20Source%20Code/signup.php?error=emptyOwnLease&uid=".$username."&email=".$email."&busnID=".$busnID."&ZIP=".$ZIP);
			exit();
		} else if ($OwnLease == "Lessee") {
			//If the user is a lessee
			//Prepare the SQL statement
			$sql = "SELECT email FROM Lessee WHERE email=?;";
			$stmt = mysqli_stmt_init($conn);
			
			//Check if the SQL connection failed
			if(!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../Website%20Source%20Code/signup.php?error=sqlerror");
				exit();
			} else {
				//Check if email has already been taken
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);

				//Return error if email is taken
				if ($resultCheck > 0) {
					header("Location: ../Website%20Source%20Code/signup.php?error=emailtaken&uid=".$username."&busnID=".$busnID."&ZIP=".$ZIP);
					exit();
				} else {
					//Prepare SQL statement to insert values into database
					$sql = "INSERT INTO Lessee (name, email, busnID, ZIP, pw) VALUES (?, ?, ?, ?, ?);";
					$stmt = mysqli_stmt_init($conn);

					//Check if connection is established
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("Location: ../Website%20Source%20Code/signup.php?error=sqlerror");
						exit();
					} else {
						//Hashing the password
						$hashedPW = password_hash($pw, PASSWORD_DEFAULT);

						//Insert user values into user table
						mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $busnID, $ZIP, $hashedPW);
						mysqli_stmt_execute($stmt);
						$_SESSION[userEmail] = $row['email'];
						$_SESSION[name] = $row['name'];
						$_SESSION[zipcode] = $row['ZIP'];
						$_SESSION[busnID] = $row['busnID'];
						$_SESSION[LesseeOwner] = 'lessee';
						header("Location: ../Website%20Source%20Code/profilepageL.php?signup=success");
						
					}

				}

			}
		} else {
			//If the user is an owner
			//Prepare the SQL statement
				$sql = "SELECT email FROM Owner WHERE email= ? ;";
				$stmt = mysqli_stmt_init($conn);
				
				//Check if the SQL connection failed
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../Website%20Source%20Code/signup.php?error=sqlerror");
					exit();
				} else {
						//Check if email has already been taken
						mysqli_stmt_bind_param($stmt, "s", $email);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						$resultCheck = mysqli_stmt_num_rows($stmt);

						//Return error if email is taken
						if ($resultCheck > 0) {
							header("Location: ../Website%20Source%20Code/signup.php?error=emailtaken&uid=".$username."&busnID=".$busnID."&ZIP=".$ZIP);
							exit();
						} else {
							//Prepare SQL statement to insert values into database
							$sql = "INSERT INTO Owner (name, email, ID, ZIP, pw) VALUES (?, ?, ?, ?, ?);";
							$stmt = mysqli_stmt_init($conn);

							//Check if connection is established
							if (!mysqli_stmt_prepare($stmt, $sql)) {
								header("Location: ../Website%20Source%20Code/signup.php?error=sqlerror");
								exit();
							} else {
								//Hashing the password
								$hashedPW = password_hash($pw, PASSWORD_DEFAULT);

								//Insert user values into user table
								mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $busnID, $ZIP, $hashedPW);
								mysqli_stmt_execute($stmt);
								$_SESSION[userEmail] = $row['email'];
								$_SESSION[name] = $row['name'];
								$_SESSION[zipcode] = $row['ZIP'];
								$_SESSION[busnID] = $row['busnID'];
								$_SESSION[LesseeOwner] = 'owner';
								header("Location: ../Website%20Source%20Code/profilepageWO.php?signup=success");
								
							}

					}

			}

		}

	}
	//Close the database statement and connection
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else {
	header("Location: ../Website%20Source%20Code/signup.php");
	exit();
}