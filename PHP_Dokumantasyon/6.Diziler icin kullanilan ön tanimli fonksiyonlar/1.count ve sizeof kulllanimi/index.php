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
	count()				:	Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	sizeof()			:	Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	COUNT_RECURSIVE		:	Çok boyutlu dizilerde, tüm boyutlar içerindeki elemanlarda sayma işlemine dahil edilir.
	*/

    /* Temel Örnek */

    $meyveler=array("elma","armut","kiraz","limon","portakal","mandalina");
    
    // count kullanımı

    $elemansayisi=count($meyveler);
    
    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";

    echo "Elaman sayısı: ".$elemansayisi."<br><br>";

    // sizeof kullanımı

    $sayi=sizeof($meyveler);
    echo "Elaman sayısı: ".$sayi."<br><br>";
   
    
    /* COUNT_RECURSIVE çok boyutlu dizilerdeki toplam elaman sayısını verir yani içdeki dizilerin elamanınıda sayar */

    $deger=array("yusuf","ahmet",array("masa","sandalye"),"mehmet","ahmet",array("laptop","pc","ram","cpu"));

    echo "<pre>";
    print_r($deger);
    echo "</pre>";
   
    $dizielamansayisi=count($deger,COUNT_RECURSIVE); // toplam elaman sayısını verir

    echo "Toplam Elaman Sayısı: ".$dizielamansayisi;









?>

</body>
</html>