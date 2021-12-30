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
	settype()	:	Herhangi bir değişken içeriğinin veri türünü belirlemek / değiştirmek için kullanılır.
	*/

    /* Temel Örnekler */


    // $Deger						=	"8";
    // $DegerIcerigininIlkVeriTuru	=	gettype($Deger);

    // echo "İçeriğin İlk Hali : " . $Deger . "<br />";
    // echo "İçeriğin İlk Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";

    // settype($Deger, "integer"); // artık $Deger degişkeninin veri türü integer (tamsayı) oldu

    // $DegerIcerigininSonVeriTuru	=	gettype($Deger);

    // echo "İçeriğin Son Hali : " . $Deger . "<br />";
    // echo "İçeriğin Son Halinin Veri Türü : " . $DegerIcerigininSonVeriTuru;




    /* Örnek */


    // $Deger						=	853.45;
    // $DegerIcerigininIlkVeriTuru	=	gettype($Deger);

    // echo "İçeriğin İlk Hali : " . $Deger . "<br />";
    // echo "İçeriğin İlk Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";

    // settype($Deger, "integer");

    // $DegerIcerigininSonVeriTuru	=	gettype($Deger);

    // echo "İçeriğin Son Hali : " . $Deger . "<br />";
    // echo "İçeriğin Son Halinin Veri Türü : " . $DegerIcerigininSonVeriTuru;



    /* Örnek */

    $deger = 1;
    $verituru = gettype($deger);

    echo "Deger: " . $deger . "<br>";
    echo "Veri Türü: " . $verituru . "<br><br>";

    settype($deger, "boolean");

    $verituru = gettype($deger);
    echo "Deger: " . $deger . "<br>";
    echo "Veri Türü: " . $verituru . "<br><br>";








    ?>
</body>

</html>