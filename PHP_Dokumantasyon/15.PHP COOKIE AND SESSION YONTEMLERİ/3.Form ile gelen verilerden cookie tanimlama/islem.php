<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];

    setcookie("ad", $ad, time() + 3600);
    setcookie("soyad", $soyad, time() + 3600)



    ?>

    <a href="oku.php">Mesajı Göster</a>
</body>

</html>