<?php
// Подключение к БД
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$db = "Test";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

