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

    function Bir()
    {
        $Sayi    =    0;
        $Sayi    =    $Sayi + 1;

        echo "Sayı Değeri : " . $Sayi . "<br />";
    }

    Bir();
    Bir();
    Bir();
    Bir();
    Bir();

    echo "<br /><br />";


    function Iki()
    {
        static $Rakam    =    0;   // yeni degeri degişkende tutmak için static kullanırız
        $Rakam    =    $Rakam + 1;

        echo "Sayı Değeri : " . $Rakam . "<br />";
    }

    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();













    ?>
</body>

</html>