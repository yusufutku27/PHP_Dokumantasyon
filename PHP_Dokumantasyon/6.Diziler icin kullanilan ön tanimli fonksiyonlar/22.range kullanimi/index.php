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
	range()		:	Belirtilecek olan değer aralıkları doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/

    /* Temel Örnek */


    /* Başlangıç ve bitiş belirtere sayı oluşturmak */

    $sayilar=range(1,50);

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>"."<hr>";
    
    /* 3.parametrede kaçarlı artıcagını belirtebiliriz */
    
    $numara=range(0,100,5);

    echo "<pre>";
    print_r($numara);
    echo "</pre>"."<hr>";
    
    /* alfabede kullanılabilir a dan z ye tüm harfleri bastırmak (ingilizce alfabesi)  */

    $alfabe=range("a","z");

    echo "<pre>";
    print_r($alfabe);
    echo "</pre>"."<hr>";
    



?>
</body>
</html>