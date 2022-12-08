<?php

try {
    $mysqli = new mysqli("localhost", "root", "iamrootuser", "471project");
    $mysqli->set_charset("utf8mb4");
}catch(Exception $e) {
    error_log($e->getMessage());
    exit('Error connecting to database'); //Should be a message a typical user could understand
}


$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];

$sql = "SELECT * FROM end_user WHERE user_email = ? AND user_password = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $txtEmail, $txtPassword);
$stmt->execute();

$result = $stmt->get_result();

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
$sql = "SELECT * FROM end_user WHERE user_email = ? ";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $txtEmail);
$stmt->execute();


$result = $stmt->get_result();
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
    $sql = "INSERT INTO end_user (user_id, user_FName, user_LName, user_email, user_password) VALUES (?, ?, ?, ?, ?)";
    $sql2 = "INSERT INTO customer (customer_id, payment_info, card_number, cvv, zip_code) VALUES ('?, NULL,NULL, NULL, NULL)";
    
    $stmt = $mysqli->prepare($sql);
    $stmt2 = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $txtEmail, $txtFName, $txtLName, $txtEmail, $txtRePassword);
    $stmt2->bind_param("s", $txtEmail);
    $stmt->execute();
    $stmt2->execute();
   
    echo '<script type="text/javascript">';
    echo  'alert("Registration Successful");';
    echo 'window.location.replace("http://localhost/User_SignIn.html");';
    echo "</script>";
      
}


//close db
$stmt->close();
$stmt2->close();

?>