<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_anggota WHERE id = $id";

   if ($conn->query ($sql) === TRUE) {
      header ("Locotion: index.php");
   }   
   else {
      echo "Error deleting record: " . $conn->error;
   }
?>   