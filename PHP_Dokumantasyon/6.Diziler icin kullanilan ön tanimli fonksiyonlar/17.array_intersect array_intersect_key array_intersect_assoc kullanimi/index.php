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
	array_intersect()			:	Birden fazla dizi içerisinde bulunan ve aynı eleman değerlerine sahip elemanlardan yeni bi dizi oluşturmak için kullanılır.
	array_intersect_key()		:	Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine sahip elemanlardan yeni bi dizi oluşturmak için kullanılır.
	array_intersect_assoc()		:	Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine ve aynı eleman değerlerine sahip elemanlardan yeni bi dizi oluşturmak için kullanılır.
	*/ 


    /* Temel Örnek */

    $name=array("isim"=>"yusuf","myname"=>"ahmet","name"=>"ali","ad"=>"serkan");
    $isim=array("isim"=>"mehmet","name"=>"ali","ad"=>"mustafa","name"=>"ömer","myname"=>"ahmet");

    echo "<pre>";
    print_r($name);
    echo "</pre>";
 
    echo "<pre>";
    print_r($isim);
    echo "</pre>";
     
    /* Aynı deger için */

    $aynideger=array_intersect($name,$isim); // aynı olsa bile herzaman ilk yazıgımız parametrenin degerleri alınır
    
    echo "<pre>";
    print_r($aynideger);
    echo "</pre>"."<hr>";
    
    /* Aynı anahtar için */

    $aynianahtar=array_intersect_key($name,$isim);

    echo "<pre>";
    print_r($aynianahtar);
    echo "</pre>"."<hr>";
    
    /* Aynı anahtar ve aynı deger için */

    $aynianahtardeger=array_intersect_assoc($name,$isim);
    
    echo "<pre>";
    print_r($aynianahtardeger);
    echo "</pre>";
 
    




?>

</body>
</html>