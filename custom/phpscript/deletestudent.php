<?php
session_start();
$id = $_GET['id'];
// database connection
include('connection.php');
// sql query for delete
$sql = "DELETE FROM student WHERE id = $id";
// checking if query ok
if(mysqli_query($conn, $sql)) {
    header('location:../showstudent.php?success=ok');
}
else {
    header('location:../showstudent.php?fail=ok');
}
mysqli_close($conn);
?>