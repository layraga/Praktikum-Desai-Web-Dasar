<?php
include "koneksi.php";

// Perbaiki query SQL
$sql = "SELECT * FROM pengguna";
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
           <th>Id Penguna </th>
           <th>Nama Penguna</th>
           <th>Alamat</th>
           <th>No HP</th>
           <th>Email</th>
           <th>Nama User</th>
           <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?> 
        <tr>
           <td><?php echo htmlspecialchars($row['Idpeng']); ?></td>
           <td><?php echo htmlspecialchars($row['Namapeng']); ?></td>
           <td><?php echo htmlspecialchars($row['Alamat']); ?></td>
           <td><?php echo htmlspecialchars($row['Nohp']); ?></td>
           <td><?php echo htmlspecialchars($row['Email']); ?></td>
           <td><?php echo htmlspecialchars($row['Nmuser']); ?></td>
          
           <td>
               <a href="edit.php?id=<?php echo $row['Idpeng']; ?>">Edit</a> |
               <a href="hapus.php?id=<?php echo $row['Idpeng']; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
           </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>