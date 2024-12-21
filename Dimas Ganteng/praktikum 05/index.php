<?php
require_once 'koneksi.php';

$query = "SELECT * FROM tbpegawai";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_pegawai"] . "</td>";
        echo "<td>" . $row["nama_pegawai"] . "</td>";
        echo "<td>" . $row["alamat_pegawai"] . "</td>";
        echo "<td><a href='edit.php?id=" . $row["id_pegawai"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id_pegawai"] . "'>Hapus</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>