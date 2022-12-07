<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];

$sql = "SELECT * FROM end_user WHERE user_password = '$txtPassword' AND '$txtEmail' IN(SELECT administrator_id FROM administrator)  ";
// $sql2 ="SELECT * FROM administrator WHERE administrator_id = '$txtEmail'";


// insert in database 
$result = mysqli_query($con, $sql);
//$result2 = mysqli_query($con, $sql2);
$row = mysqli_fetch_array($result);
//$row2 = mysqli_fetch_array($result2);
//echo $row[0];
//$value = is_array($row);
//$value2 = is_array($row2);
//if($value && $value2)

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


mysqli_close($con);

?>