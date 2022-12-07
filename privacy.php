<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$txtcustomerEmail = $_POST['txtEmail'];
$txtOldP = $_POST['txtOldP'];
$txtNewP = $_POST['txtNewP'];

if($txtcustomerEmail == null and $txtOldp == null and $txtNewP == null ){
    echo '<script type="text/javascript">';
    echo  'alert("Enter Info for Update");';
    echo 'window.location.replace("http://localhost/privacy.html");';
    echo "</script>";
}
//Check if old password is correct
$sql = "SELECT * FROM end_user WHERE user_email = '$txtcustomerEmail' and user_password = '$txtOldP'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if(!is_array($row))
{   
    echo '<script type="text/javascript">';
    echo  'alert("Old password incorrect");';
    echo 'window.location.replace("http://localhost/privacy.html");';
    echo "</script>";
}
else{

    //if old password is correct, update db with new password
    $sql2 = "UPDATE end_user SET user_password = '$txtNewP' WHERE user_email = '$txtcustomerEmail' ";
    $result2 = mysqli_query($con, $sql2);
    
    echo '<script type="text/javascript">';
    echo  'alert("Successfully updated information");';
    echo 'window.location.replace("http://localhost/privacy.html");';
    echo "</script>";


}
//close db
mysqli_close($con);

?>