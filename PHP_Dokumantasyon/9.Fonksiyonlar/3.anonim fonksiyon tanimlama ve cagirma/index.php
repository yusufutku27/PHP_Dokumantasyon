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
     
    $yaz=function() {
        echo "Merhaba Dünya"."<br><br>";
    }; //  ; noktalı virgülü unutma çünkü bir degikene atama yapıyoz
    $yaz();


    $dizi=array("Yusuf","Mehmet",function() { echo "Naber Yusuf"; });
    
    $dizi[2]();











?>
</body>
</html>