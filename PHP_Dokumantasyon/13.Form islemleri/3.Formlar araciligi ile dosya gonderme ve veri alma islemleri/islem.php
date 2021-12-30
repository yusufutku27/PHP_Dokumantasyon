<?php

 
 $gelendosya= $_FILES["dosya"];

 $dosyaninismi=$_FILES["dosya"]["name"];
 $dosyaningecicidizini=$gelendosya["tmp_name"];

 $yol="resimler/";
 $adyol=$yol.$dosyaninismi;
 if(move_uploaded_file($dosyaningecicidizini,$adyol)) {
   echo "Dosyanız: "."<br>";
   echo "<img src='{$adyol}'>";

 
 }
 else {
     echo "Dosya Yükleme Başarısız.";
 }
















?>