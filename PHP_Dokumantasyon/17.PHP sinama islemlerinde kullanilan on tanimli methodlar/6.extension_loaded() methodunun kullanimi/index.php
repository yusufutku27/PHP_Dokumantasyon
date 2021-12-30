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
	extension_loaded()	:	Belirtilecek olan PHP eklentisinin yüklü olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/

    $EklentiAdi        =    "gd";

    if (extension_loaded($EklentiAdi)) {
        echo "Kontrol etmiş olduğunuz <b>" . $EklentiAdi . "</b> eklentisi sisteme yüklüdür.";
    } else {
        echo "Kontrol etmiş olduğunuz <b>" . $EklentiAdi . "</b> eklentisi sisteme yüklü değildir.";
    }

    phpinfo(INFO_MODULES);








    ?>
</body>

</html>