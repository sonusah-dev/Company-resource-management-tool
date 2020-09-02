<?php
session_start();

$id = $_GET['id'];
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

$sql = "UPDATE employee SET employee_id='$code', first_name='$first', last_name='$last', gender='$gender', mobile='$mobile',
        email='$email', dob='$dob', job_role='$role', job_description='$desc', pan_number='$pan', adhaar_number='$aadhar',
        street='$street', city='$city', pincode='$pin', state='$state' WHERE id='$id' ";

if(mysqli_query($conn, $sql)) {
    header('location:../showemployee.php?success=ok');
}
else {
     header('location:../addemployee.php?fail=ok');
    // echo mysqli_error($conn);
}
mysqli_close($conn);
?>