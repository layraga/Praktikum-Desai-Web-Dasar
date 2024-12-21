<?php
include 'koneksi.php';

$id = $_GET['idpeg'];

$sql = "SELECT * FROM tbpegawai WHERE idpeg = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idpeg = $_POST['idpeg'];
    $namapeg = $_POST['namapeg'];
    $tglagir = $_POST['tglahir'];
    $kelamin = $_POST['kelamin'];
    $gol = $_POST['gol'];
    $gaji = $_POST['gaji'];

    $sql = "UPDATE tbpegawai SET idpeg='$idpeg', namapeg='$namapeg', tglahir='$tglagir', kelamin=$kelamin', gol='$gol', gaji='$gaji' WHERE idpeg=$idpeg";
    if ($conn->query($sql)=== TRUE) {
        header("Location: index.php");
    } else {
        echo "Error Updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>
</head>
<body bgcolor="yellow,byen">
    <h2 style="text-align;">Edit Anggota</h2>
    <form method="POST" style="width: 100%; margin: auto;">
        <table style="width: 10%;">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="idpeg" value="<?php echo htmlspecialchars($row['idpeg']); ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="namapeg" value="<?php echo htmlspecialchars($row['namapeg']); ?>" required></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="date" name="tglahir" value="<?php echo htmlspecialchars($row['tglahir']); ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="kelamin" value="<?php echo htmlspecialchars($row['kelamin']); ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="text" name="gol" value="<?php echo htmlspecialchars($row['gol']); ?>" required></td>
            </tr>
            <tr>
                <td>Sumbangan</td>
                <td><input type="number" step="0.01" name="gaji" value="<?php echo htmlspecialchars($row['gaji']); ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align;">
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
