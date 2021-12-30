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
	strlen()			:	Belirtilecek olan içeriğin karakter sayısını bularak, bulduğu değeri geriye döndürür.
	mb_strlen()			:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak karakter sayısını bularak, bulduğu değeri geriye döndürür.
	substr_count()		:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
	mb_substr_count()	:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
	str_word_count()	:	Belirtilecek olan içeriğin kelime sayısını bularak, bulduğu değeri geriye döndürür.
	*/

    /* Temel Kullanım */

    $isim = "Yusuf Utku";
    $karaktersayisi = mb_strlen($isim);
    echo $isim . "<br>";
    echo "Karakter Sayısı: " . $karaktersayisi . "<br><br>";

    /* kelime sayısını bulma */

    $mesaj = "Lorem ipsum dolor sit amet.";
    $islem = str_word_count($mesaj);
    echo $mesaj . "<br>";
    echo "Kelime Sayısı: " . $islem . "<br>";









    ?>
</body>

</html>