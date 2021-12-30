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
    Uyarı : const ile oluşturdugumuz sabitinin içeriginde degişken kulllanamayız.sadece define() ile kullanabiliriz
    */

    /* Örnek */

    $name="Yusuf";

    define("NAME",$name);
    echo NAME."<br><br>";

    /* Örnek */
     
    $ad="Mustafa";
    $soyad="İsabaş";

    define("ADSOYAD",$ad." ".$soyad);
    echo ADSOYAD."<br><br>";
    
    /* const ile tanımlanmış sabitte degişken kullanamayız */
    
    $sayı=7;
   //  const rakam=$sayı; hata verir
 


?>
</body>
</html>