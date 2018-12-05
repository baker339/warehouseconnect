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

    <title>WarehouseConnect - Profile Page (Owner)</title>

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

    <!-- Navigation -->
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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="profilepageWO.php">Profile</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.inc.php">Logout</a>
            </li>';
          } else if ($_SESSION['LesseeOwner'] == 'lessee') {
            echo '<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="find_wh.php">Find a Warehouse</a>
            </li>
            <li class="nav-item active px-lg-4">
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
                <span class="section-heading-upper">WarehouseConnect - Owner</span>
                <span class="section-heading-lower">Profile Page </span>
                
              </h2>
            </div>
          </div>

          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                    <center>
                  
                <?php

require 'dbh.inc.php';

$id=$_SESSION[userEmail];

// Create connection

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

$result = mysqli_query($conn,"SELECT * FROM `Owner` where email='".$id."'");
   if(!$result){

              die('Could not get data: ' . mysqli_connect_error());
          }
    else {
while($row = mysqli_fetch_assoc($result))
{
$name=$row['name'];
$email=$row['email'];
$address=$row['ZIP'];
$busnID=$row['ID'];
    }
  }


?>
   
        <strong><h1></h1></strong>
        <br>

        <table width="398" border="0" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><u><strong>Your Profile Information:</strong></u></td>
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">Name:</div></td>
    <td width="165" valign="top"><?php echo $name ?></td>
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">Email:</div></td>
    <td width="165" valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $address ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Business ID:</div></td>
    <td valign="top"><?php echo $busnID ?></td>
  </tr>
</table>
 <br><br>
 <center><p>Click here to access a catered list of analytics designed for warehouse owners: </p></center>
<center><a style = "color:black" href="https://vbruzos.shinyapps.io/WarehouseOwnerTextAnalytics/"><u>Owner Analytics</u></a></center><br>
<h4>Active Leases:</h4>
    
<?php
$result2= mysqli_query($conn,"SELECT * FROM `Lease` where ownerEmail='".$id."'");

if(!$result2){

              die('Could not get data: ' . mysqli_connect_error());
          }
    else {

        echo "<table><tr><th>LEASE ID</th><th>  START DATE  </th><th>  END DATE   </th><th>STATUS</th></tr>";
while($row2 = mysqli_fetch_assoc($result2))
{
$leaseID=$row2['ID'];
$lease_lesseeEmail=$row2['lesseeEmail'];
$lease_ownerEmail=$row2['ownerEmail'];
$lease_start_date=$row2['startDate'];
$lease_end_date=$row2['endDate'];
$lease_status=$row2['approvedStatus'];
    

  echo "<tr><td>" . $row2['ID'] . "</td><td>". $row2['startDate']. "</td><td>". $row2['endDate']. "</td><td>". $row2['approvedStatus']. "</td></tr>";

    }

    echo "</table>";
}

echo "<br><br>";

?>

<h4>Listed Properties:</h4>

<?php

$result3= mysqli_query($conn,"SELECT * FROM `Warehouse` where ownerEmail='".$id."'");

if(!$result3){

              die('Could not get data: ' . mysqli_connect_error());
          }
    else {

        echo "<table><tr><th>Warehouse ID</th><th>  Squarefoot  </th><th>  Price  </th><th>Average Rating</th><th>  Image  </th></tr>";
while($row3 = mysqli_fetch_assoc($result3))
{
$warehouseID=$row3['ID'];
$warehouseSqft=$row3['sqft'];
$warehouseSqft=$row3['price'];
$warehouseRating=$row3['avgRtg'];
$warehouseImg=$row3['image'];

  echo "<tr><td>" . $row3['ID'] . "</td><td>". $row3['sqft']. "</td><td>". $row3['price']. "</td><td>". $row3['avgRtg']. "</td><td><img src=".$row3['image']."/></td></tr>";

    }

    echo "</table>";
}



mysqli_close($conn);

?>

                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section> 

    <br><br>


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

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>




</html>


