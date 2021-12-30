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

    /* Temel Örnek */

    /*
	abs()	:	Herhangi bir sayının mutlak değerini bularak, bulduğu değeri geriye döndürür.
    sqrt()	:	Herhangi bir sayının karekökünü bularak, bulduğu değeri geriye döndürür.
	pow()	:	Herhangi bir sayının belirtilecek değer kadar üssünü bularak, bulduğu değeri geriye döndürür.
	*/

    /* abs() */
   
     $sayi=-10;
     $islem=abs($sayi);
     echo "Sayı: ".$islem."<br><br><hr>";

     /* sqrt() */
    
     $deger=144;
     $sonuc=sqrt($deger);
     echo "Sonuc: ".$sonuc."<br><br><hr>";

     /* pow() */
     
     $islem1=pow(5,3);
     echo "Sonuc: ".$islem1."<br>";













    ?>
</body>

</html>