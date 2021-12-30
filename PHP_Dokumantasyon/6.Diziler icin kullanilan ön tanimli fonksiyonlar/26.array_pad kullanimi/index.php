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
	array_pad()		:	Dizinin eleman veya elemanlar sayısını baz alarak, belirtilecek olan değerler doğrultusunda baştan veya sondan doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/
    
    /* Temel Örnek */

    $isimler=array("yusuf","ali","mehmet");

    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    
    $yenidizi=array_pad($isimler,15,"serkan"); // 1.parametre kaç elamanlı olacagını belirtir
   
    echo "<pre>";
    print_r($yenidizi);
    echo "</pre>";





?>
</body>
</html>