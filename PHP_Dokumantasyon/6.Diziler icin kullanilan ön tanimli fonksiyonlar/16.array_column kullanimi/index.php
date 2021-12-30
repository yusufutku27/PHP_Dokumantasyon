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
	array_column()	:	Çok boyutlu bir dizi içerisinde bulunan elemanı / elemanları belirtilecek olan anahtar koşullarına göre biçimlendirerek yeni bir dizi oluşturmak için kullanılır.
	*/
      

    /* Temel Örnek */

    $personel=array(array("isim"=>"yusuf","soyisim"=>"utku","yas"=>20),array("isim"=>"ali","soyisim"=>"aslan","yas"=>25),array("isim"=>"mustafa","soyisim"=>"yılmaz","yas"=>22));

    echo "<pre>";
    print_r($personel);
    echo "</pre>";
    
    $newdizi=array_column($personel,"isim"); // isim anahtarına sahip olan degerleri alıp başka bir dizi oluşturur
    
    echo "<pre>";
    print_r($newdizi);
    echo "</pre>";


   /* 2.parametre olarak yazıdıgımız anahtarın degerleri 1.parametredeki elamanların anahtarı olur. */

   /* Örnek */
   
   $yenidizi=array_column($personel,"isim","yas"); // 1.parametre 2.parametre anahtar görevi görür
   
   echo "<pre>";
   print_r($yenidizi);
   echo "</pre>";











?>
</body>
</html>