<?php
$host = 'localhost';
$user = 'root';
$pass = 'fr4n5_3y5q7';
$db   = 'kampus';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>