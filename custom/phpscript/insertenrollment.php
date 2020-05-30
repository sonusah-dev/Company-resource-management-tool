<?php
session_start();

$student = $_POST['student'];
$course = $_POST['course'];
$enroll = $_POST['enroll'];
$valid = $_POST['valid'];
$status = $_POST['status'];


include('connection.php');

$sql = "INSERT INTO enrollment(student, course_id, entry_date, valid_upto, is_active) VALUES('$student', '$course', '$enroll', '$valid', '$status')";

if(mysqli_query($conn, $sql)) {
    header('location:../addenrollment.php?success=ok');
}
else {
    header('location:../addenrollment.php?fail=ok');
}
mysqli_close($conn);
?>