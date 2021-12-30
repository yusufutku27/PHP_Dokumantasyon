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

    function ParaBirimi($Birim, $Tutar)
    {
        if ($Birim == "Türk Lirası") {
            $Kur    =    1;
        } elseif ($Birim == "Amerikan Doları") {
            $Kur    =    4;
        } elseif ($Birim == "Euro") {
            $Kur    =    5;
        } else {
            $Kur    =    0;
        }

        return Hesapla($Kur, $Tutar);
    }

    function Hesapla($KurBilgisi, $TutarBilgisi)
    {
        $Sonuc    =    $KurBilgisi * $TutarBilgisi;
        echo "Girilen Tutarın TL Karşılığı : " . $Sonuc;
    }

    ParaBirimi("Amerikan Doları", 1000);



    ?>
</body>

</html>