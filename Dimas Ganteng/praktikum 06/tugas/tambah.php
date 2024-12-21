<?php
require_once 'koneksi.php';

if (isset($_POST["submit"])) {
    $nama_pegawai = $_POST["nama_pegawai"];
    $alamat_pegawai = $_POST["alamat_pegawai"];

    $query = "INSERT INTO tbpegawai (nama_pegawai, alamat_pegawai) VALUES ('$nama_pegawai', '$alamat_pegawai')";
    $result = $conn->query($query);

    if ($result) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>