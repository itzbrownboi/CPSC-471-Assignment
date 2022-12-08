<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <a class="navbar-brand" href="http://localhost/HomePage.php">Air Connect</a>
        <link rel="stylesheet" href=" ">
      </head>
<body>

<?php

    $con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
        
$txtDept_Date = $_POST['departure'];
$txtArriv_Date = $_POST['return'];
$txtDept_airport = $_POST['From'];
$txtArriv_airport = $_POST['To'];




 
    if($txtDept_airport == $txtArriv_airport){
        echo '<script type="text/javascript">';
        echo  'alert("Both airports cannot be the same");';
        echo 'window.location.replace("http://localhost/HomePage.php");';
        echo "</script>";
    }
    
    // //Departure parsing
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
    


    $roundtripSQLDept = "SELECT * FROM flights WHERE dept_date_time = '$txtDept_Date' AND dept_airportcode = '$txtDept_airport' AND arriv_airportcode = '$txtArriv_airport'";
    $roundtripSQLArriv = "SELECT * FROM flights WHERE dept_date_time = '$txtArriv_Date' AND dept_airportcode = '$txtArriv_airport'  AND arriv_airportcode = '$txtDept_airport'";
    //$oneWaySQL = "SELECT * FROM flights WHERE user_email = '$txtDept_Date' AND dept_airport = '$txtDept_airport' AND arriv_airport = '$txtArriv_airport'";

    
    $result = mysqli_query($con, $roundtripSQLDept);
    $result2 = mysqli_query($con, $roundtripSQLArriv);
    //$row = mysqli_fetch_array($result);
    //echo "$row";

    // $roundtripSQLDept = "SELECT * FROM flights WHERE dept_date_time = '$txtDept_Date' AND dept_airport = '$txtDept_airport' AND arriv_airportcode = '$txtArriv_airport'";
    // $roundtripSQLArriv = "SELECT * FROM flights WHERE dept_date_time = '$txtArriv_Date' AND dept_airport = '$txtArriv_airport'  AND arriv_airport = '$txtDept_airport'";
    //$oneWaySQL

?>


    <div class="container">
        <h1 class ="center">
            Air Connect
        </h1>
        <?php
        
        echo "<div class= dispute>
            <table style=width:80%>
            <tr>
            <th>Flight Number</th>
            <th>Departure Date</th>
            <th>Arrival Date</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Airline Name</th>
            <th>Departure Airport</th>
            <th>Arrival Airport</th>
            <th>EcoSeatCost</th>

            </tr>";

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
                    echo"<tr>
                    <td> " . $row["flight_number"]. " </td>
                    <td> ". $row["dept_date_time"]. " </td>
                    <td> ". $row["arriv_date_time"]. " </td>
                    <td> ". $row["dept_time"]. " </td>
                    <td> ". $row["arriv_time"]. " </td>
                    <td> ". $row["airline_name"]. " </td>
                    <td> ". $row["dept_airportcode"]. " </td>
                    <td> ". $row["arriv_airportcode"]. " </td>
                    <td> ". $row["EcoSeatCost"]. " </td>
                    <td> <button class =btn btn-dark fw-bold btn-md inp-width type=submit name=selectBtn>Select</button> 
                    
                    
                    </tr>";
                }
            }

            if ($result2->num_rows > 0) {
                // output data of each row
                while($row2 = $result2->fetch_assoc()) {
                
                    echo"<tr>
                    <form method=post action = payment.php>
                    
                    <td> " . $row2["flight_number"]. " </td>
                    <td> ". $row2["dept_date_time"]. " </td>
                    <td> ". $row2["arriv_date_time"]. " </td>
                    <td> ". $row2["dept_time"]. " </td>
                    <td> ". $row2["arriv_time"]. " </td>
                    <td> ". $row2["airline_name"]. " </td>
                    <td> ". $row2["dept_airportcode"]. " </td>
                    <td> ". $row2["arriv_airportcode"]. " </td>
                    <td> ". $row2["EcoSeatCost"]. " </td>
                    <td> <button onclick =signUp() class =btn btn-dark fw-bold btn-md inp-width type=submit name=selectBtn>Select</button> 
                    
                    </form>
                    </tr>";
                }
            }
            echo" </table></div>";        
        ?>
    </div>
</body>
<script>

</script>

</html>