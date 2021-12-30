<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /* Örnekler */

    // referansa baglı olmadıgımız zamanki hali
    echo "<h2>Referans Kullanmadık</h2>";
    $name = "Yusuf";
    $isim = $name;

    echo $name . "<br>";
    echo $isim . "<br><br>";

    $name = "Mustafa";

    echo $name . "<br>";
    echo $isim . "<br><br>";
    echo "<hr>";



    // referansa baglı durumdaki hali (&)
    echo "<h2>Referans Kullandık</h2>";

    $ad="Yusuf";
    $soyad=&$ad;// & ilgili degişkeni anlık olarak referans al

    echo $ad."<br>";
    echo $soyad."<br><br>";

    $ad="Esra";

    echo $ad."<br>";
    echo $soyad."<br><br><br>"; // Yukarıda & kullandıgımız için $soyad degişkeni artık $ad degişkeninin son halini tutar

   /* Tekrar */
   
   $sayı1=20;
   $sayı2=&$sayı1;

   echo $sayı2."<br>";
   $sayı1=30;
   echo $sayı2;

    ?>
</body>

</html>