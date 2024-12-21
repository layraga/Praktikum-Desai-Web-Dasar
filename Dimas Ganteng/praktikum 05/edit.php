<?php
require_once 'koneksi.php';

$id_pegawai = $_GET["id"];

$query = "SELECT * FROM tbpegawai WHERE id_pegawai = '$id_pegawai'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $nama_pegawai = $row["nama_pegawai"];
        $alamat_pegawai = $row["alamat_pegawai"];
    }
}

if (isset($_POST["submit"])) {
    $nama_pegawai = $_POST["nama_pegawai"];
    $alamat_pegawai = $_POST["alamat_pegawai"];

    $query = "UPDATE tbpegawai SET nama_pegawai = '$nama_pegawai', alamat_pegawai = '$alamat_pegawai' WHERE id_pegawai = '$id_pegawai'";
    $result = $conn->query($query);

    if ($result) {
        echo "Data berhasil diupdate!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>