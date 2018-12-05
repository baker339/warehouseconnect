<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
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

<!--First section with main image and our story-->

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/aboutwarehouse.jpg" alt=""> <!--image at top of about page-->
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Modern Warehousing, Traditional Customer Value</span>
                  <span class="section-heading-lower">Our Story</span>
                </h2>
                <p>Founded in 2018 by top Purdue University Industrial Engineers, WarehouseConnect (WC) aspires to modernize the warehouse rental industry. The mission of WC is to provide an easy-to-use online platform to facilitate short term lease agreements between warehouse owners and potential lessees in the 48 continental United States. The team of seven students are highly motivated to positively contribute to the growth and success of small businesses around the country by simplifying the process of finding a warehouse that corresponds to their unique needs. However, the warehouses on our platform are available for anyone to rent and are not for the sole use of businesses. In addition to various types of lessees, WarehouseConnect benefits warehouse owners who want to lease their properties by providing a space to advertise during their quest to find lessees.</p>
              </div>
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
                <!--<span class="section-heading-upper">Smaller Header Above</span>-->
                <span class="section-heading-lower">Our Team</span>
              </h2>
            </div>

            <br> <br>
              <center>
                <div class="block-team">
                  <span>Chief Technology Officer</span>
                  <h4>Aidan Baker</h4>
                  <img src="img/AidanHS.jpg" alt="Aidan Baker" height=175pt width=175pt>
                </div>

                <div class="block-team">
                  <span>Chief Development Officer</span>
                  <h4>Asyraf Aliff</h4>
                  <img src="img/AsyrafHS.jpg" alt="Asyraf Aliff" height=175pt width=175pt>
                </div>

                
                <div class="block-team">
                  <span>Chief Policy Officer</span>
                  <h4>Sinem Bas</h4>
                  <img src="img/SinemHS.jpg" alt="Sinem Bas" height=175pt width=175pt>
                </div>


                <br><br><br>
                <div class="block-team">
                  <span>Chief Operating Officer</span>
                  <h4>Victor Bruzos</h4>
                  <img src="img/VictorHS.jpg" alt="Victor Bruzos" height=175pt width=175pt>
                </div>
                <div class="block-team">
                  <span>Chief Business Officer</span>
                  <h4>Jacob Cook</h4>
                  <img src="img/JacobHS.jpg" alt="Jacob Cook" height=175pt width=175pt>
                </div>
                <div class="block-team">
                  <span>Chief Administrative Officer</span>
                  <h4>Cole Ellis</h4>
                  <img src="img/EllisHS.jpg" alt="Cole Ellis" height=175pt width=175pt>
                </div>
              </center>

                <br><br>
                <center>
                <div class="block-team">
                  <span>Chief Strategy Officer</span>
                  <h4>Jennifer Teefey</h4>
                  <img src="img/JenHS.jpg" alt="Jennifer Teefey" height=175pt width=175pt>
                </div>
                </center>
              
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
                <!--<span class="section-heading-upper">Smaller Header Above</span>-->
                <span class="section-heading-lower">Our Location</span>
              </h2>
            </div>

            <br> <br>
            <center>
              <div class = "locationbigbox">
                <h4><strong> Phone Number:</strong></h4>
                <h5>765-283-2521</h5><br><br>
                <h4><strong>Address:</strong></h4>
                <h5>701 W Stadium Ave<br>West Lafayette, IN 47907</h5>
                <br>
                <div id="googleMap" style="width:350px;height:350px;"></div>
                <script>
                  function myMap() {
                    var mapProp= {
                      center:new google.maps.LatLng(40.4237,-86.9212),
                      zoom:12,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                  }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQhGvYn5fA5pJIB07WZrCrJqWyek682dg&callback=myMap"></script>

              </div>
            </center>
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
          if (isset($_SESSION[userEmail])) {
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
