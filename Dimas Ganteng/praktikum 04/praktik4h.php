<html>
    <head>
      <title>Tentukan diskon berdasarkan harga produk</title>
    </head>
<body>
<?php
    $hargaProduk = 350000;
    $persenDiskon = 0;

if ($hargaProduk > 500000)
{
    $persenDiskon = 50;
} elseif ($hargaProduk > 400000) 
{
    $persenDiskon = 30;
} elseif ($hargaProduk > 300000) 
{
    $persenDiskon = 20;
} elseif ($hargaProduk > 200000) 
{
    $persenDiskon = 10;
}
    $nilaiDiskon = ($persenDiskon / 100) * $hargaProduk;
    echo "Menentukan besaran Diskon<br><br>";
    echo "Dengan asumsi harga sebesar $hargaProduk<br>";
    echo "maka besar diskon adalah $persenDiskon%<br>";
    echo "sehingga nilai diskon adalah $nilaiDiskon";
?>
</body>
</html>

