<?php
session_start();
$id = $_GET['id'];
// database connection
include('connection.php');
// sql query for delete
$sql = "DELETE FROM section_item WHERE id = $id";
// checking if query ok
if(mysqli_query($conn, $sql)) {
    header('location:../showcontentlist.php?success=ok');
}
else {
    header('location:../showcontentlist.php?fail=ok');
}
mysqli_close($conn);
?>