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

    <title>WarehouseConnect - Sign Up</title>

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
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
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
                <span class="section-heading-lower">Sign Up</span>
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
                      } else if ($_GET['error'] == 'invalidmailname') {
                        echo "<p>Invalid email and name</p>";
                      } else if ($_GET['error'] == 'invalidemail') {
                        echo "<p>Invalid email</p>";
                      }  else if ($_GET['error'] == 'invalidname') {
                        echo "<p>Invalid name</p>";
                      } else if ($_GET['error'] == 'passwordcheck') {
                        echo "<p>Passwords must match</p>";
                      }  else if ($_GET['error'] == 'emptyOwnLease') {
                        echo "<p>Must Identify if Warehouse Owner or Lessee</p>";
                      }
                    }
                  ?>
            
                  <br>
                  <center>
                    <form method = "POST" class="signup-form" action="signup.inc.php">
                      <fieldset> 
                        <p>
                          <label><b>E-mail:</b></label><br>
                          <input type = "text" name = "email" id="email" placeholder = "Your E-mail" />
                        </p>
                        <p>
                          <label><b>Password:</b></label><br>
                          <input type = "password" name = "password" id="password" placeholder = "Enter Password" />
                        </p>
                        <p>
                          <label><b>Re-type Password:</b></label><br>
                          <input type = "password" name = "password2" id="password2" placeholder = "Re-type Password" />
                        </p>
                        <p>
                          <label><b>Full Name:</b></label><br>
                          <input type = "text" id="name" name = "name" placeholder = "Your Name" />
                        </p>
                        <p>
                          <label><b>EIN or Social Security Number:</b></label><br>
                          <input type = "text" id="EINSS" name = "EINSS" placeholder = "EIN or SS Number" />
                        </p>
                        <p>
                          <label><b>Zip Code:</b></label><br>
                          <input type = "text" id="zipcode" name = "zipcode" pattern = "[0-9]{5}" placeholder = "Your Zip Code" />
                        </p>
                        <br>
                        <h5><u>Terms of Use and Privacy Policy</u></h5>
                        <div style="height:200px;width:400px;border:1px solid #ccc;font:16px/26px Arial, Serif;overflow:auto; background-color: white;" align="left">
                          When you visit WarehouseConnect, we do not collect any personally identifiable information about you unless you specifically provide it to us.  Except as required by law or expressly authorized by you, we will not provide any personally identifiable information regarding you to any third parties.<br><br>

                          Your visit to our site is tracked through a standard web analytics program, which keeps records of traffic on the site, as well as a count of visitors by URL, domain, geographic location, search engine, keywords used, and other web measurements.<br><br>

                          If you choose to correspond with us by email, we may retain your email address and the content of your email messages, along with our responses.  Information retained is used to administer our business activities, for providing customer service, and to notify you about important changes about our web site or new services and news items we think you may find valuable.  As a user of our site, you have the opportunity to notify us of your desire to not receive these messages by unsubscribing via email at This email address is being protected from spambots.<br><br>

                          By using the Warehouse Connect website, you consent to our use of your information as described in this Privacy Statement.  We reserve the right to change our Privacy Statement at any time without advance notice.<br><br>

                          To utilize this website as a warehouse owner, you are allowed to have an account that is deemed a "Warehouse Owner." You are not allowed to become a "Lessee" with the warehouse owner account under any circumstances or use our service in the pursuit thereof. To utilize this website as a lessee, you are allowed to have an account that is deemed a "Lessee." You are not allowed to become a "Warehouse Owner" with the lessee account under any circumstances or use our service in the pursuit thereof. If you would like to be a lessee and are currently a warehouse owner, you must make a seperate account. This does not mean that you have to abandon or discountinue the use of any account. If you would like to be a warehouse owner and are currently a lessee, you must make a seperate account. This does not mean that you have to abandon or discountinue the use of any account. 

                        </div>

                        <br><br>
                        <input type ="checkbox" id="termsAgree" value = "Agree to Terms and Conditions" required="" />
                        <?php echo "I have read and agree to the terms and conditions"; ?>
                        <br><br>
                        <input type= "radio" name = "OwnerLessee" value= "WarehouseOwner">Warehouse Owner    </input>
                        <input type= "radio" name = "OwnerLessee" value= "Lessee">Lessee</input>
                        <br><br>
                        <BUTTON type = "submit" name = "signup-submit">Sign Up</BUTTON> 
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

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <div class = "footertextconnect">
          <p>Connect With Us:</p>
        </div>
        <a href="https://www.facebook.com/WarehouseConnect/"><img src = "img/FBLogo.png" style="width: 75px;height:75px"></a>
        <a href="https://www.instagram.com/warehouseconnect/"><img src = "img/IGLogo2.png" style="width: 75px;height:75px"> </a>
        <a href="https://www.linkedin.com/in/warehouse-connect-815520174"><img src = "img/LiLogo.png" style="width: 75px;height:75px"></a>

        <br><br>
        
        <a href="mailto:warehouseconnect17@gmail.com"><font color="#FFFFFF"><font size="4px">Message us</a></font></font>
        <br>

       <br> <p class="m-0 small">Copyright &copy; WarehouseConnect 2018</p> &nbsp;

    

        <?php 
          //error_reporting(0);
          if (isset($_SESSION['userEmail'])) {
            echo "<a href = 'logout.inc.php'>Logout</a>";
          } 
          else {
            echo "";
          } 
        ?>

        </a>
     </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
