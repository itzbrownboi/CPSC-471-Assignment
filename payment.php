<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];


// get the post records
$txtEmail = $_POST['txtEmail'];
$txtCardNumber = $_POST['txtCardNumber'];
$txtCVV = $_POST['txtCVV'];
$txtZipCode = $_POST['txtZipCode'];

// database insert SQL code


//Check if user email is already registered
$sql = "SELECT * FROM end_user WHERE user_email = '$txtEmail' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if(is_array($row))
{   
    $sql2 = "INSERT INTO customer (customer_id, payment_info, card_number, cvv, zip_code) VALUES ('$txtEmail', NULL, '$txtCardNumber', '$txtCVV', '$txtZipCode')";
    $result2 = mysqli_query($con, $sql2);
    //Go to Reservation page here
    //echo 'window.location.replace("http://localhost/User_signIn.html");';
}

//Registers user if not already registered
else
{  
    echo '<script type="text/javascript">';
    echo  'alert("Please sign in first!");';
    echo 'window.location.replace("http://localhost/User_SignIn.html");';
    echo "</script>";
      
}


//close db
mysqli_close($con);

?>