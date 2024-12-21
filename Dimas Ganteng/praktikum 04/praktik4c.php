<html>
    <head>
      <title>Pernyataan SWITCH</title>
    </head>
      <body>
    <?php
    $jurusan = "SI";
        switch ($jurusan)
{
        case "TE";
            echo "$jurusan Teknik Elektro"; break;
        case "MI":
            echo "$jurusan Manajemen Informatika"; break;
        case "SI":
            echo "$jurusan Sistem Informasi"; break;
        case "TI":
            echo "$jurusan Teknik Informatika"; break;
    default:
            echo "$jurusan tidak terdaftar";
 }
?>
-</body>
</html>