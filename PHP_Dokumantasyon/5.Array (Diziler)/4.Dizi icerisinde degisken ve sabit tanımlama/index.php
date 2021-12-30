<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    /* Temel Örnek */

    define("yol","images/resim.jpg");
    $isim="Yusuf";
    $soyisim="Utku";
    const renk="mavi";

    $degerler=array(yol,"ad"=>$isim,$soyisim,renk);

    echo "<pre>";
    print_r($degerler);
    echo "<pre>";
    





 


?> 
</body>
</html>