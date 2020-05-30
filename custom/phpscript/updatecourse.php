<?php
session_start();

$id = $_GET['id'];
$name = $_POST['name'];
$slogan = $_POST['slogan'];
$description = $_POST['desc'];
$content = $_POST['content'];
$requirement = $_POST['req'];
$target = $_POST['target'];
$duration = $_POST['duration'];
$category = $_POST['category'];
$poster = $_POST['poster'];
$fee = $_POST['fee'];

include('connection.php');

$sql = "UPDATE course SET course_name='$name', course_slogan='$slogan', description='$description', course_content='$content', requirement='$requirement',
 who_this_course_is_for='$target', course_duration='$duration', course_category='$category', course_poster='$poster', course_fee='$fee' WHERE id='$id' ";

if(mysqli_query($conn, $sql)) {
    header('location:../showcourse.php');
}
else {
    mysqli_error($conn);
    // header('location:../updatecourse.php');
}
mysqli_close($conn);
?>