<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$txtcustomerEmail = $_POST['txtEmail'];
$txtDescription = $_POST['txtDescription'];
$txtDisSubject = $_POST['txtDisSubject'];

if($txtcustomerEmail== null and $txtDescription==null and $txtDisSubject==null ){
    echo '<script type="text/javascript">';
    echo  'alert("Kindly input your registered email and dispute");';
    echo 'window.location.replace("http://localhost/Disputes.html");';
    echo "</script>";
}

//Check if user email is already registered
$sql = "SELECT * FROM end_user WHERE user_email = '$txtcustomerEmail' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if(!is_array($row))
{   

    echo '<script type="text/javascript">';
    echo  'alert("Kindly input the email you registered with");';
    echo 'window.location.replace("http://localhost/Disputes.html");';
    echo "</script>";
}

$sqlget = "SELECT COUNT(customer_id) FROM customer";
$resultget = mysqli_query($con, $sqlget);
$newresult = mysqli_fetch_array($resultget);
$finalresult = $newresult[0];

$sql = "INSERT INTO dispute (ref_num, ref_type, administrator_id, customer_id) VALUES ('$finalresult', '$txtDescription', null, '$txtcustomerEmail')";

$result = mysqli_query($con, $sql);

echo '<script type="text/javascript">';
echo  'alert("Dispute received.");';
echo 'window.location.replace("http://localhost/Disputes.html");';
echo "</script>";


//close db
mysqli_close($con);

?>