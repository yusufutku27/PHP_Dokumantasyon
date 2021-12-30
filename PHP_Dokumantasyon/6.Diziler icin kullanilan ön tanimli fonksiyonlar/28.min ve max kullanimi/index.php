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
	min()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda en küçük rakamsal değer içeren elemanı bulmak için kullanılır.
	max()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda en büyük rakamsal değer içeren elemanı bulmak için kullanılır.
	*/  

    /* Temel Örnek */

    $numaralar=array(15,50,6,28,-9,-2,126,111);
    
    echo "<pre>";
    print_r($numaralar);
    echo "</pre>";
    

    $kucuk=min($numaralar);
    $buyuk=max($numaralar);

    echo "En küçük deger: ".$kucuk."<br>";
    echo "En büyük deger: ".$buyuk."<br>";
    











?>
</body>
</html>