<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtCustomer_ID = $_POST['txtCustomer_ID'];
$txtRefID = NULL;
$RefIDSQL = "SELECT reference_num FROM disputes";
$tempresult = mysqli_query($con, $RefIDSQL);
$tempRow = mysqli_fetch_array($tempresult);
// The RefID should do a random number and if it is already take, it should come up with anew random number. Help me if you can
//If y'all can figure it out let me know



//Display current status of arrays given users username
function current_status() {
$currentRefrencesSQL = "SELECT reference_num, ref_type, customer_id FROM dispute WHERE customer_id == '$txtCustomer_ID ";
$result = mysqli_query($con, $currentRefrencesSQL);
$display = mysqli_fetch_array($result);
  
}
//Insert additonal Dispute if required

//Need if statement from HTML to determine whether this is ran or not.
function insert_dispute() {
$newRefrennceSQL = "INSERT INTO disputes (reference_num, ref_type, administrator_id, customer_id) VALUES ('$txtRefID', '$txtRefType', NULL, '$txtCustomer_ID')";
$result2 = mysqli_query($con, $newRefrennceSQL);
$display2 = mysqli_fetch_array($result2);

echo '<script type="text/javascript">';
echo  'alert("Dispute added");';
echo 'window.location.replace("http://localhost/Customer.html");';
echo "</script>";

}
function cancel_dispute(){
    //Delete Dispute if required

    //Need if statement from HTML to determine whether this is ran or not
    //Need insert from HTML about what refrence_num the customer is deleting
    $delRefrennceSQL = "DELETE FROM disputes WHERE $refIDDelete == refrence_num";
    $result3 = mysqli_query($con, $delRefrennceSQL);
    $display2 = mysqli_fetch_array($result3);

    echo '<script type="text/javascript">';
    echo  'alert("Dispute deleted");';
    echo 'window.location.replace("http://localhost/Customer.html");';
    echo "</script>";
}







//close db
mysqli_close($con);

?>