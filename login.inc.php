<?php

//Checks for form submission
if (isset($_POST['login-submit'])) {
	
	//Establishes connection to database from the dbh.inc.php file
	require 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pw = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($email) || empty($pw)) {
		header("Location: ../Website%20Source%20Code/login.php?error=emptyfields");
		exit();
	} else {
		//Prepare SQL statement for lessees
		$sql = "SELECT * FROM Lessee WHERE email = ?;";
		$stmt = mysqli_stmt_init($conn);

		//Check if SQL connection was successfully established
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../Website%20Source%20Code/index.php?error=sqlerror");
			exit();
		} else {

			//Get result from database
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			//Check if email gets a result in lessee table
			if ($row = mysqli_fetch_assoc($result)) {
				//Check if password matches
				$pwdCheck = password_verify($pw, $row['pw']);
				if ($pwdCheck == false) {
					header("Location: ../Website%20Source%20Code/login.php?error=wrongpwd");
					exit();
				} else if ($pwdCheck == true) {
					//If passwords match, login the user
					session_start();
					$_SESSION[userEmail] = $row['email'];
					$_SESSION[name] = $row['name'];
					$_SESSION[zipcode] = $row['ZIP'];
					$_SESSION[busnID] = $row['busnID'];
					$_SESSION[LesseeOwner] = 'lessee';
					header("Location: ../Website%20Source%20Code/index.php?login=success");
				} else {
					//In case any other password error occurs
					header("Location: ../Website%20Source%20Code/login.php?error=wrongpwd");
					exit();
				}
			} else {
				//Check if the user is in the Owner table
				//Prepare SQL statement for lessees
				$sql = "SELECT * FROM Owner WHERE email = ?;";
				$stmt = mysqli_stmt_init($conn);

				//Check if SQL connection was successfully established
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../Website%20Source%20Code/index.php?error=sqlerror");
					exit();
				} else {

					//Get result from database
					mysqli_stmt_bind_param($stmt, "s", $email);
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					//Check if email gets a result in lessee table
					if ($row = mysqli_fetch_assoc($result)) {
						//Check if password matches
						$pwdCheck = password_verify($pw, $row['pw']);
						if ($pwdCheck == false) {
							header("Location: ../Website%20Source%20Code/login.php?error=wrongpwd");
							exit();
						} else if ($pwdCheck == true) {
							//If passwords match, login the user
							session_start();
							$_SESSION[userEmail] = $row['email'];
							$_SESSION[name] = $row['name'];
							$_SESSION[zipcode] = $row['ZIP'];
							$_SESSION[busnID] = $row['busnID'];
							$_SESSION[LesseeOwner] = 'owner';
							header("Location: ../Website%20Source%20Code/index.php?login=success");
						} else {
							//In case any other password error occurs
							header("Location: ../Website%20Source%20Code/login.php?error=wrongpwd");
							exit();
						}
				} else {
					header("Location: ../Website%20Source%20Code/login.php?error=nouser");
					exit();
				}
			}

		}
	}




} 

} else {
	header("Location: ../Website%20Source%20Code/index.php?login=error");
	exit();
}