<?php




 $gelendosya=$_FILES["dosya"];

 $dosyaisim=$gelendosya["name"];
 $tmpdosyaisim=$gelendosya["tmp_name"];


echo "Dosya İsim: ". $dosyaisim."<br>";
echo "Geçici İsim. ".$tmpdosyaisim;
