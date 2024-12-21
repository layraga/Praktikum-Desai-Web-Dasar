<?php
include "koneksi.php";

// Perbaiki query SQL
$sql = "SELECT * FROM tb_anggota";
$result = $conn->query($sql); // Mengambil hasil dari query

if (!$result) {
    die("Query Error: " . $conn->error); // Tambahkan penanganan error
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>
<body>
    <h2>Data Anggota</h2>
    <a href="tambah.php">Tambah Anggota</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
           <th>Nama</th>
           <th>Alamat</th>
           <th>No HP</th>
           <th>Email</th>
           <th>Tanggal</th>
           <th>Sumbangan</th>
           <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?> 
        <tr>
           <td><?php echo htmlspecialchars($row['nama']); ?></td> <!-- Menggunakan htmlspecialchars untuk keamanan -->
           <td><?php echo htmlspecialchars($row['alamat']); ?></td>
           <td><?php echo htmlspecialchars($row['nohp']); ?></td>
           <td><?php echo htmlspecialchars($row['email']); ?></td>
           <td><?php echo date('d/m/Y', strtotime($row['tanggal'])); ?></td>
           <td><?php echo number_format($row['sumbangan'], 0, ',', '.'); ?></td>
           <td>
               <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
               <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
           </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>