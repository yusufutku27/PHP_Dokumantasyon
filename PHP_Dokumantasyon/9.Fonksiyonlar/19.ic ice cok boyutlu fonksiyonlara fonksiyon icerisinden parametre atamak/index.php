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

    /* Temel Örnek */

    function kisi($isim, $soyisim)
    {

        function personel($isim, $soyisim)
        {
            echo "İsim: " . $isim . "<br>" . "Soyisim: " . $soyisim . "<br><br>";
        }

        personel("Mehmet", "Aslan");

        echo "İsim: " . $isim . "<br>" . "Soyisim: " . $soyisim."<br><br><br>";
    }

    kisi("Yusuf", "Utku");


    function isimyaz($isim)
    {
        function soyisimyaz($soyisim)
        {
            function yasyaz($yas)
            {
                return $yas;
            }
            $yas=yasyaz(20);
            return array($soyisim,$yas);
        }
        $soyisim=soyisimyaz("Utku");
        return "İsim: ".$isim."<br>"."Soyisim: ".$soyisim[0]."<br>"."Yaş: ".$soyisim[1]."<br>";
        
    }
    $personel=isimyaz("Yusuf");

    echo $personel;













    ?>
</body>

</html>