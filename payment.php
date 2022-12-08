<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name = "viewport" content="width=device-wifth, initial-scale=1.0">
    <title> Payment Form</title>
    <link rel ="stylesheet" href="pay.css">
    <script src="https://kit.fontawesome.com/595311b478.js" crossorigin="anonymous"></script> 
 
  </head>
  <body>
    <!-- body -->
    <div class="container">
        <a class="navbar-brand" href="http://localhost/HomePage.php">Air Connect</a>
        <div class="form-box">
            <!-- <h1 id="title">
                Payment Method
            </h1> -->
            <form method="post" action="payment1.php">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input id = "txtcardName"name = "txtcardName"type = "Name" placeholder="Name on the Card">
                    </div>
                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input id = "txtEmail" name = "txtEmail" type = "email" placeholder="example@example.com">
                    </div>
                    <div class="input-field">
                        <i class="fa-regular fa-lock"></i>
                        <input id = "txtCardNumber" name = "txtCardNumber" type = "Card Number" placeholder="Card Number:xxxx xxxx xxxx xxxx">
                        <img src="cards.pnj.webp" alt="" width="100">
                    </div>
                    <div class="input-card1">
                        <input id = "txtmonyear" name = "monyear" type = "text" placeholder="MM/YY">
                        
                    </div>
                    <div class="input-card2">
                        
                        <input id = "txtCVV" name = "txtCVV" type = "number" placeholder="CVV">
                    </div>
                    <div class ="Billing">
                        <!-- <h1 id="title-1">
                            Billing Address
                        </h1> -->
                    </div>
                    <div class="input-card3">
                        <input name = "txtCountry" id = "txtCountry" type = "text" placeholder="Country" >
                        
                    </div>
                    <div class="input-card3">
                        <input name = "txtCity" id = "txtCity" type = "text" placeholder="City" >
                        
                    </div>
                    <div class="input-card3">
                        <input id = "txtAddress" name = "txtAddress" type = "text" placeholder="Address" >
                        
                    </div>
                    <div class="input-card3">
                        <input name = "txtZipCode" id = "txtZipCode" type = "txt" placeholder="Postal Code" >
                        
                    </div>
                    <div class="button-Admin">
                        <button type="submit" id="submitField">Proceed to Checkout</button>
                    </div>
            </form>
                    <div class="Virtual-Card1">
                        <img src="frontcredit.png" width="90%" >
                        
                        
                    </div>
                <div class="Virtual-Card2">
                    <img src="backcredit.png" width="90%" >
                </div>
                    
                </div>

        
    </div>

  </body>
</html>
