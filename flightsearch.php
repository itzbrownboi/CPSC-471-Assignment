<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtDept_Date = $_POST['deparure'];
$txtArriv_Date = $_POST['return'];
$txtDept_airport = $_POST['From'];
$txtArriv_airport = $_POST['To'];
//$trip = $_POST['txttrip'];


$roundtripSQLDept = "SELECT * FROM flights WHERE dept_date_time = '$txtDept_Date' AND dept_airport = '$txtDept_airport' AND arriv_airportcode = '$txtDept_airport'";
$roundtripSQLArriv = "SELECT * FROM flights WHERE dept_date_time = '$txtArriv_Date' AND dept_airport = '$txtArriv_airport'  AND arriv_airport = '$txtDept_airport'";
$oneWaySQL = "SELECT * FROM flights WHERE user_email = '$txtDept_Date' AND dept_airport = '$txtDept_airport' AND arriv_airport = '$txtArriv_airport'";

if(isset($_POST['txtRoundTrip'])){
    $result = mysqli_query($con, $roundtripSQLDept);
    $result2 = mysqli_query($con, $roundtripSQLArriv);
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);

    header('Location:  http://localhost/SearchResult.php?row='.$row.'&row2='.$row2);   
}
else if(isset($_POST['txtOneWay'])){
    $result = mysqli_query($con, $oneWaySQL);
    $row = mysqli_fetch_array($result); 
}
else{
   ; //select round or OneWay
}




if($txtDept_airport == $txtArriv_airport){
    echo '<script type="text/javascript">';
    echo  'alert("Both airports cannot be the same");';
    echo 'window.location.replace("http://localhost/HomePage.php");';
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





// insert in database 
// if($trip){

    

// }

// if(){
//     $result = mysqli_query($con, $oneWaySQL);
//     $row = mysqli_fetch_array($result);

// }



mysqli_close($con);

?>