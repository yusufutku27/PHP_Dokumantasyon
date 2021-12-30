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
	array_keys()	:	Dizinin anahtarlarını alıp yeni bir dizi oluşturmak için kullanılır.
	array_values()	:	Dizinin elemanlarını alıp yeni bir dizi oluşturmak için kullanılır.
	*/
   
    /* Temel Örnek */
    
    $dizi=array("Yusuf"=>"isim","Utku"=>"surname",20=>"age");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    
    /* Anahtarları alır yeni bir dizi oluşturur  */

    $anahtarlarartikdizi=array_keys($dizi);

    echo "<pre>";
    print_r($anahtarlarartikdizi);
    echo "</pre>";
   

    /* Elamanları alır yeni bir dizi oluşturur */

    $elemanlarartikdizi=array_values($dizi);

    echo "<pre>";
    print_r($elemanlarartikdizi);
    echo "</pre>";
   






?>
</body>
</html>