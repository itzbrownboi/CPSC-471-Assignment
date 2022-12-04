<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];


// get the post records
$txtFName = $_POST['txtFName'];
$txtLName = $_POST['txtLName'];
$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];
$txtRePassword = $_POST['txtRePassword'];
$txtUserId = $_POST['txtEmail'];

//Password Match
if($txtPassword != $txtRePassword){
    echo '<script type="text/javascript">';
    echo  'alert("Passwords do not match");';
    echo 'window.location.replace("http://localhost/User_SignUp.html");';
    echo "</script>";
}
// database insert SQL code


//Check if user email is already registered
$sql = "SELECT * FROM end_user WHERE user_email = '$txtEmail' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if(is_array($row))
{   

    echo '<script type="text/javascript">';
    echo  'alert("This email is aleady registered");';
    echo 'window.location.replace("http://localhost/User_SignUp.html");';
    echo "</script>";
}

//Registers user if not already registered
else
{
    $sql = "INSERT INTO end_user (user_id, user_FName, user_LName, user_email, user_password) VALUES ('$txtEmail', '$txtFName', '$txtLName', '$txtEmail', '$txtPassword')";
    $sql2 = "INSERT INTO customer (customer_id, payment_info, card_number, cvv, zip_code) VALUES ('$txtEmail', NULL,NULL, NULL, NULL)";
 
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);
   
    echo '<script type="text/javascript">';
    echo  'alert("Registration Successful");';
    echo 'window.location.replace("http://localhost/User_SignIn.php");';
    echo "</script>";
      
}


//close db
mysqli_close($con);

?>