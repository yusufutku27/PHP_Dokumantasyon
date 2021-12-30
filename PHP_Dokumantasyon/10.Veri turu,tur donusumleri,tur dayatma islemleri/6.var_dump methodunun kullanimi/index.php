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
	var_dump()	:	Herhangi bir değişkene ait tüm yapıya ve bilgilere ulaşmak için kullanılır.
	*/


    $name="Yusuf";
    var_dump($name);
    echo "<br><br>";

    $deger=2568;
    var_dump($deger);
    echo "<br><br>";

    $ondalik=14.4;
    var_dump($ondalik);
    echo "<br><br>";

    $mantiksal=true;
    var_dump($mantiksal);
    echo "<br><br>";

    $dizi=array("Yusuf",20,15.2,true);
    echo "<pre>";
    var_dump($dizi);
    echo "</pre>";
















    ?>
</body>

</html>