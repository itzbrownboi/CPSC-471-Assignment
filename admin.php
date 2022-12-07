<!DOCTYPE html>
<html>
  <head>
    <title> Admin Page </title>
  </head>
  
<body>

<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtRefrenceId = $_POST['txtRefrenceId'];
// $txtDisputeInfo = $_POST['txtRefrenceId'];
$txtAdminId = $_POST['txtAdminId'];




$siteStatsCustomerSQL = "SELECT COUNT(customer_id) FROM customer";
$siteStatsDisputeSQL = "SELECT COUNT(ref_num) FROM dispute";
$siteDisputesSQL = "SELECT * FROM dispute";
$addConsultSQL = "INSERT INTO consults (ref_num, administrator_id) VALUES ('$txtRefrenceID','$txtAdminID')";
$customerOutput = " SELECT * FROM customer";



    $result = mysqli_query($con, $siteStatsCustomerSQL);
    $result2 = mysqli_query($con, $siteStatsDisputeSQL);
    $result3 = mysqli_query($con, $addConsultSQL);
    $result4 = mysqli_query($con, $customerOutput);
    $result5 = mysqli_query($con, $siteDisputesSQL);

    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    $row3 = mysqli_fetch_array($result3);
    $row4 = mysqli_fetch_array($result4);

    $row5 = mysqli_fetch_array($result5);

    //echo $row2;
    //echo $row2;
    //echo $row3;
    //echo count($row4);
    foreach($row4[0] as $value4){
        echo $value4;
        echo "\n";
    }
    
    // foreach($row4 as $value2){
    //     echo $value2;
    //     echo "\n";
    // }
    // echo $row2;
    // echo $row3;
    // echo $row4;

    // header('Location:  http://localhost/SearchResult.php?row='.$row.'&row2='.$row2);
?>
</body>

</html>