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
	?:		=	ternary operatörü (Üçlü operatör)
	
	Yapısı :
	(Koşul veya Koşullar) ? Geçerli ifade : Geçersiz ifade ;
	*/


    /* Temel Kullanım */
    $deger = 3;
    echo ($deger == 3) ? "Dogru" . "<br><br>"  : "Yanlış" . "<br><br>";

    $rakam = 10;
    $mesaj1 = "Hey Dostum evet Dogru";
    $mesaj2 = "Hey Dostum hayır Yanlış";

    $sonuc = ($rakam == 10) ? $mesaj1 : $mesaj2;

    echo $sonuc."<br>";

    /* Birden çok koşulda kullanabilirsin */
    
    echo ((5>6) and (10>8) and (80<120)) ? "Sonuç: Dogru":"Sonuç: Yanlış";








    ?>

</body>

</html>