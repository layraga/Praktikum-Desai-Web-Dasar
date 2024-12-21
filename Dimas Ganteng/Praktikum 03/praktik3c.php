<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP dengan Array</title>
</head>
<body>
    <?php
        //penulisan array dapat dibuat seperti berikut
        $buah[1] ="Apel";
        $buah[2] = "Jeruk";
        $buah[3] = "Anggur";
        echo $buah[1];
        echo "<br><br>";
        //penulisan array yang lain
        $hari = array ("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        echo $hari[3]; echo "<br><br>";
        //penulisan array yang lain lagi
        $bulan = array ("1"=>"Januari",
        "2"=>"Februari",
        "3"=>"Maret",
        "4"=>"April",
        "5"=>"Mei",
        "6"=>"Juni",
        "7"=>"Juli",
        "8"=>"Agustus",
        "9"=>"September",
        "10"=>"Oktober",
        "11"=>"November",
        "12"=>"Desember");
        echo $bulan[3];
    ?>
</body>
</html>