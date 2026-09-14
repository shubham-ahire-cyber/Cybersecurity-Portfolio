<?php
$host = 'localhost';
$user = 'student_user';
$pass = 'student123';
$dbname = 'student_db';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
