<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'mysql;';
$db_name = 'gradlic_system';

// Connecting database
$conn = mysqli_connect($db_host, $db_username, $db_password , $db_name);

// Check connection
if(!$conn) {
    die('MySql database connection failed');
}

?>