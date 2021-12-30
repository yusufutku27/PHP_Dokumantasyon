<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    /* Temel Örnek */

    define("İSİMLER",array("ahmet","mehmet","yusuf","mustafa","ali"));

    echo "<pre>";
    print_r(İSİMLER);
    echo "</pre>";
    
    /* Temel Örnek */
    
    const meyveler=array("elma","armut","kiraz");

    echo "<pre>";
    print_r(meyveler);
    echo "</pre>";

    echo İSİMLER[0]."'in"." en sevdigi meyve ".meyveler[1]."'tur."."<br><br>";

    /* Dizilerdeki kurallar sabit dizilerdede geçerli ve tüm örneklerde aynı şeşilde kullanılabilir */
     
    define("PERSONEL",array("isim"=>"Yusuf","soyisim"=>"Utku",20));

    echo "İsmim: ".PERSONEL["isim"]."<br>";
    echo "Soyismim: ".PERSONEL["soyisim"]."<br>";
    echo "Yaşım: ".PERSONEL[0];



    ?>
</body>
</html>