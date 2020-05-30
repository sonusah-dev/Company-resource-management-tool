<?php
session_start();

$student = $_POST['student'];
$amount = $_POST['amount'];
$paid = $_POST['paid'];
$mode = $_POST['mode'];
$reference = $_POST['reference'];
$status = $_POST['status'];

include('connection.php');

$sql = "INSERT INTO payment(student, amount, amount_paid, payment_mode, payment_reference_number, payment_status)
        VALUES('$student', '$amount', '$paid', '$mode', '$reference', '$status')";

if(mysqli_query($conn, $sql)) {
    header('location:../addpayment.php?success=ok');
}
else {
    echo mysqli_error($conn);
    // header('location:../addpayment.php?fail=ok');
}
mysqli_close($conn);
?>