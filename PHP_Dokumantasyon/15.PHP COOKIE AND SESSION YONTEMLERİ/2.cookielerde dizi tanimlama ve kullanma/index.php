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


    /* Temel Kullanım */

    setcookie("Personel[ad]", "Yusuf");
    setcookie("Personel[soyad]", "Utku");
    setcookie("Personel[yas]", 20);

    setcookie("Sepet[ad]","ayakkabi");
    setcookie("Sepet[miktar]",20);
    setcookie("Sepet[tutar]",120);
     
    // Oluşturdugumuz cookie dizisine tek tek ulaşabiliriz aşagıdaki gibi


    echo "İsim: ".$_COOKIE["Personel"]["ad"]."<br>";
    echo "Soyisim: ".$_COOKIE["Personel"]["soyad"]."<br>";
    echo "Yaş: ".$_COOKIE["Personel"]["yas"]."<br><br>";

    echo "Sepet Ad: ".$_COOKIE["Sepet"]["ad"]."<br>";
    echo "Seper Miktar: ".$_COOKIE["Sepet"]["miktar"]."<br>";
    echo "Sepet Tutar: ".$_COOKIE["Sepet"]["tutar"]."<br>";

















    ?>
</body>

</html>