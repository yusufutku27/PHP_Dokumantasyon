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
	array_merge()			:	Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır.
	array_merge_recursive()	:	Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır. (GELİŞMİŞ)
	*/
     

    /* Temel Örnek */

    $dizi1=array("yusuf","ahmet","hakan");
    $dizi2=array("mehmet","ali","mustafa");
    $yenidizi=array_merge($dizi1,$dizi2);

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";
    
    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "<pre>";
    print_r($yenidizi);
    echo "</pre>";
   
    //  Not: rakamsal anahtarlada aynı anahtarlı olanlar yeni dizide başka bir anahtar olarak eklebirler
    // Fakat alfanumerik yani alfabetik anahtarlar aynı olursa son dizideki deger alınır ve kullanılır.
    
    // array_merge ile birden fazla dizide birleştirilebilir sayısı fark etmez birleştirilir.

    /* Örnek */

    $a1=array("meyve","sebze");
    $a2=array("esya","elbise");
    $a3=array("aletler","edavatlar");
    $a4=array("pcler","arabalar");

    $newdizi=array_merge($a1,$a2,$a3,$a4);
    
    echo "<pre>";
    print_r($newdizi);
    echo "</pre>"."<hr>";
    

    /* alfanumerik olan aynı anahtara sahip olan degerler en sonki dizideki deger kabul edilir */

    /* Örnek */

    $b1=array("isim"=>"yusuf","soyisim"=>"utku","yas"=>20);
    $b2=array("isim"=>"mehmet","soyisim"=>"aslan","yas"=>25);

    $b3=array_merge($b1,$b2);

    echo "<pre>";
    print_r($b3);
    echo "</pre>"."<br><br><hr>";

    /* aynı anahtara sahip olan degerlerin hepsinin kullanılması için array_merge_recursive kullanılır
    bu fonksiyon aynı anahtara sahio olan degerleri alıp çok boyutlu bir dizi oluşutur ve oraya ekler
    anahtar yine aynı kalır,degerler oluşan çok boyutlu dizi içersindedir
    
    */

    /* Örnek */
    
    $c1=array("nesne"=>"esya","alet"=>"kumanda","renk"=>"siyah");
    $c2=array("nesne"=>"elbise","alet"=>"küvet","renk"=>"mavi");

    $c3=array_merge_recursive($c1,$c2);
    
    echo "<pre>";
    print_r($c1);
    echo "</pre>";

    echo "<pre>";
    print_r($c2);
    echo "</pre>";

    echo "<pre>";
    print_r($c3);
    echo "</pre>";


?>
</body>
</html>