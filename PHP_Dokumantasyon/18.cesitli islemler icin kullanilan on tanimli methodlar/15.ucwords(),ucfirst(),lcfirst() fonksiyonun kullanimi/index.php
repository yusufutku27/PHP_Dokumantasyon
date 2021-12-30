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
	ucwords()	:	Belirtilecek olan içerikte bulunan tüm kelimelerin ilk harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	ucfirst()	:	Belirtilecek olan içeriğin ilk harfini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	lcfirst()	:	Belirtilecek olan içeriğin ilk harfini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	*/

    /* Temel Kullanım */

    $kelime = "yusuf utku";
    $sonuc = ucwords($kelime);
    echo $sonuc . "<br>";

    $isim = "mustafa";
    $islem = ucfirst($isim);
    echo $islem . "<br>";

    $deger = "MEHMET";
    $outup = lcfirst($deger);
    echo $outup;








    ?>
</body>

</html>