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
	Yapısı :
	
	switch():
		case Koşul:
			Kod blokları
		break;
		default:
			Kod blokları
	endswitch;
	*/

    $deger = 3;

    switch ($deger):
        case $deger == 1:
            echo "Deger: 1";
            break;
        case $deger == 2:
            echo "Deger: 2";
            break;
        case $deger == 3:
            echo "Deger: 3";
            break;
        default:
            echo "Geçersiz deger";
    endswitch;














    ?>
</body>

</html>