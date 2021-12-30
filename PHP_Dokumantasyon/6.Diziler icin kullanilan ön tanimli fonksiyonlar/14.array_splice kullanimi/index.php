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
	array_splice()		:	Dizinin belli bölümlerini alıp, belli bölümlerini silip, eğer belirtilirse yeni elemanlarda ekleyerek yeni bir dizi oluşturmak için kullanılır.
	*/
    
    /* Temel Örnek */
    $dizi=array("meyve","portakal","armut","limon","kiraz","kivi","turp","kavun");
    array_splice($dizi,4); // diziden sadece 4 tanesi al diyorum başlangıçtan

    echo "<pre>";
    print_r($dizi);
    echo "</pre>"."<hr>";


    /* Örnek Degişkene atama */

    $isimler=array("yusuf","ahmet","veli","serkan","mustafa");
    
    $newdizi=array_splice($isimler,3);
    
    echo "<pre>";
    print_r($newdizi); // bu sefer ilk 3 tanesini baştan siliyor sona kadar olan kısmı yeni bir diziye atıyor
    echo "</pre>"."<hr>";
    
    // Not:ana dizinin yapısıda degişir.

    /*  Başlangıç ve bitiş kısmınıdanda elamanlar alabiliriz */
    /* Örnek */
    
    $esyalar=array("kumanda","lastik","top","ayakkabı","televizyon","telefon","tabak");

    array_splice($esyalar,2,-3);
    echo "<pre>";
    print_r($esyalar);
    echo "</pre>"."<hr>";
     
    /* Sona elaman ekleme */

    $renkler=array("mavi","kırmızı","sarı","yeşil","turuncu");
     
    array_splice($renkler,2,count($renkler),"siyah");
    
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
     
    /* araya elaman eklemek */

    array_splice($renkler,1,1,"pembe");

    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    
    /* sonuna veya arasına birden fazla eklemek için bir dizi oluşutup ilgili kısma eklememiz gerek */
     
    $ekrenkler=array("lila","mor","eflatun");

    array_splice($renkler,1,2,$ekrenkler);
     
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";

?>
</body>
</html>