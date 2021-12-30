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
	array_reverse()		:	Dizi içerisinde bulunan eleman veya elemanların tersten sıralanmasını sağlayarak yeni bir dizi oluşturmak için kullanılır.
	*/
    
    /* Temel Örnek */
    
    $isimler=array("Yusuf","Serkan","Mustafa","Simay","Nursel");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $islem=array_reverse($isimler,true); // anahtar degerleri korunmaz ama true yazarsak korunur biz oluşturursak otomatik korunur.
   
    echo "<pre>";
    print_r($islem);
    echo "</pre>";










?>
</body>
</html>