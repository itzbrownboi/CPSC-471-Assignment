<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="width=device-wifth, initial-scale=1.0">
        <title> Privacy Page</title>
        <link rel ="stylesheet" href="privacy.css">
        <script src="https://kit.fontawesome.com/595311b478.js" crossorigin="anonymous"></script> 
     
      </head>
<body>
    <div class="container">
        <a class="navbar-brand" href="http://localhost/HomePage.php">Air Connect</a>
        <div class="form-box">
            <h2 id="title">
                Update Password
            </h2>
            
            <form method="post" action="privacy.php">
                <div class="input-field">
                    <i class="fa-regular fa-lock"></i>
                    <input name = "txtEmail" id = "txtEmail" type = "email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-regular fa-lock"></i>
                    <input name = "txtOldP" id = "txtOldP" type = "password" placeholder="Old Password">
                </div>
                <div class="input-field">
                    <i class="fa-regular fa-lock"></i>
                    <input name = "txtNewP" id = "txtNewP" type = "password" placeholder="New Password">
                </div>
                
                <div class="button-field">
                    <button type="submit" name="signInButton" >Update</button>               
                </div>
            </form>
        </div>
        <div class="SideBar">
            <a class="main" href="http://localhost/Customer.php">Profile</a>
            <a href="http://localhost/privacy.php">Privacy</a>
            <a href="http://localhost/Disputes.php">Disputes</a>
            <div class="Logout">
                <?php session_abort();?>
                <a href="http://localhost/User_SignIn.html">Log-Out</a>
            </div>
            <div class="User">
                Customer Account 
            </div>
          
                    
            
        </div>
        
    
</body>
<!-- <script>

    function Profile() {
      if(isset($_POST['Profile'])){
          
        window.location = "http://127.0.0.1:5501/Customer.html#DashBoard";
      }
    }
  </script> -->
