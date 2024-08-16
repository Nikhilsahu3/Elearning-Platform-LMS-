<?php
$host = "localhost";
$user = "root";
$passwd = "";
$db_name = "elearningproject";


$conn = new mysqli($host, $user, $passwd, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>