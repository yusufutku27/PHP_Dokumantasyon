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
	lcg_value()		:	0 ila 1 arasında rastgele bir onlıklı sayı üreterek, ürettiği değeri geriye döndürür.
	*/

    $uret=ceil(lcg_value()*10);
    echo "Sayı: ".$uret."<br><br>";



















    ?>
</body>

</html>