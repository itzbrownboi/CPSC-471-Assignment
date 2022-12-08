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

$sql = "SELECT * FROM end_user WHERE user_password = ? AND ? IN(SELECT administrator_id FROM administrator) ";


$sth = $mysqli->prepare($sql);
$sth->bind_param('ss', $txtPassword, $txtEmail);
$sth->execute();


$result = $sth->get_result();


$row = mysqli_fetch_array($result);



if(is_array($row))
{    
    header('location: http://localhost/Admin_page.php'); 
}
else
{
    echo '<script type="text/javascript">';
    echo  'alert("Not an Administrator");';
    echo 'window.location.replace("http://localhost/SignIn_Admin.html");';
    echo "</script>";
}


$sth->close();

?>