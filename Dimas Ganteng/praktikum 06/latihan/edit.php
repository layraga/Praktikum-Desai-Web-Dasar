<?php
include 'koneksi.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM tb_anggota WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); 
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat']; 
    $nohp = $_POST['nohp']; 
    $email = $_POST['email']; 
    $tanggal = $_POST['tanggal'];
    $sumbangan = $_POST['sumbangan'];

    $sql = "UPDATE tb_anggota SET nama=?, alamat=?, nohp=?, email=?, tanggal=?, sumbangan=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssdii", $nama, $alamat, $nohp, $email, $tanggal, $sumbangan, $id); 

    if ($stmt->execute()) {
        header("Location: index.php");
        exit(); // Pastikan untuk keluar setelah redirect
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Edit Anggota</title>
    </head>
    <body bgcolor="cyan"> 
    <h2>Edit Anggota</h2>
    <form method="POST">
        <table>
       <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo htmlspecialchars($row['alamat']); ?>" required></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="nohp" value="<?php echo htmlspecialchars($row['nohp']); ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="<?php echo htmlspecialchars($row['tanggal']); ?>" required></td>
            </tr>
            <tr>
                <td>Sumbangan</td>
                <td><input type="number" step="0.01" name="sumbangan" value="<?php echo htmlspecialchars($row['sumbangan']); ?>" required></td>
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