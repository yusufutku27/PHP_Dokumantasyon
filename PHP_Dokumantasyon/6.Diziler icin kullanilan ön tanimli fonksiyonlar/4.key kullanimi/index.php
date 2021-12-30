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
	key()		:	Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
	*/
     
    /* Temel Örnek */

    $personel=array("Yusuf","Utku",20);
    echo "<pre>";
    print_r($personel);
    echo "</pre>";
    $sonuc=key($personel);
    echo "Dizinin göstericisi konumundaki elemanın anahtar degeri: ".$sonuc."<br><br>";
    // Not: Dizinin göstericisi konumundaki elemanın anahtarı degiştirlmediyse herzaman 0 'dır yani ilk elemanın anahtar degeridir

    /* Çok boyutlu dizilerde kullanımı */

    $meyveler=array("elma","armut",array("ahmet","hakan","yusuf",array("sehpa","masa","sandalye")));

    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";

    $deger=key($meyveler[2]);
    echo "Dizinin göstericisi konumundaki elemanın anahtar degeri: ".$deger;
    







?>
</body>
</html>