<?php
session_start();

$student = $_POST['student'];
$amount = $_POST['amount'];
$paid = $_POST['paid'];
$mode = $_POST['mode'];
$reference = $_POST['reference'];
$status = $_POST['status'];

include('connection.php');

$sql = "UPDATE payment SET student='$student', amount='$amount', amount_paid='$paid', payment_mode='$mode',
        payment_reference_number='$reference', payment_status='$status'";

if(mysqli_query($conn, $sql)) {
    header('location:../showpayment.php');
}
else {
    echo mysqli_error($conn);
    // header('location:../addpayment.php?fail=ok');
}
mysqli_close($conn);
?>