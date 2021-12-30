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
	__DIR__	:	Çalışmakta olan PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyasının bulunduğu dizin bilgisi değerini döndürür. PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası adını içermez.
    */

    /* Örnek */
    
    echo __DIR__."<br><br>";
     
    /* Örnek */
   
    $dizinbilgisi=__DIR__;
    echo "Dizin Bilgisi: ".$dizinbilgisi."<br><br>";
     
    /* Örnek */

    define("dizin",__DIR__);
    echo dizin;

?>
</body>
</html>