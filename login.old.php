<?php
// Start the session
session_start();
?>
<!doctype html> 

<html>
    <head>
    	<title>
    		Warehouse Connect - Log in
    	</title>
        <meta-charset = "UTF-8"/>
</head>

        <link rel="stylesheet" type = "text/css" href = "styles.css">

 <header>

        <div class = "header">

        <div class = "container">

        <div class = "logo">
            <img src = "WCLogo.png" style="width: 200px;height:150px">
            <!--Add in logo with a href later  -->
        
</div>
    
        <div class = "nav">
            <ul>
            <li><u><a href="index.html">Home</a></li></u>
            <li><u><a href="FindAWarehouse.html">Find a Warehouse</a></li></u>
            <li><u><a href="AboutUs.html">About / Contact</a></li></u>
            <li><u><a href= "LoginSignup.html">Log In / Sign Up</a></li></u>
            
       </ul>


   </div>
</div>
</div>

        
</header>

<body>


        <div class = "container">
        <div class = "content">

    	<center><u><strong><h2>Login Here:</h2></strong></u>
            <br>
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
            <form method="POST" action="login.inc.php">
                <fieldset>
                <legend>Log in Credentials</legend>
                <p><label>Username:</label><br>
                    <input type = "text" id = "email" name = "email" placeholder = "Enter Email" /></p>
                <p><label>Password:</label><br>
                    <input type = "password" id="password" name = "password" placeholder = "Enter Password" /></p>
                <div class = "button3">
                    <button type="submit" name = "login-submit" />Login</button>
                 </div>
                </fieldset>
            </form>
        <a href="signup.php">Sign Up</a>
<br><br><br><br><br><br><br>
</div>
</div>
</center>

<footer>
    <nav>
    <div class = "wrapper">
        <ul> 
              <li><a href="https://www.facebook.com/WarehouseConnect/"><img src = "FBLogo.png" style="width: 75px;height:75px"></a></li>
        <li><a href="https://www.instagram.com/warehouseconnect/"><img src = "IGLogo2.png" style="width: 75px;height:75px"> </a></li>
        <li><a href="https://www.linkedin.com/in/warehouse-connect-815520174"><img src = "LiLogo.png" style="width: 75px;height:75px"></a></li>
        
        </ul>
   
        </nav>
    </div>



</footer>


                        


            
    </body>


</html>
