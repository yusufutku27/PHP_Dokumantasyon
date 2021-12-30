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
    $name = "Yusuf";
    function yaz()
    {
        global $name; // global alandaki $name degişkenini fonksiyon içinde kullandık
        echo $name;
    }
    yaz();
















    ?>
</body>

</html>