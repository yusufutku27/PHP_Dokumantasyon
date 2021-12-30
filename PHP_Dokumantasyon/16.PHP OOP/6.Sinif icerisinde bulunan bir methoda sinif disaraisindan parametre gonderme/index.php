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

    // Not: sınıf içerisindeki methodlar mutalaka public olmalı yoksa parametre gönderemeyiz

   class Bilgi {
       public function oku($isim,$soyisim) {
          $yaz= $isim." ".$soyisim;
          echo $yaz;
       }
   }
   $nesne=new Bilgi;

   $nesne->oku("Yusuf","Utku");












?>
</body>
</html>