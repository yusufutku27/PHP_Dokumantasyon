<?php
session_start();
?>
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


    $_SESSION["kullanici"]=array("isim"=>"Yusuf","soyisim"=>"Utku","yas"=>20);
    $_SESSION["sepet"]=array("isim"=>"ayakkabi","miktar"=>1200,"fiyat"=>100);

    echo "İsim: ".$_SESSION["kullanici"]["isim"]."<br>";
    echo "Soyisim: ".$_SESSION["kullanici"]["soyisim"]."<br>";
    echo "Yaş: ".$_SESSION["kullanici"]["yas"]."<br>";




?>
</body>
</html>