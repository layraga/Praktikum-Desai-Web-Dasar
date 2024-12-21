<!DOCTYPE html>
<html>
    <head>
      <title>Perulangan dengan While dan IF ELSE</title>
    </head>
<body>
    <h5>Penerapan perulangan WHILE dan IF ELSE</h5>
    <?php
    $i = 1;
    while ($i <= 12) 
    {
        if ($i % 2 == 0) {
            echo "$i adalah bilangan genap<br>";
        } else {
            echo "$i adalah bilangan ganjil<br>";
        }
        $i++;
    }
    ?>
</body>
</html>


