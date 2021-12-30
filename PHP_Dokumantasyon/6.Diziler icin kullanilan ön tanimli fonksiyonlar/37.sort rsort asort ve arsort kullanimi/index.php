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
	sort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	rsort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	asort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve anahtarlarını bozmayacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	arsort()	:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve anahtarlarını bozmayacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	*/
     
    /* Temel Örnekler */

    $isimler=array("Yusuf","mehmet","Ali","YUSuf","YUSUF","SErkan","mustafa","sEher");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
   
    /* Küçükten Büyüge sıralama */
    // Not:Sıralamada herzaman büyük harf önceliklidir
    sort($isimler); //anahtar degeri korunmuyor tekrar oluşturuluyor

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    rsort($isimler);  // anahtarlar korunmuyor
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    /* Anahtar degerlerini korumak için asort ve arsort kullanırız */

    asort($isimler);  // anahtar degerler korundu
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
   
    arsort($isimler);

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";









?>
</body>
</html>