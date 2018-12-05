<?php
  error_reporting(0);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WarehouseConnect - Home</title>

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
            <li class="nav-item active px-lg-4">
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
            echo '<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="login_signup.php">Login/Sign Up</a>
            </li>';
          } ?>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">WarehouseConnect</span>
              <span class="section-heading-lower">Connecting you to your next warehouse</span>
            </h2>
            <p class="mb-3">Warehouse Connect is a warehouse matching service designed to bring those looking to rent a warehouse for a period of time from a professional, registered warehouse owner. We pride ourselves on our dedication to providing quality and consistent service to leasees and warehouse owners alike!
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="login_signup.html">Join Today!</a>
              <!--link Join today! button to the create an account page-->
            </div>
          </div>
        </div>
      </div>
    </section>

<!--
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">WarehouseConnect</span>
                <span class="section-heading-lower">Get started today</span>
              </h2>
                <div class="block">
                  <span>1</span>
                  <h4>Create an Account</h4>
                  <p> Icon and link? </p>
                </div>
                <div class="block">
                  <span>2</span>
                  <h4>Create an Account</h4>
                  <p> icon and link? </p>
                </div>
                <div class="block">
                  <span>3</span>
                  <h4>Third Step</h4>
                  <p> icon and link? </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
-->

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">What our clients have to say</span>
                <span class="section-heading-lower">Testimonials</span>
              </h2>

                  <br>
                  
                  
                  <img src="img/testmichelle.jpg" alt="Michelle Testimonial" height=150pt width=150pt align="left" hspace="20">
                  <h5 align = "left">Emily, Lessee</h5>
                  <p align = "left">"I am a small business owner, and I struggled for years to find the right warehouses to store my products as I continute to expand my operations in new locations. The flexibility and limitless options WarehouseConnect provides has made my job so much easier."</p>

                  <br>
                
                  <img src="img/testleslie.jpg" alt="Leslie Testimonial" height=150pt width=150pt align = "left" hspace="20">
                  <h5 align = "left">Leslie, Warehouse Owner</h5>
                  <p align = "left">"When I inherited my warehouse property from my late great uncle, I had no idea what to do with it. The WarehouseConnect platform is simple to use, and made it incredibly easy for me to advertise and rent out my property."</p>
                
                  <br>

                  <img src="img/testjoe.jpg" alt="Joe Testimonial" height=150pt width=150pt align="left" hspace="20">
                  <h5 align = "left">Mario, Lessee</h5>
                  <p align = "left">"Between my family business and my three kids, I am constantly busy. I'm so grateful that I can count on WarehouseConnect to quickly connect me to reliable warehouse properties operated by reputable warehouse owners."</p>
                
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Where are our locations?</span>
                <span class="section-heading-lower">Popular locations</span>
              </h2>
              <p class="mb-0">
              Can we add a cool image of a map with pushpins on locations or something like that?</p>
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
