<?php
session_start();
ob_start();
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];

if($ad!=="" and $soyad!=="") {
$_SESSION["ad"]=$ad;
$_SESSION["soyad"]=$soyad;

echo "Hoşgeldiniz: ".$_SESSION["ad"];
echo "<a href='index.php'> Forma Dön</a>";

}
else {
    header("Location:index.php?durum=lutfendoldurun");
}












?>