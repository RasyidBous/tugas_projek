<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$namadb = 'restoran_db';

$conn = new mysqli($host, $user, $pass, $namadb);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
