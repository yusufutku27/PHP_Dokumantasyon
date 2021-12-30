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
	
	if(Koşul veya Koşullar):
		Kod blokları
	elseif(Koşul veya Koşullar):
		Kod blokları
	else:
		Kod blokları
	endif;
	*/


    if ((5 > 10) and (10 > 5)) :
        echo "if blogu çalıştı";
    elseif (10 > 20) :
        echo "elseif blogu çalıştı";
    else :
        echo "else blogu çalıştı";
    endif;





    ?>
    <h1><?php if(5>10):echo "if blogu";elseif(10>7):echo "elseif blogu";else:echo "else blogu";endif; ?></h1>
</body>

</html>