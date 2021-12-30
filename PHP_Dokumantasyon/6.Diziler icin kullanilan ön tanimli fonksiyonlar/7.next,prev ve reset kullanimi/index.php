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
	next()		:	Dizinin göstericisi konumundaki anahtarı veya elemanı bir ileri almak için kullanılır.
	prev()		:	Dizinin göstericisi konumundaki anahtarı veya elemanı bir geri almak için kullanılır.
	reset()		:	Dizinin göstericisi konumundaki anahtarı veya elemanı varsayılan konuma (ilk) geri döndürmek için kullanılır.
	*/
   
    /* Temel Örnek */
    
    $personel=array("isim"=>"Yusuf","Utku",20);

    echo "<pre>";
    print_r($personel);
    echo "</pre>";

    $sonuc=key($personel);
    echo "Gösterici konumundaki anahtar degeri: ".$sonuc."<br>";
    
    $islem=pos($personel);
    echo "Gösterici konumundaki elemanın degeri: ".$islem."<br><br>";
    
    next($personel);
    next($personel);

    $sonuc=key($personel);
    echo "Gösterici konumundaki anahtar degeri: ".$sonuc."<br>";
    
    $islem=pos($personel);
    echo "Gösterici konumundaki elemanın degeri: ".$islem."<br><br>";
    
    prev($personel);

    $sonuc=key($personel);
    echo "Gösterici konumundaki anahtar degeri: ".$sonuc."<br>";
    
    $islem=pos($personel);
    echo "Gösterici konumundaki elemanın degeri: ".$islem."<br><br>";

    reset($personel);

    $sonuc=key($personel);
    echo "Gösterici konumundaki anahtar degeri: ".$sonuc."<br>";
    
    $islem=pos($personel);
    echo "Gösterici konumundaki elemanın degeri: ".$islem."<br><br>";


?>
</body>
</html>