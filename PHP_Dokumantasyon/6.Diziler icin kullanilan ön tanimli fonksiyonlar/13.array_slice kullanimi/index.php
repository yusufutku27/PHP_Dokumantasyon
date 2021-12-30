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
	array_slice()	:	Dizinin belli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır.
	*/

    /* Temel Örnek */
    
    $dizi=array("mehmet","ali","kadir","hakan","serkan","yusuf"); 
    echo "<p>Temel Dizi</p>";
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $yenidizi=array_slice($dizi,3); // 3.elemanda dahil sonuna kadar olanları alıyor ve yeni dizi yapıyor

    echo "<pre>";
    print_r($yenidizi);
    echo "</pre>";
   
    $newdizi=array_slice($dizi,2,2);
    
    echo "<pre>";
    print_r($newdizi);
    echo "</pre>";
    

    // anahtar degerleri alfanumerikte korunur fakat rakamsal olanlarda korunmaz korumak için 3.parameter olarak true degerini girmeliyiz


    $dizi1=array_slice($dizi,2,3,true); // rakamsal olsa bile true kullanıgımız için anahtar degerleri korunucak
    
    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";
    







?>
</body>
</html>