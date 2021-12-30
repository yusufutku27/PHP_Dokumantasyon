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
	array_change_key_case()		:	Dizi içerisinde bulunan anahtar veya anahtarların büyük harf küçük harf dönüştürme işlemleri için kullanılır.
	CASE_LOWER					:	Küçük harf yapar.
	CASE_UPPER					:	Büyük harf yapar.
	*/

    /* Temel Örnek */

    $isimler=array("Isim"=>"Yusuf","Soyisim"=>"Utku","Renk"=>"Mavi");
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $islem=array_change_key_case($isimler); // default olarak hepsini küçük harf yapar


    echo "<pre>";
    print_r($islem);
    echo "</pre>";

    /* Büyük Harf yap */

    $sonuc=array_change_key_case($isimler,CASE_UPPER);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
















?>
</body>
</html>