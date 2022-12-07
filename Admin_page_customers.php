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


    $siteCustomerSQL = "SELECT * FROM customer";
    
    $result5 = mysqli_query($con, $siteCustomerSQL);

        

?>

    
<div class="container">
        <h1 class ="center">
            Air Connect
        </h1>
        <?php
        
            echo "<div class= dispute>
                <table style=width:80%>
                <tr>
                <th>Customer ID</th>
                <th>Payment Info</th>
                <th>Zip Code</th>
                </tr>";
                if ($result5->num_rows > 0) {
                    // output data of each row
                    while($row5 = $result5->fetch_assoc()) {
                    
                        echo"<tr>
                        <td> " . $row5["customer_id"]. " </td>
                        <td> ". $row5["payment_info"]. " </td>
                        <td> ". $row5["zip_code"]. " </td>
                        </tr>";

                    }
                }
            echo "</table></div>";
            
        ?>
        <div class="SideBar">
            <a class="main" href="http://localhost/Admin_page.php">DashBoard</a>
            <a href="http://localhost/Admin_page_customers.php">Customer</a>
            <a href="http://localhost/Admin_page_disputes.php">Disputes</a>
            <div class="Logout">
                <a href="http://127.0.0.1:5501/SignIn_Admin.html">Log-Out</a>
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