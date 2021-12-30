<?php

 
$gelendosya=$_FILES["dosya"];

echo "<pre>";
print_r($gelendosya);
echo "</pre>";

foreach ($gelendosya["name"] as $anahtar=>$elaman) {

   $dosyaname=$elaman;
   $tmpname=$gelendosya["tmp_name"][$anahtar];

   define("YOL","resimler/");
   $yolad=YOL.$dosyaname;

   if(move_uploaded_file($tmpname,$yolad)) {
     echo "<img src='{$yolad}' >";
   }
   else {
       echo "Yükleme Başarısız...!<br>";
   }
}


























?>