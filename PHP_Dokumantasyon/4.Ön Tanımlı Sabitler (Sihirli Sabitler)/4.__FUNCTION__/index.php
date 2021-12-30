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
	__FUNCTION__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu fonksiyonun, fonksiyon adı bilgisi değerini döndürür.
    */
    
    /* Örnek */
     
    function deneme() {
        echo __FUNCTION__."<br><br>";
    }
    deneme();

    /* Örnek */

    function bastır() {
     $GLOBALS["bilgi"]=__FUNCTION__;
    }
    bastır();

    echo $bilgi;

?>
</body>
</html>