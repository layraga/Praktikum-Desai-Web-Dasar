<?php
include "koneksi.php";

// Perbaiki query SQL
$sql = "SELECT * FROM tbpegawai";
$result = $conn->query($sql); // Mengambil hasil dari query

if (!$result) {
    die("Query Error: ". $conn->error); // Tambahkan penanganan error
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>
<body bgcolor="cyan"> 
    <h2>Data Anggota</h2>
    <a href="tambah.php">Tambah Anggota</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
           <th>ID Pegawai</th>
           <th>Nama Pegawai</th>
           <th>Tanggal Lahir</th>
           <th>Jenis Kelamin</th>
           <th>Golongan</th>
           <th>Gaji</th>
           <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?> 
        <tr>
           <td><?php echo htmlspecialchars($row['idpeg']); ?></td> <!-- Menggunakan htmlspecialchars untuk keamanan -->
           <td><?php echo htmlspecialchars($row['namapeg']); ?></td>
           <td><?php echo date('d/m/Y', strtotime($row['tglahir'])); ?></td>
           <td><?php echo htmlspecialchars($row['kelamin']); ?></td>
           <td><?php echo htmlspecialchars($row['gol']); ?></td>
           <td><?php echo number_format($row['gaji'], 0, ',', '.'); ?></td>
           <td>
               <a href="edit.php?idpeg=<?php echo $row['idpeg']; ?>">Edit</a> |
               <a href="hapus.php?idpeg=<?php echo $row['idpeg']; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
           </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>