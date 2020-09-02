<?php
session_start();

$certificate_id = $_POST['name'];
$student = $_POST['student_id'];
$course = $_POST['course_id'];
$issue_date = $_POST['date'];
$certificate_type = $_POST['type'];
$rank = $_POST['rank'];

include('connection.php');

$sql = "INSERT INTO certificate(certificate_id, student_id, course_id, issue_date, certificate_type, rank)
        VALUES('$certificate_id', '$student', '$course', '$issue_date', '$certificate_type', '$rank')";

if(mysqli_query($conn, $sql)) {
    header('location:../addcertificate.php?success=ok');
}
else{
    header('location:../addcertificate.php?fail=ok');
}
mysqli_close($conn);

?>