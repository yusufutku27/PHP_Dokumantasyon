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
	array_flip()	:	Dizi içerisinde bulunan anahtarların ve elemanlarının yer değişimi yapması için kullanılır.
	*/


    /* Temel Örnek */
    
    $dizi=array("anahtar1"=>"yusuf","anahtar2"=>"serkan","anahtar3"=>"mehmet");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $sonuc=array_flip($dizi);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";











?>
</body>
</html>