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
	Değerler						:	(boolean) & (bool) | (integer) & (int) | (float) & (double) & (real) | (string) | (array) | (object) | (unset)
	(boolean) & (bool)				:	Mantıksal veri türüne dönüştürme.
	(integer) & (int)				:	Tam sayı veri türüne dönüştürme.
	(float) & (double) & (real)		:	Ondalıklı sayı veri türüne dönüştürme.
	(string)						:	Alfanumerik (a-z A-Z 0-9) veri türüne dönüştürme.
	(array)							:	Dizi veri türüne dönüştürme.
	(object)						:	Nesne veri türüne dönüştürme.
	(unset)							:	null (boş / değeri olmayan) veri türüne dönüştürme.
	*/


    /* Veri türünü oluşturmadan önce biz belirleyebiliriz */

    $deger = (int)"15";  // $deger deişkeninin veri türünü oluşutururken integer yaptım
    $verituru = gettype($deger);
    echo "Deger: " . $deger . "<br>";
    echo "Veri Türü: " . $verituru . "<br><br>";


    $a = (string)12.7;
    $tur = gettype($a);
    echo "Deger: " . $a . "<br>";
    echo "Veri Türü: " . $tur . "<br><br>";

    $name = (bool)"Yusuf";
    $t = gettype($name);
    echo "Deger: " . $name . "<br>";
    echo "Veri Türü: " . $t . "<br><br>";

    $meyve = (array)"Elma";
    $d = gettype($meyve);
    echo "<pre>";
    print_r($meyve);
    echo "</pre>";
    echo "Veri Türü: " . $d . "<br><br>";

    $isim =(unset)"Mustafa";
    $g = gettype($isim);
    echo "Deger: " . $isim . "<br>";
    echo "Veri Türü: " . $g . "<br><br>";













    ?>
</body>

</html>