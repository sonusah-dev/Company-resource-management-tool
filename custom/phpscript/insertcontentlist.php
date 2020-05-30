<?php
session_start();

$name = $_POST['name'];
$type = $_POST['item_type'];
$sequence = $_POST['sequence'];
$total = $_POST['total'];
$description = $_POST['desc'];


include('connection.php');

$sql = "INSERT INTO section_item(section_id, item_type, sequence, total, description)
        VALUES('$name', '$type', '$sequence', '$total', '$description')";

if(mysqli_query($conn, $sql)) {
    header('location:../addcontentlist.php?success=ok');
}
else {
    // echo mysqli_error($conn);
    header('location:../addcontentlist.php?fail=ok');
}
mysqli_close($conn);
?>