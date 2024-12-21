<html>
    <head>
        <title>Penerapan Operator</title>
    </head>
    <body>
    <?php
    $namamhs="Dumkis Julmensir Lay Raga";
    $prodi="Sistem Informasi (SI)";
    $tugas=90;
    $uts=95;
    $uas=85;
    $nilaiakhir=(0.4*$tugas) + (0.25*$uts) + (0.35*$uas);
    $rata=($tugas+$uts+$uas)/3;
    echo "<h2>Menampilkan NIlai dan Rata-rata</h2>";
    echo "Nama Mahasiswa : $namamhs<br>";
    echo "Prodi : $prodi<br>";
    echo "Tugas = $tugas<br>";
    echo "UTS = $uts<br>";
    echo "UAS = $uas<hr>";
    echo "Nilai Akhir = $nilaiakhir<br>";
    echo "Rata Rata Nilai = $rata<hr>";
    ?>
    </body>
</html>    

