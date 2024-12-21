<?php
require_once 'koneksi.php';

$id_pegawai = $_GET["id"];

$query = "DELETE FROM tbpegawai WHERE id_pegawai = '$id_pegawai'";
$result = $conn->query($query);

if ($result) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>