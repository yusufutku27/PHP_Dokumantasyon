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
	ksort()		:	Dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	krsort()	:	Dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	*/
    
    /* Temel Örnek */

    $isimler=array("Bir"=>"Yusuf","İki"=>"Mehmet","Uc"=>"Mustafa","Dort"=>"Metin","Bes"=>"Serkan");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
     
    /* a dan z ye yani küçükten büyüge için ksort */

    ksort($isimler);
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    // Not: degişkene atarsak true veya false degeri döndürür.

   /* z dan a ya yani büyükten küçüge için krsort */

   krsort($isimler);

   echo "<pre>";
   print_r($isimler);
   echo "</pre>"."<hr><hr><br>";

   /* Rakamsal anahatlarlı dizileri sıralamak */

   $dizi=array(1=>"Mehmet",60=>"Yusuf",12=>"Serkan",37=>"Ali",87=>"Esra",256=>"Mustafa",144=>"Seher");
   
   echo "<pre>";
   print_r($dizi);
   echo "</pre>";
   
   ksort($dizi);
    
   echo "<pre>";
   print_r($dizi);
   echo "</pre>";

   krsort($dizi);
   
   echo "<pre>";
   print_r($dizi);
   echo "</pre>";







?>
</body>
</html>