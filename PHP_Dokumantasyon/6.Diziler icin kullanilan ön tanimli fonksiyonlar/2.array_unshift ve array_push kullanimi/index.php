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
	array_unshift()		:	Dizinin en başına yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	array_push()		:	Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	*/
    
    /* Temel Örnek */
    
    echo "<h1 style='text-align:center;'>array_unshift kullanımı</h1><br><hr>";

    $isimler=array("isim"=>"yusuf","soyad"=>"mehmet");  // ekleme yapsak bile anahtarlar sabit kalır
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    array_unshift($isimler,"ali","mustafa");
   
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
     
    /* array_unshift fonksiyonunu degiskene atarsak o zaman eklediginide sayararak bize eleman sayısını verir */

    $sayi=array_unshift($isimler,"rıza","halil"); // bize elaman sayısını verir ve aynı  zamanda eklemede yapar

    echo "Sayı: ".$sayi;
  
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    /* Çok Boyutlu dizilerde kullanımı */


    $meyveler=array("elma","kiraz",array("armut","karpuz","portakal"));

    array_unshift($meyveler,"limon","üzüm");

    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";
    
    array_unshift($meyveler[4],"mandalina","turp");

    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";

    $islem=array_unshift($meyveler[4],"vişne");

    echo "İçteki dizinin elaman sayısı: ".$islem;
   
   echo "<hr><hr><hr><br><br>";
   
   echo "<h1 style='text-align:center;'>array_push kullanımı</h1><br><hr>";
   
   // array_push()		:	Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
   
   /* Temel Örnek */

   $rakamlar=array(0,1,2,3);

   echo "<pre>";
   print_r($rakamlar);
   echo "</pre>";

   array_push($rakamlar,4,5,6);
   
   echo "<pre>";
   print_r($rakamlar);
   echo "</pre>";

   $dizisayisi=array_push($rakamlar);
   echo "Elaman Sayısı: ".$dizisayisi;

   // array_unshift için geçerli olan diger örnekler bundada geçerlidir




?>
</body>
</html>