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
	array_unique()		:	Dizinin içerisinde bulunan ve tekrarlanan elemanların fazla olanlarını silerek yeni bir dizi oluşturmak için kullanılır.
	*/

    /* Temel Örnek */


    $isim=array("yusuf","ahmet","serkan","yusuf","yusuf","mustafa","ali","serkan","mahmut","ahmet");

    echo "<pre>";
    print_r($isim);
    echo "</pre>";

    $tekrarlananlarisil=array_unique($isim);
   
    echo "<pre>";
    print_r($tekrarlananlarisil);  // ahantarlar korunur
    echo "</pre>";
    
    




?>
    
</body>
</html>