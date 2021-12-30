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

    function personel($kullanici_adi = "kullanici_default", $sifre = "şifre_default")
    {

        if (($kullanici_adi == "kullanici_default") and ($sifre == "şifre_default")) {
        } else {
            return "Kullanıcı Adı: " . "<strong>$kullanici_adi</strong>" . "<br>" . "Şifre: " . "<b>$sifre</b>" . "<br><br>";
        }
    }

    $personel1 = personel("yspraym", "Yusuf&&utku2734");

    echo $personel1;











    ?>
</body>

</html>