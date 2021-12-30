<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /* 
    çerez tanımı setcookie() fonksiyonu ile yapılır
    $_COOKIE super globali ile tarıcıya yerleşmiş olan çerezleri okuyabiliriz.
    */

    setcookie("isim","Yusuf Utku");

    $cerez=$_COOKIE["isim"];
    echo $cerez;
    
     







    ?>
</body>

</html>