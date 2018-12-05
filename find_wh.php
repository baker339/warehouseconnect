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

    <title>WarehouseConnect - Find a Warehouse</title>

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
             <?php
            error_reporting(0);
            if ($_SESSION['LesseeOwner'] == 'owner') {
            echo '<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="list_wh.php">List a Warehouse</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="find_wh.php">Find a Warehouse</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="profilepageWO.php">Profile</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.inc.php">Logout</a>
            </li>';
          } else if ($_SESSION['LesseeOwner'] == 'lessee') {
            echo '<li class="nav-item active px-lg-4">
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

    <script> 
      function updatetable() {

        price = document.getElementById("price").value;
        reqsqft = document.getElementById("reqsqft").value;
        zip = document.getElementById("zip").value;
        twofourseven = document.getElementById("twofourseven").checked;
        machinery = document.getElementById("machinery").checked;
        weaponry = document.getElementById("weaponry").checked;
        shared = document.getElementById("shared").checked;
        loadingdock = document.getElementById("loadingdock").checked;
        security = document.getElementById("security").checked;
        boataccess = document.getElementById("boataccess").checked;

        //Create table headers
        document.getElementById('warename').innerHTML = "Name";
        document.getElementById('location').innerHTML = "Location";
        document.getElementById('space').innerHTML = "Space Available";
        document.getElementById('priceheader').innerHTML = "Price";
                
        document.getElementById('name1').innerHTML = twofourseven;
        document.getElementById('zip1').innerHTML = machinery;
        document.getElementById('sqft1').innerHTML = weaponry;
        document.getElementById('price1').innerHTML = shared;
        document.getElementById('name2').innerHTML = loadingdock;
        document.getElementById('zip2').innerHTML = security;
        document.getElementById('sqft2').innerHTML = boataccess;
        document.getElementById('price2').innerHTML = price;
        document.getElementById('name3').innerHTML = reqsqft;
        document.getElementById('zip3').innerHTML = zip;
        document.getElementById('sqft3').innerHTML = 'heyo';
        document.getElementById('price3').innerHTML = 'heyo';
        document.getElementById('name4').innerHTML = 'heyo';
        document.getElementById('zip4').innerHTML = 'heyo';
        document.getElementById('sqft4').innerHTML = 'heyo';
        document.getElementById('price4').innerHTML = 'heyo';
        document.getElementById('name5').innerHTML = 'heyo';
        document.getElementById('zip5').innerHTML = 'heyo';
        document.getElementById('sqft5').innerHTML = 'heyo';
        document.getElementById('price5').innerHTML = 'heyo';
      }
            
    </script>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded fwh-search-block">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">WarehouseConnect</span>
                <span class="section-heading-lower">Search</span>
              </h2>
            </div>
          </div>

          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  <form method="POST">
                    <br>
                    <p>
                      <b>Target Price:</b> <input type="text" id="price" value="0.00"> dollars per square foot per year<br><br>
                      <b>Required storage space:</b> <input type="text" id="reqsqft" value="0"> square feet<br><br>
                      <b>Zip Code: </b><input type="text" id="zip" value="00000" maxlength="5"><br><br>

                      <div class="inline-field">
                        
                        <input type="hidden" name="twofourseven" value="0" />
                        <input type="checkbox" id="twofourseven" name="twofourseven" value="1">
                        <label for="twofourseven">24/7 Access</label><br>
                        
                        <input type="hidden" name="machinery" value="0" />
                        <input type="checkbox" id="machinery" name="machinery" value="1">
                        <label for="machinery">Machinery Storage</label><br>
                        
                        <input type="hidden" name="weaponry" value="0" />
                        <input type="checkbox" id="weaponry" name="weaponry" value="1">
                        <label for="weaponry">Weaponry Storage</label><br>
                        
                        <input type="hidden" name="shared" value="0" />
                        <input type="checkbox" id="shared" name="shared" value="1">
                        <label for="shared">Shared Storage Facility</label><br>
                        
                        <input type="hidden" name="loadingdock" value="0" />
                        <input type="checkbox" id="loadingdock" name="loadingdock" value="1">
                        <label for="loadingdock">Loading Dock</label><br>
                        
                        <input type="hidden" name="security" value="0" />
                        <input type="checkbox" id="security" name="security" value="1">
                        <label for="security">Security</label><br>
                        
                        <input type="hidden" name="boataccess" value="0" />
                        <input type="checkbox" id="boataccess" name="boataccess" value="1">
                        <label for="boataccess">Boat Access</label><br>

                      </div>
                    </p>
                    <center><button name="search" type="submit" value="Search" onclick = "updatetable()">Search</button></center><br><br>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  


    <?php 
      if (isset($_POST['search'])) {
        echo '
          <section class="page-section cta">
            <div class="container">
              <div class="row">
                <div class="col-xl-9 mx-auto">
                  <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                      <span class="section-heading-upper">WarehouseConnect</span>
                      <span class="section-heading-lower">results</span>
                    </h2>
                    <center>
                      <table> 
                        <thread>
                          <tr>
                            <th id="warename"></th>
                            <th id="location"></th>
                            <th id="space"></th>
                            <th id="priceheader"></th>
                          </tr>
                        </thread>
                        <tbody> 
                          <tr> 
                            <td id="name1"><u><a href="warehouseresult.html"></a></u></td>
                            <td id="zip1"></td>
                            <td id="sqft1"></td>
                            <td id="price1"></td>
                          </tr>
                          <tr>
                            <td id="name2"><u><a href="warehouseresult.html"></a></u></td>
                            <td id="zip2"></td>
                            <td id="sqft2"></td>
                            <td id="price2"></td>
                          </tr>
                          <tr> 
                            <td id="name3"><u><a href="warehouseresult.html"></a></u></td>
                            <td id="zip3"></td>
                            <td id="sqft3"></td>
                            <td id="price3"></td>
                          </tr> 
                          <tr> 
                            <td id="name4"><u><a href="warehouseresult.html"></a></u></td>
                            <td id="zip4"></td>
                            <td id="sqft4"></td>
                            <td id="price4"></td>
                          </tr> 
                          <tr> 
                            <td id="name5"><u><a href="warehouseresult.html"></a></u></td>
                            <td id="zip5"></td>
                            <td id="sqft5"></td>
                            <td id="price5"></td></tr> 
                        </tbody>
                      </table>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </section>';
        }
      ?>

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
