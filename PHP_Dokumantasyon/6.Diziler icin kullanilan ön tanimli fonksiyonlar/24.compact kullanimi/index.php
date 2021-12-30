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
	compact()	:	Dizi içerisinde bulunan elamanı / elemanları anahtar gibi görerek, daha önceden aynı isimle tanımlanmış olan değişkenlerden ilgili anahtarlara değer üretmek için kullanılır.
	*/
    
    /* Temel Örnek */

    $name="Yusuf";
    $surname="Utku";
    $age=20;
    $renk="mavi";
    $personel=compact("name","surname","age","renk");

    echo "<pre>";
    print_r($personel);
    echo "</pre>";











?>
</body>
</html>