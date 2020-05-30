<?php
session_start();

$id = $_GET['id'];
$name = $_POST['section'];
$course = $_POST['course'];
$description = $_POST['desc'];
$sequence = $_POST['sequence'];


include('connection.php');

$sql = "UPDATE section set section_name='$name', course_id='$course', description='$description', sequence='$sequence' WHERE id='$id' ";

if(mysqli_query($conn, $sql)) {
    header('location:../showcontent.php');
}
else {
    // header('location:../addcontent.php?fail=ok');
}
mysqli_close($conn);
?>