<?php
session_start();
include('connection.php');

$batch_code = $_POST['code'];
$course = $_POST['course'];
$trainer = $_POST['trainer'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$completed = $_POST['completed'];
$id = $_GET['id'];

$sql = "UPDATE batch set batch_code='$batch_code', course_id='$course', emp_id='$trainer', start_time='$start_time', end_time='$end_time',
        batch_starting_date='$start_date', batch_completion_date='$end_date', is_active='$completed' WHERE id='$id' ";

if(mysqli_query($conn, $sql)) {
    header('location:../showbatch.php');
}
else{
    // header('location:../showbatch.php');
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>