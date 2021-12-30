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
	list()	:	Dizi içerisindeki eleman / elemanları değişkenlere atamak için kullanılır.
	*/
    
    /* Temel Örnek */
    
    $renkler=array("beyaz","siyah","turuncu","mavi","sarı");

    list($bir,$iki,$ucuncu,$dorduncu,$besinci)=$renkler;
    
    echo $bir."<br>";
    echo $iki."<br>";
    echo $ucuncu."<br>";
    echo $dorduncu."<br>";
    echo $besinci."<br><br><br>";

    /* İstersek bazı elamanları boş geçebiliriz her elamana degişken atamak zorunda degiliz */

    $meyveler=array("portakal","elma","armut","kiraz");

    list($a1, , ,$a2)=$meyveler; // elma ve armut degerini boş geçmiş oldum
    echo $a1."<br>";
    echo $a2."<br><br><br>";

    /* çok boyutlu dizilerde kullanımı */

    $isimler=array("mehmet","ali","yusuf",array("mustafa","serkan","halil",array("esra","seher")));

    list($i1,$i2, ,list($b1,$b2,$b3,list($c1,$c2)))=$isimler;

    echo $i1."<br>";
    echo $i2."<br>";
    echo $b1."<br>";
    echo $b2."<br>";
    echo $b3."<br>";
    echo $c1."<br>";
    echo $c2."<br>";







?>

</body>
</html>