<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtRefrenceId = $_POST['txtRefrenceId'];
// $txtDisputeInfo = $_POST['txtRefrenceId'];
$txtAdminId = $_POST['txtAdminId'];
$txtUserID = $_SESSION['userID'];



$customerReservationSQL = "SELECT * FROM reservation WHERE customer_ID = '$txtUserID'";
// $customerReservationsSQL = "SELECT COUNT(ref_num) FROM dispute";



    $result = mysqli_query($con, $customerReservationSQL);
    //$row = mysqli_fetch_array($result);
    

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="width=device-wifth, initial-scale=1.0">
        <title> Customer Page</title>
        <link rel ="stylesheet" href="Customer.css">
        <script src="https://kit.fontawesome.com/595311b478.js" crossorigin="anonymous"></script> 
     
      </head>
<style type="text/css">
  .mytable{
    border: 1px solid black;
    position: absolute;
    top: 200px;
    left: 300px;
  }
 </style>
<body>
    <div class="container">
        <a class="navbar-brand" href="http://localhost/HomePage.html">Air Connect</a>
        <div class="form-box">
            <h2 id="title">
                Profile
            </h2>
            <?php
                echo" <h3>
                User_Email: ".$_SESSION["userID"]."
                </h3>
                <h4>
                Bookings
                </h4>
                <table style=width:80%>
                    <tr>
                    <th>Reservation ID</th>
                    <th>Flight Number</th>
                    <th>Route Name</th>
                    <th>Reservation Date</th>
                    <th>Arrival Date</th>
                    </tr>";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        
                            echo"<tr>
                            <td> " . $row["reservation_number"]. " </td>
                            <td> ". $row["flight_number"]. " </td>
                            <td> ". $row["route_name"]. " </td>
                            <td> ". $row["reservation_date"]. " </td>
                            </tr>";
    
                        }
                    }
                echo "</table>";
            ?>
            </div>
        <div class="SideBar">
            <a class="main" href="http://localhost/Customer.php">Profile</a>
            <a href="http://localhost/privacy.php">Privacy</a>
            <a href="http://localhost/Disputes.php">Disputes</a>
            <div class="Logout">
                <?php session_abort();?>
                <a href="http://localhost/User_SignIn.html">Log-Out</a>
            </div>
            <div class="User">
                Customer Account 
            </div>
          
                    
            </form>
        </div>
        
    </div>
</body>

<?php

?>

</html>
