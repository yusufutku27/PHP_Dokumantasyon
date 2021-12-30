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

    function personel($isim, $soyisim, $yas)
    {
        return "İsim: " . $isim . "<br>" . "Soyisim: " . $soyisim . "<br>" . "Yaş: " . $yas."<br><br>";
    }
    
    $personel1=personel("Yusuf","Utku",20);
    $personel2=personel("Mehmet","Aslan",35);
    $personel3=personel("Mustafa","İsabaş",21);
    echo $personel1;
    echo $personel2;
    echo $personel3;
    














    ?>
</body>

</html>