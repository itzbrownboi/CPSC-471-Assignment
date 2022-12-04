<!DOCTYPE html>
<html>
  <head>
    <meta name = "viewport" content="width=device-wifth, initial-scale=1.0">
    <title> SignIn/SignUp Form</title>
    <link rel ="stylesheet" href="SignIn.css">
    <script src="https://kit.fontawesome.com/595311b478.js" crossorigin="anonymous"></script> 
 
  </head>
  <body>
    <div class="container">
        <h1 class="center">
            Air Connect
        </h1>
    <div class="form-box">
        <h1 id="title">
            Customer Sign In
        </h1>

          
        <form method="post" action="contact.php">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-regular fa-envelope"></i>
                    <input name = "txtEmail" id = "txtEmail" type = "email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-regular fa-lock"></i>
                    <input name = "txtPassword" id = "txtPassword" type = "password" placeholder="Password">
                </div>
              
                <p>Forgot Password <a href="http://127.0.0.1:5500/ResetPw.html">Click Here!</a></p>
                <div class="button-Admin">
                    <button type="Button" id="Admin">Admin Sign-In</button>
                </div>
                
            </div>
            <div class="button-field">
                <button type="submit" name="signInButton" >Sign-In</button>               
                <button type="Button" id = "signUpButton" onclick = "signUp()">Sign-Up</button>
            </div>
            
        </form>
        
    </div>
</div>

<script>

  function signUp() {
    if(isset($_POST['signUpButton'])){
        
      window.location = "http://localhost/User_SignUp.html";
    }
  }
</script>

<!-- <script>

    signInButton.onclick=function(){
        echo '<form method="POST" action="http://localhost/Home.php">
        <input type="submit"/>
  </form>';

</script> -->




<!-- <script>
    let signUpButton=document.getElementById("signUpButton");
    let signInButton=document.getElementById("signInButton");
    let nameField =document.getElementById("nameField");
    let title=document.getElementById("title");
    let Admin=document.getElementById("Admin");

    signUpButton.onclick=function(){
        

        location.href="http://127.0.0.1:5500/User_SignUp.html";

    }
    Admin.onclick=function(){
        location.href="http://127.0.0.1:5500/SignIn_Admin.html";
    }
    
</script> -->


  </body>
</html>
