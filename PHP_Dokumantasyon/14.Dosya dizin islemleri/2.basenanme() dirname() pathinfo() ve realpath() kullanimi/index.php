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
	basename()		:	Belirtilecek olan değer doğrultusunda, kaynağın sadece dosya adını bularak, bulduğu değeri geriye döndürür.
	dirname()		:	Belirtilecek olan değer doğrultusunda, kaynağın içerisinde bulunduğu dizin / dizinlerin adını bularak, bulduğu değeri geriye döndürür.
	pathinfo()		:	Belirtilecek olan değer doğrultusunda, kaynağın içerisinde bulunduğu dizin / dizinlerin adını ve dosya adını bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	realpath()		:	Belirtilecek olan değer doğrultusunda, kaynağın mutlak yolunu bularak, bulduğu değeri geriye döndürür.
	*/
   
    $dosya="dokumanlar/belgeler/belge.txt";

     $dosyaismi=basename($dosya);
     echo "Dosya İsmi: ".$dosyaismi."<br>";

     $dosyadizini=dirname($dosya);
     echo "Dosya Dizini: ".$dosyadizini."<br>";
   
     $dosyabilgileri=pathinfo($dosya);

     echo "<pre>";
     print_r($dosyabilgileri);
     echo "</pre>";

     $mutlakyolu=realpath($dosya);
     echo "Mutlak Yolu: ".$mutlakyolu;

    


















    ?>
</body>

</html>