<?php
session_start();
// assign form data to our local variable
$email = $_POST['email']; 
$password = $_POST['password']; 
// $remember = $_POST['remember']; 

// connect to mysql database
include('connection.php');

// Query for checking valid user
$sql = "SELECT * FROM admin WHERE email='$email' && password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email']; 
    
    header('location:../admindashboard.php');
    mysqli_close($conn);
}
else{
    // echo mysqli_error($conn);
    // echo("something is missing please fix it");
    header('location:../../index.html');
}
