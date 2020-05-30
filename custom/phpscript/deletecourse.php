<?php
session_start();
$id = $_GET['id'];
// database connection
include('connection.php');
// sql query for delete
$sql = "DELETE FROM course WHERE id = $id";
// checking if query ok
if(mysqli_query($conn, $sql)) {
    header('location:../showcourse.php?success=ok');
}
else {
    header('location:../showcourse.php?fail=ok');
}
mysqli_close($conn);
?>