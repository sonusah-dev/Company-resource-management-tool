<?php
session_start();

$id = $_GET['id'];
$first = $_POST['first'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$join = $_POST['join'];
$expiry = $_POST['expiry'];
$institute = $_POST['institute'];
$class = $_POST['addmission_year'];
$department = $_POST['department'];
$registration = $_POST['registration'];
$street = $_POST['street'];
$city = $_POST['city'];
$pin = $_POST['pincode'];
$state = $_POST['state'];


include('connection.php');

$sql = "UPDATE student SET first_name='$first', last_name='$last', gender='$gender', mobile='$mobile', email='$email', dob='$dob', joining_date='$join',
        expiry_date='$expiry', institute='$institute', joining_year='$class', department='$department', registration='$registration', street='$street',
         city='$city', pincode='$pin', state='$state' WHERE id='$id' ";

if(mysqli_query($conn, $sql)) {
    header('location:../showstudent.php');
}
else {
    // header('location:../addstudent.php?fail=ok');
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>