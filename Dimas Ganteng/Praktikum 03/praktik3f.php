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
        $uang = "10000.50 Rupiah";
        echo "Tipe Data String : $uang<br/>";
        settype ($uang,"double");
        echo "Tipe Data Double : $uang<br/>";
        settype ($uang,"integer");
        echo "Tipe Data integer : $uang<br/>";
    ?>
</body>
</html>