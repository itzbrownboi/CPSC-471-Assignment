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
$siteStatsDisputeSQL = "SELECT COUNT(dispute_number) FROM dispute";
$addConsultSQL = "INSERT INTO consults (ref_num, administrator_id) VALUES ('$txtRefrenceID','$txtAdminID')";
$disputeOutput = " SELECT * FROM dispute";


// insert in database 
// if($trip){
    $result = mysqli_query($con, $siteStatsCustomerSQL);
    $result2 = mysqli_query($con, $siteStatsDisputeSQL);
    $result3 = mysqli_query($con, $addConsultSQL);
    $result4 = mysqli_query($con, $disputeOutput);
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    $row3 = mysqli_fetch_array($result3);
    $row4 = mysqli_fetch_array($result4);

    foreach($row as $value){
        echo $value;
        echo "\n";
    }
    <html>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="">Home</a>
        <a class="nav-link" href="">Profile</a>
      </li>
    </ul>
  </div>
  </html>
    foreach($row4 as $value4){
        echo $value4;
        echo "\n";
    }
    foreach($row2 as $value2){
        echo $value2;
        echo "\n";
    }
    echo $row2;
    echo $row3;
    echo $row4;

    // header('Location:  http://localhost/SearchResult.php?row='.$row.'&row2='.$row2);
    

// }

// if(){
//     $result = mysqli_query($con, $oneWaySQL);
//     $row = mysqli_fetch_array($result);

// }



mysqli_close($con);

?>