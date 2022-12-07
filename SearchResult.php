<!DOCTYPE html>
<html>
    <head>
        <a class="navbar-brand" href="http://localhost/Home.html">Air Connect</a>
      </head>
<body>

<?php

    $con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $txtDept_Date = $_POST['txtDept_Date'];
    $txtArriv_Date = $_POST['txtArriv_Date'];
    $txtDept_airport = $_POST['txtDept_airport'];
    $txtArriv_airport = $_POST['txtArriv_airport'];
    $trip = $_POST['txttrip'];
    
    if(isset($_POST['Roundtrip'])){
        ;
    }
    else if(isset($_POST['OneWay'])){
        ;
    }
    else{
       ; //select round or OneWay
    }
    
    
    
    
    if($txtDept_airport == $txtArriv_airport){
        echo '<script type="text/javascript">';
        echo  'alert("Both airports cannot be the same");';
        echo 'window.location.replace("http://localhost/Home.html");';
        echo "</script>";
    }
    
    //Departure parsing
    if($txtDept_airport == "Calgary"){
        $txtDept_airport = "YYC";
    }
    if($txtDept_airport == "Vancouver"){
        $txtDept_airport = "YVR";
    }
    if($txtDept_airport == "Toronto"){
        $txtDept_airport = "YYZ";
    }
    if($txtDept_airport == "Montreal"){
        $txtDept_airport = "YUL";
    }
    if($txtDept_airport == "Ottawa"){
        $txtDept_airport = "YOW";
    }
    if($txtDept_airport == "Halifax"){
        $txtDept_airport = "YHZ";
    }
    if($txtDept_airport == "Edmonton"){
        $txtDept_airport = "YEG";
    }
    //Arrival parsing
    if($txtArriv_airport == "Calgary"){
        $txtArriv_airport = "YYC";
    }
    if($txtArriv_airport == "Vancouver"){
        $txtArriv_airport = "YVR";
    }
    if($txtArriv_airport == "Toronto"){
        $txtArriv_airport = "YYZ";
    }
    if($txtArriv_airport == "Montreal"){
        $txtArriv_airport = "YUL";
    }
    if($txtArriv_airport == "Ottawa"){
        $txtArriv_airport = "YOW";
    }
    if($txtArriv_airport == "Halifax"){
        $txtArriv_airport = "YHZ";
    }
    if($txtArriv_airport == "Edmonton"){
        $txtArriv_airport = "YEG";
    }
    
    $roundtripSQLDept = "SELECT * FROM flights WHERE dept_date_time = '$txtDept_Date' AND dept_airport = '$txtDept_airport' AND arriv_airportcode = '$txtDept_airport'";
    $roundtripSQLArriv = "SELECT * FROM flights WHERE dept_date_time = '$txtArriv_Date' AND dept_airport = '$txtArriv_airport'  AND arriv_airport = '$txtDept_airport'";
    $oneWaySQL = "SELECT * FROM flights WHERE user_email = '$txtDept_Date' AND dept_airport = '$txtDept_airport' AND arriv_airport = '$txtArriv_airport'";
    
    
    
    // insert in database 
    // if($trip){
        $result = mysqli_query($con, $roundtripSQLDept);
        $result2 = mysqli_query($con, $roundtripSQLArriv);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);
    
        header('Location:  http://localhost/SearchResult.php?row='.$row.'&row2='.$row2);
    
    mysqli_close($con);
    
    
?>

    
    <div class="container">
        <h1 class ="center">
            Air Connect
        </h1>
        <?php
        
        echo "<div class= dispute>
            <table style=width:80%>
            <tr>
            <th>Dispute Number</th>
            <th>Dispute type</th>
            <th>Customer ID</th>
            </tr>";

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  
                    echo"<tr>
                    <td> " . $row["ref_num"]. " </td>
                    <td> ". $row["ref_type"]. " </td>
                    <td> ". $row["customer_id"]. " </td>
                    </tr>";

                }
            }
            echo" </table></div>";        
        ?>
        <div class="SideBar">
            <a class="main" href="#DashBoard">DashBoard</a>
            <a href="http://localhost/Admin_page_customers.php">Customer</a>
            <a href="http://localhost/Admin_page_disputes.php" color = "purple">Disputes</a>
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