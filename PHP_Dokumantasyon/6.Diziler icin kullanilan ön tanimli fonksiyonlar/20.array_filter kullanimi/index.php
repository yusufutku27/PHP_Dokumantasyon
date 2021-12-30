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
	array_filter()	:	Dizinin içerisinde bulunan boş eleman veya elemanları filtre ederek yeni bir dizi oluşturmak için kullanılır.
	*/
    
    /* Temel Örnek */

    $isimler=array("yusuf","","ahmet","mustafa","","","","serkan");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $temizdizi=array_filter($isimler);

    echo "<pre>";
    print_r($temizdizi);  // anahtarlar korunur
    echo "</pre>";









?>
</body>
</html>