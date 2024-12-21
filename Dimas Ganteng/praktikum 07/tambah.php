<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idpeg = $_POST['idpeg']; 
    $namapeg = $_POST['namapeg']; 
    $tglahir = $_POST['tglahir']; 
    $kelamin = $_POST['kelamin']; 
    $gol = $_POST['gol'];
    $gaji = $_POST['gaji']; 

    $stmt = $conn->prepare("INSERT INTO tbpegawai (idpeg, namapeg, tglahir, kelamin, gol, gaji) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssd", $idpeg, $namapeg, $tglahir, $kelamin, $gol, $gaji);

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

<h2>Tambah Data Pegawai</h2>
    <form>
        <table>
            <tr>
                <tr>ID Pegawai :</tr><br>
                <tr><input type="text" id="idpeg" name="idpeg"></tr>
            </tr><br>
            <tr>
                <teble>Nama Pegawai :</teble><br>
                <tr><input type="text" id="namapeg" name="namapeg"></tr>
            </tr><br>
            <tr>
                <tr>Tanggal Lahir :</tr><br>
                <tr><input type="date" id="tglahir" name="tglahir"></tr>
            </tr><br>
            <tr>
                <tr>Jenis Kelamin :</tr><br>
                    <select id="kelamin" name="kelamin">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
            </tr><br>
            <tr>
                <tr>Golongan :</tr><br>
                    <select id="gol" name="gol">
                        <option value="V/A">V/A</option>
                        <option value="V/B">V/B</option>
                        <option value="V/C">V/C</option>
                    </select>
            </tr><br>
            <tr>
                <tr>Gaji :</tr><br>
                <tr><input type="number" step="0.01" name="sumbangan" required></tr>
            </tr>
            <tr>
            <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
        </table>
    </form>
</body>
</html>