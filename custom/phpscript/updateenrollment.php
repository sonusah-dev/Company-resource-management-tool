<?php
session_start();

$id = $_GET['id'];
$student = $_POST['student'];
$course = $_POST['course'];
$enroll = $_POST['enroll'];
$valid = $_POST['valid'];
$status = $_POST['status'];


include('connection.php');

$sql = "UPDATE enrollment SET student='$student', course_id='$course', entry_date='$enroll', valid_upto='$valid', is_active='$status' WHERE id='$id' ";

if(mysqli_query($conn, $sql)) {
    header('location:../showenrollment.php');
}
else {
    mysqli_error($sql);
    // header('location:../addenrollment.php?fail=ok');
}
mysqli_close($conn);
?>