<?php
    $opsi ="p1";

    if(isset($_GET["pg"])){
    $opsi = $_GET["pg"];
    }

    $Judulpage = "";
    $Konten = "";

    switch($opsi){
        case "p1";
            $Judulpage = "Page 1";
            $Konten = "<h3>Page 1</h3><p>Isi Dari Page dua</p>";
            break;
        case "p2";
        $Judulpage = "Page 2";
        $Konten = "<h3>Page 1</h3><p>Isi Dari Page dua</p>";
            break;
        case "p3";
        $Judulpage = "Page 3";
        $Konten = "<h3>Page 1</h3><p>Isi Dari Page dua</p>";
            break;
        case "p4";
        $Judulpage = "Page 4";
        $Konten = "<h3>Page 1</h3><p>Isi Dari Page dua</p>";
            break;
        default:
        $Judulpage = "Page 1";
        $Konten = "<h3>Page 1</h3><p>Isi Dari Page dua</p>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$Judulpage;?></title>
</head>
<body>
    <a href="Latihan03.php?pg=p1">Page1</a> <a href="Latihan03.php?pg=p2">Page2</a> <a href="Latihan03.php?pg=p3">Page3</a> <a href="Latihan03.php?pg=p4">Page4</a>
    <?php
        echo $Konten;
    ?>
</body>
</html>