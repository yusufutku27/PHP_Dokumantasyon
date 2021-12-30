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

    /* Temel Örnek */

    ($personel=function($isim="",$soyisim="",$yas="") {
        if($isim!="") {
            echo "İsmim: ".$isim."<br>";
        } 
        if($soyisim!="") {
           echo "Soyismim: ".$soyisim."<br>";
        }
        if($yas!="") {
           echo "Yaşım: ".$yas."<br>";
        } 
    })("Yusuf","Utku",20);














    ?>
</body>

</html>