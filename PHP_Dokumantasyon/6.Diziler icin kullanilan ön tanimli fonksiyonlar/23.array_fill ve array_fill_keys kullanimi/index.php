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
	array_fill()		:	Belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	array_fill_keys()	:	Dizi içerisinde bulunan eleman veya elemanları anahtar gibi görerek, belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/
    

    /* Temel Örnek */
    
    $isimler=array_fill(0,10,"yusuf");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>"."<hr>";

    /* array_fill_keys fonksiyonu var olan dizedeki elamanları yeni dizideki elamanların anahtarı olarak görev yapmasını saglar */

    /* Örnek */
    
    $personel=array("isim","soyisim","yas","renk");

    $man=array_fill_keys($personel,"yusuf");
   
    echo "<pre>";
    print_r($man);
    echo "</pre>";














?>
</body>
</html>