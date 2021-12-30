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
	end() 	:	Dizi göstericisinin son konumundaki elemanı bulmak için kullanılır.
	*/

    /* Temel Örnek */

    $isimler = array("mustafa", "ali", "halil", "serkan");

    $sonuc = end($isimler);

    echo "Dizi göstericisinin son konumundaki eleman: " . $sonuc . "<br><br>";

    /* Çok Boyutlu dizilerde kullanımı */

    $meyveler = array("elma", "armut", array("ahmet", "hakan", "yusuf", array("sehpa", "masa", "sandalye")));

    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";

    $deger = end($meyveler);

    echo "<pre>";
    print_r($deger);
    echo "</pre>";











    ?>
</body>

</html>