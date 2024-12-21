<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Tipe</title>
</head>
<body>
    <?php
        echo "Konversi Tipe Data <br>";
        $a = 300.4;
        echo $a; echo "<br>";
        echo "Tipe Double : ". (double) ($a), "<br>";
        echo "Tipe Integer : ". (integer) ($a), "<br>";
        echo "Tipe String : ". (string) ($a);
    ?>
</body>
</html>