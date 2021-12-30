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

    /*
	array_combine()		:	İki farklı diziyi ilişkisel olarak birleştirerek yeni bir dizi oluşturmak için kullanılır.
	*/

    /* Temel örnek */

    $dizi1=array("isim","soyisim","yas");
    $dizi2=array("yusuf","utku",20);

    $newdizi=array_combine($dizi1,$dizi2); // ilk dizideki degerleri alıp ikinci dizideki degelerin anahatarı yapar
    
    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "<pre>";
    print_r($newdizi);
    echo "</pre>"."<hr>";
    
    // anahtar farklı olsada fark etmez veya aynı olsada fark etmez
    
    // çok boyutlu dizilerde kullanımı

    $a1=array("meyve","sebze");
    $a2=array("muz",array("pırasa","ıspanak"));

    $yenidizi=array_combine($a1,$a2);
    
    echo "<pre>";
    print_r($a1);
    echo "</pre>";

    echo "<pre>";
    print_r($a2);
    echo "</pre>";

    echo "<pre>";
    print_r($yenidizi);
    echo "</pre>"."<hr>";
    
    echo "<pre>";
    print_r($yenidizi["sebze"]);
    echo "</pre>";
   
 





?>
</body>
</html>