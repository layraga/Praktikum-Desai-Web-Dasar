<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP dengan ARRAY</title>
</head>
<body>
    <?php
        //penulisan array dapat dibuat seperti berikut
        $nama[] = "Dimas";
        $nama[] = "Edwar";
        $nama[] = "Sela";
        echo "Tampilan nama mahasiswa dengan array<br>";
        echo $nama[1]; echo ", ".$nama[2]; echo ", ".$nama[0];
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "Jumlah Elemen Array = ". $jum_array;
        echo "<br>";
        //pendefinisian array dapat juga seperti berikut ini
        $kampus['sekolah']="UNRIYO";
        $kampus['nama_kampus']="Program Studi Sistem Informasi";
        echo "Kampusku adalah $kampus[sekolah] $kampus[nama_kampus]";
        
    ?>
</body>
</html>
