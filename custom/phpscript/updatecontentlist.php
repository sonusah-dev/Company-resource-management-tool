<?php
session_start();

$id = $_GET['id'];
$name = $_POST['name'];
$type = $_POST['item_type'];
$sequence = $_POST['sequence'];
$total = $_POST['total'];
$description = $_POST['desc'];


include('connection.php');

$sql = "UPDATE section_item set section_id='$name', item_type='$type', sequence='$sequence', total='$total', description='$description' WHERE id='$id'";

if(mysqli_query($conn, $sql)) {
    header('location:../showcontentlist.php');
}
else {
    echo mysqli_error($conn);
    // header('location:../showcontentlist.php');
}
mysqli_close($conn);
?>