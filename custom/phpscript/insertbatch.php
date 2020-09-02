<?php
session_start();

$batch_code = $_POST['code'];
$course = $_POST['course'];
$trainer = $_POST['trainer'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$completed = $_POST['completed'];

include('connection.php');

$sql = "INSERT INTO batch (batch_code, start_time, end_time, emp_id, course_id, batch_starting_date,batch_completion_date, is_active)
        VALUES('$batch_code', '$start_time', '$end_time', '$trainer', '$course', '$start_date', '$end_date', '$completed')";

if(mysqli_query($conn, $sql)) {
    header('location:../addbatch.php?success=ok');
}
else {
    header('location:../addbatch.php?fail=ok');
}
mysqli_close($conn);
?>