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
	current()	:	Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	pos()		:	Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	*/
    

    /* Temel Örnek */

    $isimler=array("yusuf","ahmet","mustafa");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $sonuc=current($isimler);

    echo "Dizinin göstericisi konumundaki elemanın degeri: ".$sonuc."<br><br>"; // degiştirilmediyse herzaman ilk degerdir
   
    /* Çok boyulu dizilerde kullanımı */
    
    $meyveler=array(array("muz","kivi"),"elma","armut",array("ahmet","hakan","yusuf",array("sehpa","masa","sandalye")));
    
    $islem=pos($meyveler);

    echo "<pre>";
    print_r($islem);
    echo "</pre>";
    
    // tüm hepsi pos içinde geçerlidir




?>
</body>
</html>