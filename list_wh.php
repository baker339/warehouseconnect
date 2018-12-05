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

    <title>WarehouseConnect - List a Warehouse</title>

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
            echo '<li class="nav-item active px-lg-4">
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


    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded fwh-search-block">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">WarehouseConnect</span>
                <span class="section-heading-lower">Property Details</span>
              </h2>
            </div>
          </div>

          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  
                  <form action = "list_wh.inc.php" method="POST" name = "makewarehouseform" enctype = "multipart/form-data">
                    
                      <legend>Basic Information:</legend>

                      <?php
                      //echoes error message for empty fields
                      if(isset($_GET['error'])) {
                        if($_GET['error'] == 'emptyfields') {
                          echo "<p>Fill in all fields!</p>";
                          } 
                        } ?>

                      <p><label><b>Address of Warehouse:</b></label>
                      <input type = "text" name="WHAddress" placeholder= "Input Warehouse Address" required /></p>

                      <!-- Note, we will only use this information ( Address Information)  to display on a warehouse listing. WE WILL NOT USE THIS INFORMATION IN OUR RANKING ALGORITHM OR IN A DATA BASE --> 

                      <p><label><b>State:</b></label>
                      <select name = "state">
                        <option value="AL">Alabama</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
                      <br>
                      *Reminder: Warehouse Connect currently only operates in the contiental 48 states
                      </p>
                      <!-- Note, we will only use this information (State)  to display on a warehouse listing. WE WILL NOT USE THIS INFORMATION IN OUR RANKING ALGORITHM OR IN A DATA BASE -->

                      <p><label><b>Zipcode:</b></label>
                      <input type = "text" name="WHZip" placeholder = "Input Zip Code" required /></p>
                      <!-- Note, we will use this information (zipcode) within our database and for ranking algorithm--> 

                      <p><label><b>Size: </b></label>
                      <input type = "text" name="size" placeholder = "In Squarefeet" required/></p>

                      <p><label><b>Space Available to Lease: </b></label>
                      <input type = "text" name="avail" placeholder = "In Squarefeet" required/></p>

                      <p><label><b>Price: </b></label>
                      <input type = "text" name="price" placeholder = "Dollars/Squarefoot/Week" required/></p>

                      <p><label><b>Description:</b></label><input type = 'text' name = 'description' placeholder="Enter text..."></p>
                      

                     <p><label><b>Image:</b></label><input type = 'file' name = 'warePic'></p> 
                      
                    
                    <br>
                    <p>

                    <legend>Select Available Warehouse Options:</legend>                     
                      <div class="inline-field">
                        
                        
                        <input type="checkbox" name="twofourseven" value = "1" default = "0">
                        <label for="twofourseven">24/7 Access</label><br>
                        
                        
                        <input type="checkbox" name="machinery" value = "1" default = "0">
                        <label for="machinery">Machinery Storage</label><br>
                        
                        
                        <input type="checkbox" name="weaponry" value = "1" default = "0">
                        <label for="weaponry">Weaponry Storage</label><br>
                        
                        
                        <input type="checkbox" name="loadingdock" value = "1" default = "0">
                        <label for="loadingdock">Loading Dock</label><br>
                        
                        
                        <input type="checkbox"name="security" value = "1" default = "0">
                        <label for="security">Security</label><br>
                        
                        
                        <input type="checkbox" name="boataccess" value = "1" default = "0">
                        <label for="boataccess">Boat Access</label><br><br><br>

                          <center><b><h2>Terms to Listing:</b></h2></center><br>
                  I agree that all information is properly filled out and in accordance to the terms to listing herein. I agree that I will not disclose any information regarding an ability to contact myself within my listing. I agree that I am unable to negotiate or speak with potential leesee's to my listing on Warehosue Connect regarding pricing, making arrangements to rent outside of Warehouse Connect or for unsoliciting sources. I agree that any and all communication with potential leesees will be strictly for information regarding the feautres of the warehouse or directions for physical location. I constent to allow Warehouse Connect to monitor and regulate all interactions between myself, potential leesees and current leesees. 

                  <br><br>

                  <h5><center><input type="checkbox" name="termsAgree" required/> I have read and agree to the Definitions and Terms to Listing a warehouse on Warehouse Connect</center></h5> <br>
                
                </div>
              </center>

              <div class = "button6">
                <center><button type = "submit" name = "list_wh-submit"/>Create Warehouse</button></center>

                      </div>
                    </p>

       
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  

<!--if (isset($_POST{'search'})) {be sure to implement this when in php}-->
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">WarehouseConnect</span>
                <span class="section-heading-lower">Definitions &amp; <br>Terms to Listing</span>
              </h2>
              <br>
              <center>

                <br><br>

                <div style="font:16px/26px Arial," align="left">

                  <b>Definitions:</b><br>
                  <u>24/7 Access:</u> The ability to access the warehouse at any given point, at any given day, with the excpetion of nationally recognized, U.S. Holidays.<br>
                  <u>Machinery Storage</u> The lessees are allowed to store large machinery within their rented warehouse space.<br>
                  <u>Weaponry Storage</u> The lessees are allowed to store large machinery within their rented warehouse space. <br>
                  <u>Shared Storage Facility:</u> The abiliy for the warehouse owners warehouse to accomidate more than one leesee fairly and to designate spaces for each.<br> 
                  <u>Loading Dock:</u> The warehouse contains a loading dock that matches the standards of the Whole Building Design Guide regulations.<br> 
                  <u>Security:</u> At least 3 security cameras on the premises and key pad access with individualized key codes per leeses. <br>
                  <u>Boat Access:</u> The ability to access the warehouse and load material into such a space by boat, water craft, or small cargo water craft. <br>
                
                  <br>
              </div>
              </form>
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
