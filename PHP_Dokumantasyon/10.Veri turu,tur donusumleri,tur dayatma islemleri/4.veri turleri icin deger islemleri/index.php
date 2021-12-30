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
	boolval()		:	Herhangi bir değişken içeriğinin boolean (mantıksal) veri türü değerini geriye döndürür.
	intval()		:	Herhangi bir değişken içeriğinin integer (tam sayı) veri türü değerini geriye döndürür.
	floatval()		:	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	doubleval()		:	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	*/

    /* Temel Örnek */

    $mesaj = "20Yusuf yaşındadır";
    $verituru = gettype($mesaj);

    echo "Deger: " . $mesaj . "<br>";
    echo "Veri Türü: " . $verituru . "<br><br>";

    $sayisaldeger = intval($mesaj);
    $tur = gettype($mesaj);
    echo "Degerin İçindeki Sayısal Deger: " . $sayisaldeger . "<br>";
    echo "Veri Türü Degişmez: " . $tur;  // intval() içerigin veri türünü degiştirmez

    /* Digerleride aynı görevi yapıyor */

    echo "20" + "20";










    ?>
</body>

</html>