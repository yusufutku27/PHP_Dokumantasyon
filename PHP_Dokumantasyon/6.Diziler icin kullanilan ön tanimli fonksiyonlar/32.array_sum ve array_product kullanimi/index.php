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
	array_sum()		:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda tüm elemanların toplamını almak için kullanılır.
	array_product()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda tüm elemanların çarpımını almak için kullanılır.
	*/
   
    /* Temel Örnek */
    
    /* Tüm elamanları toplama ve çarpma */
    
    $numaralar=array(2,6,8,10);
     
    $toplam=array_sum($numaralar);
    $çarpim=array_product($numaralar);

    echo "Toplam: ".$toplam."<br><br>";
    echo "Çarpım: ".$çarpim."<br>";









?>
</body>
</html>