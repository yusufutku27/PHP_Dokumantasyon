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
	array_search()		:	Dizi içerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanı aramak ve ilgili elemanın anahtarını bulmak için kullanılır.
	array_key_exists()	:	Dizi içerisinde bulunan anahtar veya anahtarlar dahilinde, belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.
	in_array()			:	Dizi içerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanın olup olmadığını kontrol etmek için kullanılır.
	*/
   
    /* array_search kullanımı */

    $isimler=array("a1"=>"yusuf","a2"=>"ahmet","a3"=>"hakan","a4"=>"mustafa","a5"=>"ali");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    
    $sonuc=array_search("ali",$isimler);

    echo "İlgili Elamanın Anahtar Degeri: ".$sonuc."<br><br>";

    /* array_key_exists kullanımı */

    $islem=array_key_exists("a5",$isimler); // a5 anahtarı oldugu için 1 degeri yani true degeri döndürür yok ise boş döner 
    
    echo "Sonuç: ".$islem."<br><br>";


    /* in_array kullanımı */

    $hesap=in_array("hakan",$isimler); // hakan degeri oldugu için 1 degeri  yani true döndürür yok ise boş döner
     
    echo "İlgili Deger Varmı: ".$hesap;










?>
</body>
</html>