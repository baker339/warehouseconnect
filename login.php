<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WarehouseConnect - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <!-- Start of ChatBot (www.chatbot.com) code -->
      <script type="text/javascript">
      window.__be = window.__be || {};
      window.__be.id = "5c0547527350bb716625208c";
      (function() {
      var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
      be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
      })();
      </script>
  <!-- End of ChatBot code -->

  <body>

    <!--This entire h1 section needs to be on every page. It is the area above the nav bar-->

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <img src="img/fadedlogo.jpg" width=9.5% align="left"  hspace="40" alt="logo">
      <span class="site-heading-upper text-primary mb-3">A new way to rent warehouse spaces</span>
      <span class="site-heading-lower">WarehouseConnect</span>
    </h1>

    <!-- Navigation. Should be same on each page except for current part of code -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">WarehouseConnect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="find_wh.html">Find a Warehouse</a>
            </li>
             <?php
            error_reporting(0);
            if ($_SESSION['LesseeOwner'] == 'owner') {
            echo '<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="list_wh.php">List a Warehouse</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="find_wh.php">Find a Warehouse</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="profilepageWO.php">Profile</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.inc.php">Logout</a>
            </li>';
          } else if ($_SESSION['LesseeOwner'] == 'lessee') {
            echo '<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="find_wh.php">Find a Warehouse</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="profilepageL.php">Profile</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.inc.php">Logout</a>
            </li>';
          }
            else {
            echo '<li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="login_signup.php">Login/Sign Up</a>
            </li>';
          } ?>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded fwh-search-block">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">WarehouseConnect</span>
                <span class="section-heading-lower">Login</span>
              </h2>
            </div>
          </div>

          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  
                  <?php 
                    //Print specific error messages to the user
                    if(isset($_GET['error'])) {
                      if($_GET['error'] == 'emptyfields') {
                        echo "<p>Fill in all fields!</p>";
                      } 
                      //Same error message for password or email for confidentiality purposes
                      else if ($_GET['error'] == 'wrongpwd') {
                        echo "<p>Incorrect Password or Email<p>";
                      } else if ($_GET['error'] == 'nouser') {
                        echo "<p>Incorrect Password or Email<p>";
                      }
                    }
                  ?>
            
                  <br>

                  <center>
                    <form method="POST" action="login.inc.php">
                      <fieldset>
                      <p>
                        <label><b>Username:</b></label><br>
                        <input type = "text" id = "email" name = "email" placeholder = "Enter Email" />
                      </p>
                      <p>
                        <label><b>Password:</b></label><br>
                        <input type = "password" id="password" name = "password" placeholder = "Enter Password" />
                      </p>
                      <div class = "button3">
                        <button type="submit" name = "login-submit" />Login</button>
                       </div>
                      </fieldset>
                    </form>
                  </center>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <center><h5><a href="signup.php">Need an account? Sign up here</a></h5></center>
    <br><br><br>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <div class = "footertextconnect">
          <p>Connect With Us:</p>
        </div>
        <a href="https://www.facebook.com/WarehouseConnect/"><img src = "FBLogo.png" style="width: 75px;height:75px"></a>
        <a href="https://www.instagram.com/warehouseconnect/"><img src = "IGLogo2.png" style="width: 75px;height:75px"> </a>
        <a href="https://www.linkedin.com/in/warehouse-connect-815520174"><img src = "LiLogo.png" style="width: 75px;height:75px"></a>

        <br><br>
        
        <a href="mailto:warehouseconnect17@gmail.com"><font color="#FFFFFF"><font size="4px">Message us</a>
        <br>

       <br> <p class="m-0 small">Copyright &copy; WarehouseConnect 2018</p> &nbsp

        <!-- WHEN THIS IS CONVERTED TO PHP WE HAVE TO ACTIVE THIS TO LOGOUT ON FOOTER

        <?php 
          if (isset($_SESSION['email'])){
          echo "<a href = 'logout.inc.php'>Logout</a>";
        } ?>
        -->
     </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
