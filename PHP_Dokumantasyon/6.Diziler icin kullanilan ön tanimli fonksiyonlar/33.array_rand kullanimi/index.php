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
	array_rand()	:	Dizi içerisinde bulunan elemanlardan, belirtilecek eleman sayısı kadar rastgele değer döndürmek için kullanılır.
	*/

    /* Temel Örnek */
    
    $isimler=array("Yusuf","Ali","Seher","Mehmet","Yasemin","Simay","Nursel","Mustafa");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    $sonuc=array_rand($isimler,3);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    echo $isimler[$sonuc[0]]."<br>";
    echo $isimler[$sonuc[1]]."<br>";
    echo $isimler[$sonuc[2]]."<br>";






?>
</body>
</html>