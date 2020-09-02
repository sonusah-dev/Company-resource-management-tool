<?php
session_start();

$first = $_POST['first'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$join = $_POST['join'];
$expiry = $_POST['expiry'];
$institute = $_POST['institute'];
$addmission_year = $_POST['addmission_year'];
$department = $_POST['department'];
$registration = $_POST['registration'];
$street = $_POST['street'];
$city = $_POST['city'];
$pin = $_POST['pincode'];
$state = $_POST['state'];


include('connection.php');

$sql = "INSERT INTO student(first_name, last_name, gender, mobile, email, dob, joining_date, expiry_date,
        institute, join_year, department, registration, street, city, pincode, state) 
        VALUES('$first', '$last', '$gender', '$mobile', '$email', '$dob', '$join', '$expiry', '$institute', '$addmission_year', '$department',
        '$registration', '$street', '$city', '$pin', '$state')";

if(mysqli_query($conn, $sql)) {
    header('location:../addstudent.php?success=ok');
}
else {
    header('location:../addstudent.php?fail=ok');
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>