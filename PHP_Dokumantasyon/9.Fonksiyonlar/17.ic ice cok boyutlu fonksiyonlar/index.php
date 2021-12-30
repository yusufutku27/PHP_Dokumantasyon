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

    /* Temel Önrek */

    function yaz()
    {
        echo "Bu İlk Fonksiyon" . "<br>";
        function deneme()
        {
            echo "Bu İkinci Fonksiyon" . "<br>";
        }
    }
    yaz();
    deneme();

    /* Örnek */

    function IslemSonucuMesaji()
    {

        function TamamMesaji()
        {

            return "İşleminiz Başarıyla Tamamlanmıştır.";
        }

        function HataMesaji()
        {

            return "İşlem Sırasında Beklenmeyen Bir Hata Oluştu.";
        }

        function UyariMesaji()
        {

            return "Dikkat; Yapılmaya Çalışılan İşlem Şuanda Aktif Değildir.";
        }
    }

    $Sonuc    =    "Tamam";

    if ($Sonuc == "Tamam") {
        IslemSonucuMesaji();
        $Mesaj    =    TamamMesaji();
        echo $Mesaj;
    } elseif ($Sonuc == "Dikkat") {
        IslemSonucuMesaji();
        $Mesaj    =    UyariMesaji();
        echo $Mesaj;
    } else {
        IslemSonucuMesaji();
        $Mesaj    =    HataMesaji();
        echo $Mesaj;
    }









    ?>
</body>

</html>