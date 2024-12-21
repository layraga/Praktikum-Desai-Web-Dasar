<!DOCTYPE html>
<html>
<head>
    <title>Contoh Looping Bertingkat</title>
</head>
<body>
    <h1>Contoh Looping Bertingkat</h1>
    <?php
    $output = "";
    for ($baris = 1; $baris <= 3; $baris++) 
    {
        for ($kolom = 1; $kolom <= 2; $kolom++) 
        {
            $output .= "Baris $baris, Kolom $kolom<br>";
        }
    }
    echo $output;
    ?>
</body>
</html>