<?php
session_start();

$code = $_POST['code'];
$first = $_POST['first'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$role = $_POST['role'];
$desc = $_POST['desc'];
$pan = $_POST['pan'];
$aadhar = $_POST['aadhar'];
$street = $_POST['street'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$state = $_POST['state'];


include('connection.php');

$sql = "INSERT INTO employee(employee_id, first_name, last_name, gender, mobile, email, dob, job_role,
        job_description, pan_number, adhaar_number, street, city, pincode, state) 
        VALUES('$code', '$first', '$last', '$gender', '$mobile', '$email', $dob, '$role', '$desc',  '$pan',
        '$aadhar', '$street', '$city', '$pin', '$state')";

if(mysqli_query($conn, $sql)) {
    header('location:../addemployee.php?success=ok');
}
else {
    // header('location:../addemployee.php?fail=ok');
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>