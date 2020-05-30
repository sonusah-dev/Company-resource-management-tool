<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

include('connection.php');

if($password == $cpassword) {
    $sql = "INSERT INTO admin(name, email, password) VALUES('$name', '$email', '$password')";
}

if(mysqli_query($conn, $sql)) {
    header('location:../adminlogin.php?success=ok');
}
else {
     header('location:../adminlogin.php?fail=ok');
    // echo mysqli_error($conn);
}
mysqli_close($conn);
?>