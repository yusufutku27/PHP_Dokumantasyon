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

    $meyveler=array("elma","armut",array("ahmet","hakan","yusuf",array("sehpa","masa","sandalye")));

   echo "<pre>";
   print_r($meyveler);
   echo "</pre>";

   echo $meyveler[0]."<br>";
   echo $meyveler[1]."<br>";
   echo $meyveler[2][2]."<br>";
   echo "<pre>";
   print_r($meyveler[2][3]);
   echo "</pre>";
   echo $meyveler[2][3][1];
  
   $sonuc=$meyveler[2][3];

   echo "<pre>";
   print_r($sonuc);
   echo "</pre>";

   $meyveler[2][0]="mehmet";
   echo "<pre>";
   print_r($meyveler);
   echo "</pre>";




?>
</body>
</html>