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

    /*
	unset()		:	Belirtilecek olan değişkeni, dizi anahtarını ve elemanını veya session'ı (oturumu) silmek / yok etmek için kullanılır.
	*/

    /* Temel Kullanım */

    $name = "Yusuf";
    echo "İsim: " . $name . "<br>";
    unset($name);
    echo $name;

    $isimler = array("isim" => "Yusuf", "name" => "ahmet", "ad" => "Mustafa");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    unset($isimler["name"]);

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";






    ?>
</body>

</html>