<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat']; 
    $nohp = $_POST['nohp']; 
    $email = $_POST['email']; 
    $tanggal = $_POST['tanggal'];
    $sumbangan = $_POST['sumbangan']; 

    $stmt = $conn->prepare("INSERT INTO anggota (nama, alamat, nohp, email, tanggal, sumbangan) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdi"$nama, $alamat, $nohp, $email, $tanggal, $sumbangan);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
</head>
<body bgcolor="cyan"> 

<h2>Tambah Anggota</h2>
<form method="POST">
    <table>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>No HP:</td>
            <td><input type="text" name="nohp" required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Tanggal:</td>
            <td><input type="date" name="tanggal" required></td>
        </tr>
        <tr>
            <td>Sumbangan:</td>
            <td><input type="number" step="0.01" name="sumbangan" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>