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
	array_diff()		:	Birden fazla dizi içerisinde bulunan ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	array_diff_key()	:	Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	array_diff_assoc()	:	Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	*/

    /* Temel Örnek */
    
    $meyve=array("elma","armut","mandalina","kivi","karpuz","limon","portakal");
    $sebze=array("armut","ıspanak","mandalina","karpuz","erik","lahana","turp","pırasa","havuç","domates");
     
    echo "<pre>";
    print_r($meyve);
    echo "</pre>";

    echo "<pre>";
    print_r($sebze);
    echo "</pre>";
   
    /* Farklı deger için */

    $farklideger=array_diff($meyve,$sebze); // ilk meyve dizisinden başlayark karşılaştırma yapar
    // anahtar degerleri otomatik korunuyor alfanumarik olanlarda korunur

    echo "<pre>";
    print_r($farklideger);
    echo "</pre>"."<hr>";

    /* Farklı anahtar için */
    
    $farklianahtar=array_diff_key($sebze,$meyve);
    
    echo "<pre>";
    print_r($farklianahtar);
    echo "</pre>"."<hr>";

    /* Farklı anahtar ve deher için  */

    $farklianahtardeger=array_diff_assoc($sebze,$meyve);
    
    echo "<pre>";
    print_r($farklianahtardeger);
    echo "</pre>"."<hr>";



?>
</body>
</html>