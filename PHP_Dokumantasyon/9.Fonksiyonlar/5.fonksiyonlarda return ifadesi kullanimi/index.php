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
	return 	:	Fonksiyondan değer döndürmek için kullanılır.
	*/

    /* Temel Örnek */

    function yaz()
    {
        $name = "Yusuf Utku";
        return $name;
    }
    $sonuc = yaz();

    echo "Benim İsmim: " . $sonuc."<br><br>";

    function oku()
    {
        $isim = "Yusuf";
        $soyisim = "Utku";
        return $isim ." ". $soyisim;
    }

    $islem = oku();

    echo $islem;







    ?>
</body>

</html>