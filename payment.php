<?php

$con = mysqli_connect('localhost', 'root', 'iamrootuser','471project');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$txtEmail = $_POST['txtEmail'];
$txtcardName = $_POST['txtcardName'];
$txtCardNumber = $_POST['txtCardNumber']; 
$txtmonyear = $_POST['txtmonyear'];
$txtCVV = $_POST['txtCVV'];
$txtCountry = $_POST['txtCountry'];
$txtCity = $_POST['txtCity'];
$txtAddress = $_POST['txtAddress'];
$txtZipCode = $_POST['txtZipCode'];



// database insert SQL code


//Check if user email is already registered
$sql = "SELECT * FROM end_user WHERE user_email = '$txtEmail' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$sql2 = "SELECT * FROM customer WHERE customer_id = '$txtEmail' ";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($result2);

if(!is_array($row))
{ 
    echo '<script type="text/javascript">';
    echo  'alert("Please enter registered email");';
    echo 'window.location.replace("http://localhost/payment.html");';
    echo "</script>";
}
else{
    if(!is_array($row2)){

        $sql2 = "INSERT INTO customer (customer_id, payment_info, card_number, cvv, zip_code,monthyear) VALUES ('$txtEmail','$txtCardName', '$txtCardNumber', '$txtCVV', '$txtZipCode', '$txtmonyear')";
        $result2 = mysqli_query($con, $sql2);
        //Go to Reservation page here
        echo '<script type="text/javascript">';
        echo  'alert("Payment Successful");';
        echo 'window.location.replace("http://localhost/TicketConfirm.html");';
        echo "</script>";
    }
    else{
        echo '<script type="text/javascript">';
        echo  'alert("Payment Successful");';
        echo 'window.location.replace("http://localhost/TicketConfirm.html");';
        echo "</script>";
    }
    
}



//close db
mysqli_close($con);

?>