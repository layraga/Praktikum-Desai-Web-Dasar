<html>
    <head>
      <title>Penjualan Barang</title>
    </head>
    <body>
    <?php
    $nama_barang = "Laptop";
    $harga_satuan = 5500000;
    $jumlah_jual = 3;
    $total_harga = $harga_satuan * $jumlah_jual;
    $diskon = 0.1 * $total_harga;
    $jumlah_bayar = $total_harga - $diskon;
    echo "<h2>Penjualan Barang</h2><hr>";
    echo "Nama Barang = $nama_barang<br>";
    echo "Harga Satuan = " . number_format($harga_satuan, 0, ',', '.') . "<br>";
    echo "Jumlah jual = $jumlah_jual<hr>";
    echo "Total Harga = " . number_format($total_harga, 0, ',', '.') . "<br>";
    echo "Diskon 10% = " . number_format($diskon, 0, ',', '.') . "<hr>";
    echo "<strong>Jumlah Bayar = " . number_format($jumlah_bayar, 0, ',', '.') . "</strong><hr>";
    echo "<i><b>Terima kasih, semoga kembali lagi ke toko kami...</i>";
    ?>
    </body>
</html>