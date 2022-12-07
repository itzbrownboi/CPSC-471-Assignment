<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtCustomer_ID = $_POST['txtCustomer_ID'];
$txtRefID = rand();
$RefIDSQL = "SELECT reference_num FROM disputes WHERE '$txtRefID' NOT IN reference_num";
$tempresult = mysqli_query($con, $RefIDSQL);
$tempRow = mysqli_fetch_array($tempresult);

while(is_array($tempRow)){
    $txtRefID = rand();
    $RefIDSQL = "SELECT reference_num FROM disputes WHERE '$txtRefID' NOT IN reference_num";
    $tempresult = mysqli_query($con, $RefIDSQL);
    $tempRow = mysqli_fetch_array($tempresult);
}

// The RefID should do a random number and if it is already take, it should come up with anew random number. Help me if you can
//If y'all can figure it out let me know

//Display current status of arrays given users username
$currentRefrencesSQL = "SELECT reference_num, ref_type, customer_id FROM dispute WHERE customer_id == '$txtCustomer_ID ";
$result = mysqli_query($con, $currentRefrencesSQL);
$display = mysqli_fetch_array($result);

//Show Customer details
$cutomer_informationSQL = "SELECT end_user_id, FName, LName, user_email  FROM end_user WHERE customer_id == '$txtCustomer_ID ";
$customer_cardSQL = "SELECT card_number, payment_info, customer_id FROM customer WHERE customer_id == '$txtCustomer_ID ";
$customer_reservationSQL = "SELECT =reservation_num, seat_type, check_in, carry_on, reservation_date, flight_number FROM reservation WHERE customer_id == '$txtCustomer_ID ";

//run above sql
$res1 = mysqli_query($con, $customer_informationSQL);
$res2 = mysqli_query($con, $customer_cardSQL);
$res3 = mysqli_query($con, $customer_reservationSQL);

$entry1 = mysqli_fetch_array($res1);
$entry2 = mysqli_fetch_array($res2);
$entry3 = mysqli_fetch_array($res3);
//Insert additonal Dispute if required

//Need if statement from HTML to determine whether this is ran or not.
$newRefrennceSQL = "INSERT INTO disputes (reference_num, ref_type, administrator_id, customer_id) VALUES ('$txtRefID', '$txtRefType', NULL, '$txtCustomer_ID')";
$result2 = mysqli_query($con, $newRefrennceSQL);
$display2 = mysqli_fetch_array($result2);

//Delete Dispute if required

//Need if statement from HTML to determine whether this is ran or not
//Need insert from HTML about what refrence_num the customer is deleting
$delRefrennceSQL = "DELETE FROM disputes WHERE $refIDDelete == refrence_num";
$result3 = mysqli_query($con, $delRefrennceSQL);
$display2 = mysqli_fetch_array($result3);








//close db
mysqli_close($con);

?>