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
	array_shift()	:	Dizi içerisinde bulunan ilk elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	array_pop()		:	Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	*/
    
    /* Temel Örnek */

    $isimler=array("mustafa","yusuf","serkan","ahmet");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    
    array_shift($isimler);

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $silinendeger=array_shift($isimler);

    echo "Silinen Deger: ".$silinendeger;
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    /* Çok Boyutlu Dizilerde kullanımı */
    
    $meyveler=array("kiraz","limon","mişmiş",array("üzüm","armut","kavun","patlıcan"));

    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";

    array_shift($meyveler[3]);

    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";
    
    $sildeger=array_shift($meyveler[3]);

    echo "Silinen Deger: ".$sildeger;

    echo "<hr><hr>";





    // array_pop()		:	Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
    
    
    /* Temel Örnek */
    
    $esya=array("masa","sehpa","sandalye","kürsü","hoparlör");

    echo "<pre>";
    print_r($esya);
    echo "</pre>";

    array_pop($esya);
    
    echo "<pre>";
    print_r($esya);
    echo "</pre>";


    $degersil=array_pop($esya);
    echo "Sondan silinen deger: ".$degersil;

    // array_shift için geçerli olan örnekler bunun içinde geçerli



?>
</body>
</html>