<?php
session_start();

$name = $_POST['section'];
$course = $_POST['course'];
$description = $_POST['desc'];
$sequence = $_POST['sequence'];


include('connection.php');

$sql = "INSERT INTO section(section_name, course_id, description, sequence) VALUES('$name', '$course', '$description', '$sequence')";

if(mysqli_query($conn, $sql)) {
    header('location:../addcontent.php?success=ok');
}
else {
    header('location:../addcontent.php?fail=ok');
}
mysqli_close($conn);
?>