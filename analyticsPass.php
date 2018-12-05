<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

  	<!--This entire h1 section needs to be on every page. It is the area above the nav bar-->

  	<h1 class="site-heading text-center text-white d-none d-lg-block">
      <img src="img/fadedlogo.jpg" width=9.5% align="left"  hspace="40" alt="logo">
      <span class="site-heading-upper text-primary mb-3">A new way to rent warehouse spaces</span>
      <span class="site-heading-lower">WarehouseConnect</span>
    </h1>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WarehouseConnect - About</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

 </head>


	<body>
		<!-- This section sets up a password prompt for the analytics page -->
		<section class="page-section cta">
	      <div class="container">
	        <div class="row">
	          <div class="mx-auto">
	            <div class="bg-faded text-center rounded border: solid gold">
					<SCRIPT>
						function passWord() {
						var testV = 1;
						var pass1 = prompt('Please Enter Your Password',' ');
						while (testV < 3) {
						if (!pass1) 
						history.go(-1);
						if (pass1.toLowerCase() == "ilovestats") {
						alert('Welcome to WarehouseConnect Analytics!');
						window.open("https://vbruzos.shinyapps.io/StakeholderCurrentAnalytics/");
						break;
						} 
						testV+=1;
						var pass1 = 
						prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
						}
						if (pass1.toLowerCase()!="password" & testV ==3) 
						history.go(-1);
						return " ";
						} 
						</SCRIPT>
					<CENTER>
						<FORM>
							<h2 class="section-heading mb-4">
							<input type="button" value="Enter Protected Area" onClick="passWord()">
						</h2>
						</FORM>
					</CENTER>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
