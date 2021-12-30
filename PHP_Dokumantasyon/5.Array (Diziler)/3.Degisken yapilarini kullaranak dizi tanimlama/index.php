<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

   /* Temel Örnek */   

   $isim[]="yusuf";
   $isim[]="ahmet";
   $isim[]="ali";
   
   echo "<pre>";
   print_r($isim);
   echo "</pre>";

  /* İndis degeri atama */

  $personel["isim"]="yusuf";
  $personel["soyisim"]="utku";
  $personel["yas"]=20;

  echo "<pre>";
  print_r($personel);
  echo "</pre>";
  
  echo "Ben ".$personel["isim"]." ".$personel["soyisim"]." yaşım ".$personel["yas"]."'dir.";



?>
</body>
</html>