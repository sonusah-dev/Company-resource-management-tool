<?php
session_start();

$student = $_POST['student'];
$batch = $_POST['batch'];

include('connection.php');

$sql = "INSERT INTO attendence (student_id, batch_id) VALUES ('$student', '$batch')";

if(mysqli_query($conn,$sql)) {
    header("location:../addattendence.php?success=ok");
}
else {
     header("location:../addattendence.php?fail=ok");
    // echo mysqli_error($conn);
}
mysqli_close($conn);
?>