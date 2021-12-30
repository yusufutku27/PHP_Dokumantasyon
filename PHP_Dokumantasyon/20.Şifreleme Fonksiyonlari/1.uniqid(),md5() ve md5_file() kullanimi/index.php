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

    /*
	uniqid()	:	Mikrosaniye cinsinden geçerli zamana dayalı olarak belirtilen önek ile benzersiz / eşsiz bir değer üreterek / ürettiği değeri geriye döndürür.
	md5()		:	Belirtilecek olan içeriğin md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
	md5_file()	:	Belirtilecek olan dosyanın md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
	*/

    /* Temel Kullanım */

    $isim = "Yusuf";
    $islem = uniqid($isim);
    echo $islem . "<br><br>";

    $sifre = "yusufutku2734";
    $sifrele = md5($sifre);
    echo "Şifre: " . $sifre . "<br>";
    echo "md5 Şifre: " . $sifrele . "<br><br><br>";

    $dosya = "deneme.rar";
    $sonuc = md5_file($dosya);
    echo $sonuc . "<br>";









    ?>

</body>

</html>