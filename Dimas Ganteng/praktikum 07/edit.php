<?php
include 'koneksi.php';

$Idpeng = $_GET['Idpeng'];

// Mengambil data pengguna berdasarkan idpeng
$sql = "SELECT * FROM pengguna WHERE Idpeng = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $Idpeng); 
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Idpeng = $_POST['Idpeng'];
    $Namapeng = $_POST['Namapeng']; 
    $Alamat = $_POST['Alamat']; 
    $Nohp = $_POST['Nohp']; 
    $Email = $_POST['Email'];
    $Nmuser = $_POST['Nmuser'];
    $Pasw = $_POST['Pasw']; // Jika password diperlukan

    // Update query
    $sql = "UPDATE pengguna SET Idpeng=?, Namapeng=?, Alamat=?, Nohp=?, Email=?, Nmuser=? WHERE Idpeng=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssisi", $Idpeng,$Namapeng, $Alamat, $Nohp, $Email, $Nmuser, $Idpeng); 

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
        <label for="Nama">NAMA:</label>
        <input type="text" name="Nama" id="Nama" value="<?php echo htmlspecialchars($row['Nama']); ?>" required><br>

        <label for="Alamat">Alamat:</label> 
        <input type="text" name="Alamat" id="Alamat" value="<?php echo htmlspecialchars($row['Alamat']); ?>" required><br>

        <label for="Nohp">No HP:</label> 
        <input type="text" name="Nohp" id="Nohp" value="<?php echo htmlspecialchars($row['Nohp']); ?>" required><br>

        <label for="Email">Email:</label> 
        <input type="email" name="Email" id="Email" value="<?php echo htmlspecialchars($row['Email']); ?>" required><br>

        <label for="Nmuser">Nmuser:</label> 
        <input type="text" name="Nmuser" id="Nmuser" value="<?php echo htmlspecialchars($row['Nmuser']); ?>" required><br>

        <label for="Pasw">Password:</label> 
        <input type="password" name="Pasw" id="Pasw" required><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>