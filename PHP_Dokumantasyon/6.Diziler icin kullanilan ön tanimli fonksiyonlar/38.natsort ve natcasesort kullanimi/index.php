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
	natsort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve doğal sıralama şeklinde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	natcasesort()	:	Dizinin elemanlarını doğal sıralama şeklinde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	*/
 
     /* Temel Örnek */
     
     
    	
	$ResimlerBir		=	array("Resim273", "Resim1", "Resim3", "Resim112", "Resim2", "Resim2645", "Resim14", "Resim372");
	$ResimlerIki		=	array("Resim273", "Resim1", "Resim3", "Resim112", "Resim2", "Resim2645", "Resim14", "Resim372");
	
	echo "<pre>";
	print_r($ResimlerBir);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($ResimlerIki);
	echo "</pre><br />";
	
	sort($ResimlerBir);
	
	echo "Standart Sıralama<br />";
	echo "<pre>";
	print_r($ResimlerBir);
	echo "</pre><br />";
	
	natsort($ResimlerIki);
	
	echo "Doğal Sıralama<br />";
	echo "<pre>";
	print_r($ResimlerIki);
	echo "</pre><br />";










?>
</body>
</html>