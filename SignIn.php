<?php

session_start();

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

$row = mysqli_fetch_array($result);


if(is_array($row))
{    
    $_SESSION["userID"] = $txtEmail;
    //$txtacct = $txtEmail;
    echo ($_SESSION);
    header('location: http://localhost/HomePage.php'); 
}
else
{
    echo '<script type="text/javascript">';
    echo  'alert("Wrong user name or password");';
    echo 'window.location.replace("http://localhost/User_SignIn.html");';
    echo "</script>";
}
 

$stmt->close();

?>