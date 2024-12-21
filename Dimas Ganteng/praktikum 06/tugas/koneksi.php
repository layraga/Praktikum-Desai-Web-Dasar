<?php
$servername = "localhost"; // atau "127.0.0.1"
$username = "root"; // username database Anda
$password = ""; // password database Anda, biasanya kosong untuk XAMPP
$dbname = "dbusaha"; // nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>