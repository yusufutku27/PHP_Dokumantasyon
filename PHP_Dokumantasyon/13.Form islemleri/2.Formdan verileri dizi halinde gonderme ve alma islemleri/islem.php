<?php


$adsoyad=$_GET["adsoyad"];
$hobiler=$_GET["hobiler"];

echo "İsim Soyisim: ".$adsoyad."<br>";
echo "<pre>";
print_r($hobiler);
echo "</pre>";

foreach ($hobiler as $deger) {
   echo $deger."<br>";
}
