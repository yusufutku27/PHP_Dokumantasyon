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


    $degerler=array();  // Diziyi önceden tanımladık

    $degerler[0]="Yusuf";
    $degerler[1]="Utku";
    $degerler[2]=20;

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
   
    /* indis atama */

    $personel=array();

    $personel["isim"]="Yusuf";
    $personel["soyisim"]="Utku";
    $personel["yas"]=20;

    echo "<pre>";
    print_r($personel);
    echo "</pre>";


    echo "Ben ".$personel["isim"]." ".$personel["soyisim"];

?>
</body>
</html>