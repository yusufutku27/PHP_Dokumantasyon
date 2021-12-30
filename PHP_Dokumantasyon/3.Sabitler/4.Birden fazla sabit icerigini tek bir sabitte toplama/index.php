<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    /* Örnek */
  
    define("ad","yusuf");
    define("soyad","utku");

    const adsoyad=ad." ".soyad;
    echo adsoyad."<br><br>";

    /* Örnek */
     
    define("name","mustafa");
    const surname="isabaş";

    define("isim",name." ".surname);
    echo isim."<br><br>";
    
    /* Örnek */
    
    define("meyve","elma");
    const sebze="pırasa";
    $tahıl="ekmek";

    define("sonuc",meyve." ".sebze." ".$tahıl);
    echo sonuc;






    ?>
</body>
</html>