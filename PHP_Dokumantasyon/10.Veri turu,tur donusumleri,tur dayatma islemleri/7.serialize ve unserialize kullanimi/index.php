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
	serialize()		:	Herhangi bir değeri saklanabilir veri türüne dönüştürerek, dönüştürdüğü değeri geriye döndürür.
	unserialize()	:	serialize() metodu kullanılarak üretilmiş olan herhangi bir saklanabilir veri türündeki değeri eski orjinal haline dönüştürerek, dönüştürdüğü değeri geriye döndürür.
	*/

    /* Saklanabilir (barındırılabilir) ifadeye dönüştürmek */
    
    $dizi=array("Yusuf","Utku","Mustafa","İsabaş",20,50.2);

    $islem=serialize($dizi);  // yani diziyi bir neni saklanabilir hale getirdi string ifadeye dönüştürdü
    
    echo $islem;

    /* Saklanabilir (barındırılabilir) ifadeyi orijinal ifadeye dönüştürmek */

    
    $saklanabilirveri='a:6:{i:0;s:5:"Yusuf";i:1;s:4:"Utku";i:2;s:7:"Mustafa";i:3;s:8:"İsabaş";i:4;i:20;i:5;d:50.2;}';
    $orijinalveri=unserialize($saklanabilirveri);
    echo "<pre>";
    print_r($orijinalveri);
    echo "</pre>";










    ?>
</body>

</html>