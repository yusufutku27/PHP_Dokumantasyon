<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php
   
   $isimler=array("Yusuf","Mehmet","Ali");
   $meyveler=array("Elma","Armut","Kiraz","Limon");

   $sonuc=$isimler + $meyveler; // Bu şekilde dizileri birleştiririz ama anahtar çakışması oldugundan dolayı
                                // herzaman ilk diziyi alır ama tüm anahtarlar farklı olur ise o zaman birleşir

   echo "<pre>";
   print_r($sonuc);
   echo "</pre>";
    
   /* Tüm anahtarlar farklı olursa birleşir */
   
   $sayı=array(0=>0,1=>1,2=>2);
   $sayılar=array(3=>3,4=>4,5=>5);

   $degerler=$sayı + $sayılar;

   echo "<pre>";
   print_r($degerler);
   echo "</pre>";



?>

</body>
</html>