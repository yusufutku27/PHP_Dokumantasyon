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
	strip_tags()	:	Belirtilecek olan içerikte bulunabilecek olan tüm HTML kodlarını temizleyerek, temizlenmiş olan değeri geriye döndürür.
	*/

    /* Temel Kullanım */

    $Deger        =    "<h1>Extra Eğitim</h1><div>Volkan Alakent</div><div>A'dan Z'ye PHP Görsel Eğitim Seti</div>";
    echo $Deger . "<br /><br />";


    $Sonuc        =    strip_tags($Deger);
    echo $Sonuc;










    ?>
</body>

</html>