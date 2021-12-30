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
    
    $hesaplafonksiyonu="hesapla";

    function hesapla() {
        echo 2+2;
        echo "<br>";
    }

    $hesaplafonksiyonu();

    /* Parametreli örenk */
   
    $func_isim="deneme";

    function deneme() {
        echo "İsmim: "."Yusuf";
    }
    
    $func_isim();

    





?> 
</body>
</html>