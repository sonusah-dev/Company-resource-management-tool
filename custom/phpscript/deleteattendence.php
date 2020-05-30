<?php
session_start();
$id = $_GET['id'];
// database connection
include('connection.php');
// delete query 
$sql = "DELETE FROM attendence WHERE id = $id";

if(mysqli_query($conn, $sql)) {
    header('location:../showattendence.php?success=ok');
}
else {
    header('location:../showattendence.php?fail=ok');
}
mysqli_close($conn);
?>