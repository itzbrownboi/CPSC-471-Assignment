<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="width=device-wifth, initial-scale=1.0">
        <title> Admin Page</title>
        <link rel ="stylesheet" href="Admin.css">
        <script src="https://kit.fontawesome.com/595311b478.js" crossorigin="anonymous"></script> 
     
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
    $disputeOutput = " SELECT * FROM dispute";



        $result = mysqli_query($con, $siteStatsCustomerSQL);
        $result2 = mysqli_query($con, $siteStatsDisputeSQL);
        $result3 = mysqli_query($con, $addConsultSQL);
        $result4 = mysqli_query($con, $disputeOutput);
        $result5 = mysqli_query($con, $siteDisputesSQL);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);
        $row3 = mysqli_fetch_array($result3);
        $row4 = mysqli_fetch_array($result4);
        $row5 = mysqli_fetch_array($result5);

        

?>

    
    <div class="container">
        <h1 class ="center">
            Air Connect
        </h1>
        <?php
            echo "<div class=Customer>
                <a class=C1>Customers: " .$row[0]."
                </a></div>";
        
            echo"<div class=Disputes>
                <a class=D1>Disputes: " .$row2[0]."
                </a></div>";
        ?>
        <div class="SideBar">
            <a class="main" href="http://localhost/Admin_page.php">DashBoard</a>
            <a href="http://localhost/Admin_page_customers.php">Customer</a>
            <a href="http://localhost/Admin_page_disputes.php">Disputes</a>
            <div class="Logout">
                <a href="http://localhost/SignIn_Admin.html">Log-Out</a> 
            </div>
            <div class="Admin">
                Admin Page
            </div>
        </div>
        
    </div>";
</body>
<script>

</script>

</html>