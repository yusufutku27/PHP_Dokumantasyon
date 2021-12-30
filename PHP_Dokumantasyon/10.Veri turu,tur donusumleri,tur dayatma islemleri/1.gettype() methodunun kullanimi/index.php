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
	gettype()	:	Herhangi bir değişken içeriğinin veri türünü bularak, bulduğu değeri geriye döndürür.
	*/

    /* Temel Örnekler */
    
    $name="Yusuf Utku";
    $verituru=gettype($name);

    echo "Deger: ".$name."<br>";
    echo "Veri Türü: ".$verituru."<br><br>";




    $yas=20;
    $sonuc=gettype($yas);

    echo "Deger: ".$yas."<br>";
    echo "Veri Türü: ".$sonuc."<br><br>";



    $deger=20.50;
    $islem=gettype($deger);
    
    echo "Deger: ".$deger."<br>";
    echo "Veri Türü: ".$islem."<br><br>";




    $dizi=array("Yusuf",20,20.5);
    $Sonuc=gettype($dizi);

    echo "<pre>";
    print_r($dizi);
    echo "<pre>";

    echo "Veri Türü: ".$Sonuc."<br><br>";
    
    


    $mantıksal=true;
    $son=gettype($mantıksal);

    echo "Deger: ".$mantıksal."<br>";
    echo "Veri Türü: ".$son."<br><br>";
    



    $bosdeger=null; // null veri türü degeri olmayan veri türüdür
    $bos=gettype($bosdeger);

    echo "Deger:".$bosdeger."<br>";
    echo "Veri Türü: ".$bos."<br><br>";








    ?>
</body>

</html>