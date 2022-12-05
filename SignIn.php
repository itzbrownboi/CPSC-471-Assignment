<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];

$sql = "SELECT * FROM end_user WHERE user_email = '$txtEmail' AND user_password = '$txtPassword'";


// insert in database 
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

if(is_array($row))
{    
    header('location: http://localhost/Home.html'); 
}
else
{
    echo '<script type="text/javascript">';
    echo  'alert("Wrong user name or password");';
    echo 'window.location.replace("http://localhost/User_SignIn.php");';
    echo "</script>";
}


mysqli_close($con);

?>