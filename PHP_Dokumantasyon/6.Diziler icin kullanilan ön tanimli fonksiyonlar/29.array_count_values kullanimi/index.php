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
	array_count_values()	:	Dizi içerisinde bulunan eleman veya elemanların kaçar defa tekrarlandığını bulmak için kullanılır.
	*/

    /* Temel Örnek */

    $isimler=array("yusuf","ahmet","ali","furkan","yusuf","serkan","yusuf","ahmet","ali","yusuf");

    $tekrarsayisi=array_count_values($isimler);

    echo "<pre>";
    print_r($tekrarsayisi);
    echo "</pre>";
   
    
















?>
</body>
</html>