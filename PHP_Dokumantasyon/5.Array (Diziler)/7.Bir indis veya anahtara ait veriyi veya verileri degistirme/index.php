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
    
    $personel=array("isim"=>"Yusuf","Soyisim"=>"Utku");
    
    echo "<pre>";
    print_r($personel);
    echo "</pre>";

    $personel["isim"]="Ahmet";
    $personel["Soyisim"]="Aslan";

    echo "<pre>";
    print_r($personel);
    echo "</pre>";


     
    




?>
</body>
</html>