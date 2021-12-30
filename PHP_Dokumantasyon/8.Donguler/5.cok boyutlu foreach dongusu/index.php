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

    $dizi = array("Yusuf", "Mehmet", "Serkan", array("Mustafa", "Ali", "Ercan", array("Seher", "Yasemin")), "Süleyman", "Ugur");

    foreach ($dizi as $elaman) {


        if (is_array($elaman)) {
            foreach ($elaman as $deger) {
                if (is_array($deger)) {
                    foreach ($deger as $sonuc) {
                        echo $sonuc . "<br>";
                    }
                } else {
                    echo $deger . "<br>";
                }
            }
        } else {
            echo $elaman . "<br>";
        }
    }





    ?>
</body>

</html>