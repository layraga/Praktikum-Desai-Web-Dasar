<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
        $kalimat = "Trik dahsyat menjadi seorang web master dengan pemrograman PHP";
        $array = explode (" ",$kalimat);
        $kata[1] = $array[0];
        $kata[2] = $array[1];
        $kata[3] = $array[2];
        $kata[4] = $array[3];
        $kata[5] = $array[4];
        $kata[6] = $array[5];
        $kata[7] = $array[6];
        $kata[8] = $array[7];
        $kata[9] = $array[8];
        echo "$kata[1] $kata[5] $kata[6]";
    ?>
</body>
</html>