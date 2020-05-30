<?php
session_start();
$id = $_GET['id'];
// database connection
include('connection.php');
// sql query for delete
$sql = "DELETE FROM payment WHERE id = $id";
// checking if query ok
if(mysqli_query($conn, $sql)) {
    header('location:../showpayment.php?success=ok');
}
else {
    header('location:../showpayment.php?fail=ok');
}
mysqli_close($conn);
?>