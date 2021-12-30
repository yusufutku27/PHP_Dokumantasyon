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
	continue	:	Döngünün belli bir kısmının atlanarak, çalışmakta olan döngünün bir sonraki işleme devam etmesi için kullanılır.
	*/

    /* Temel Örnek */
    
    for($x=1;$x<=10;$x++) {
       
        if(($x>=3) and ($x<=5)) {
           continue;
        }
       echo $x."<br>";
    }

    













    ?>
</body>

</html>