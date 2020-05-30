<?php
session_start();

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

$sql = "INSERT INTO course(course_name, course_slogan, description, course_content, requirement, who_this_course_is_for,
        course_duration, course_category, course_poster, course_fee) VALUES('$name', '$slogan', '$description', '$content',
        '$requirement', '$target', '$duration', '$category', '$poster', '$fee')";

if(mysqli_query($conn, $sql)) {
    header('location:../addcourse.php?success=ok');
}
else {
    header('location:../addcourse.php?fail=ok');
}
mysqli_close($conn);
?>