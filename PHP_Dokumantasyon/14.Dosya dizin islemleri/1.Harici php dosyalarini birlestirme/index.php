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
	include()			:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam eder.)
	include_once()		:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam eder.)
	require()			:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam edilmez.)
	require_once()		:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam edilmez.)
	*/

    include("dosya1.php");

    /* İndex Dosyası */

    echo "Merhaba Yusuf Nasılsın<br><br>";
    echo "Merhaba Yusuf Nasılsın<br><br>";
    echo "Merhaba Yusuf Nasılsın<br><br>";
    echo "Merhaba Yusuf Nasılsın<br><br>";
    echo "Merhaba Yusuf Nasılsın<br><br>";

    /* dosya1.php dosyasının içerigi */



    include("dosya1.php");
    
    require("dosya2.php");

    echo "Merhaba Ben İndex İçerigiyim";
    echo "Merhaba Ben İndex İçerigiyim";


    require_once("dosya1.php"); // en güzeli bu çünkü aynı dosya olsa kabul etmez ve hata oldugugunda bundan sonraki kodlar çaışmaz ve sen hemen hata oldugunu anlarsın











    ?>
</body>

</html>