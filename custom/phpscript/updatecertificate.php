<?php
session_start();

$id = $_GET['id'];
$certificate_id = $_POST['name'];
$student = $_POST['student'];
$course = $_POST['course'];
$issue_date = $_POST['date'];
$certificate_type = $_POST['type'];
$rank = $_POST['rank'];

include('connection.php');

$sql = "UPDATE certificate set certificate_id='$certificate_id', student='$student', course_id='$course', issue_date='$issue_date', certificate_type='$certificate_type', rank='$rank' WHERE id='$id'";

if(mysqli_query($conn, $sql)) {
    header('location:../showcertificate.php');
}
else{
    // header('location:../addcertificate.php?fail=ok');
}
mysqli_close($conn);
?>