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
	ceil()			:	Herhangi bir ondalıklı sayıyı en yukarıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
	floor()			:	Herhangi bir ondalıklı sayıyı en aşağıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
	round()			:	Herhangi bir ondalıklı sayıyı kendisine en yakın tam sayıyı kontrol ederek yukarıya veya aşağıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
	*/
    
    /* Temel Örnek */
     
    /* ceil() */
    
    $sayi=15.1; // en yukarı deger olan 16'a yuvarladı
    $yukari=ceil($sayi);
    echo "Sonuc: ".$yukari."<br>";

    $sayi1=14.8;
    $islem1=ceil($sayi1);
    echo "Sonuc: ".$islem1."<br><br><hr>";

    /* floor() */
     
    $deger=10.9;  // en aşşagı deger olan 10 'a yuvarladı
    $sonuc=floor($deger);
    echo "Sonuc: ".$sonuc."<br><br><hr>";  


    /* round() */
   
    $numara=12.2; // en yakın olan sayıya yani 12'e yuvarladı
    $yakin=round($numara);
    echo "Sonuc: ".$yakin."<br>"; 
   
    $numara1=15.5;
    $islem2=round($numara1);
    echo "Sonuc: ".$islem2."<br>";



    ?>
</body>

</html>