<?php
// Start the session
session_start();
?>

<!doctype html> 

<html>
    <head>
    	<title>
    		Warehouse Connect - Sign Up
    	</title>

        <script type="text/javascript">
        function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

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


            <center><u><strong><h2>Sign Up Here:</h2></strong></u>
            <br>
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
            
            
            <form method = "POST" class="signup-form" action="signup.inc.php">
                <fieldset>
            <legend>Sign up Credentials</legend>
            <p><label>E-mail:</label><br>
                <input type = "text" name = "email" id="email" placeholder = "Your E-mail" /></p>
            <p><label>Password:</label><br>
                <input type = "password" name = "password" id="password" placeholder = "Enter Password" /></p>
            <p><label>Re-type Password:</label><br>
                <input type = "password" name = "password2" id="password2" placeholder = "Re-type Password" /></p>
            <p><label>Full Name:</label><br>
                <input type = "text" id="name" name = "name" placeholder = "Your Name" /></p>
            <p><label>EIN or Social Security Number:</label><br>
                <input type = "text" id="EINSS" name = "EINSS" placeholder = "EIN or SS Number" /></p>
            <p><label>Zip Code:</label><br>
                <input type = "text" id="zipcode" name = "zipcode" pattern = "[0-9]{5}" placeholder = "Your Zip Code" /></p>
                

                <strong><u>Terms of Use and Privacy Policy</strong></u>
                <div style="height:200px;width:400px;border:1px solid #ccc;font:16px/26px Arial, Serif;overflow:auto; background-color: white;">
                When you visit WarehouseConnect, we do not collect any personally identifiable information about you unless you specifically provide it to us.  Except as required by law or expressly authorized by you, we will not provide any personally identifiable information regarding you to any third parties.  

                Your visit to our site is tracked through a standard web analytics program, which keeps records of traffic on the site, as well as a count of visitors by URL, domain, geographic location, search engine, keywords used, and other web measurements.

                If you choose to correspond with us by email, we may retain your email address and the content of your email messages, along with our responses.  Information retained is used to administer our business activities, for providing customer service, and to notify you about important changes about our web site or new services and news items we think you may find valuable.  As a user of our site, you have the opportunity to notify us of your desire to not receive these messages by unsubscribing via email at This email address is being protected from spambots. 

                By using the Warehouse Connect website, you consent to our use of your information as described in this Privacy Statement.  We reserve the right to change our Privacy Statement at any time without advance notice.  

                To utilize this website as a warehouse owner, you are allowed to have an account that is deemed a "Warehouse Owner." You are not allowed to become a "Lessee" with the warehouse owner account under any circumstances or use our service in the pursuit thereof. To utilize this website as a lessee, you are allowed to have an account that is deemed a "Lessee." You are not allowed to become a "Warehouse Owner" with the lessee account under any circumstances or use our service in the pursuit thereof. If you would like to be a lessee and are currently a warehouse owner, you must make a seperate account. This does not mean that you have to abandon or discountinue the use of any account. If you would like to be a warehouse owner and are currently a lessee, you must make a seperate account. This does not mean that you have to abandon or discountinue the use of any account. 

                </div>

                <br><br>
                <?php echo "I have read and agree to the terms and conditions"; ?>
			     <p><input type ="checkbox" id="termsAgree" value = "Agree to Terms and Conditions" required="" /></p>
                  <br>
                <input type= "radio" name = "OwnerLessee" value= "WarehouseOwner">Warehouse Owner</input>
                <input type= "radio" name = "OwnerLessee" value= "Lessee">Lessee</input>
                <br><br>
                <BUTTON type = "submit" name = "signup-submit">Sign Up</BUTTON> 
            </div>
        </fieldset>
</form>
<br><br>

 
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
