<?php
session_start();
// database connection
include('connection.php');

$student = $_POST['student'];
$batch = $_POST['batch'];
$id = $_GET['id'];
// update query 
$sql = "UPDATE attendence SET student = '$student', batch_id = '$batch' WHERE id = '$id' ";
if(mysqli_query($conn, $sql)) {
    header('location:../showattendence.php');
}
else{
    $msg = mysqli_error($conn);
    // header('location:../showattendence.php');
}
mysqli_close($conn);
?>