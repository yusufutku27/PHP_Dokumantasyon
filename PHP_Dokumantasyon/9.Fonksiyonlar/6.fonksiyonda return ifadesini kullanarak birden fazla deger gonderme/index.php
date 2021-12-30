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

    function oku()
    {
        $name = "Yusuf";
        $surname = "Utku";
        $age = 20;
        $color = "yeşil";

        return array($name, $surname, $age, $color);
    }

    $sonuc = oku();

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    list($isim, $soyisim, $yas, $renk) = $sonuc;

    echo "İsim: " . $isim . "<br>";
    echo "Soyisim: " . $soyisim . "<br>";
    echo "Yaş: " . $yas . "<br>";
    echo "Renk: " . $renk . "<br>";












    ?>
</body>

</html>