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
	__METHOD__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan metodun, metot adı bilgisi değerini döndürür.
    */
    

    class deger {
        function nesne() {
            echo __METHOD__;
        }

        function kadir() {
            echo __METHOD__;
        }
    }
   
    $sonuc=new deger;

    $sonuc->nesne();
    echo "<br><br>";
    $sonuc->kadir();
?>
</body>
</html>