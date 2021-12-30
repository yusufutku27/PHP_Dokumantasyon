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

   /* Temel Örnek */
 
function personel($isim,$soyisim) {

    
    function meslek($meslek,$yas) {
     echo "Meslek: ".$meslek."<br>"."Yaş: ".$yas;
    }
    return "İsim: ".$isim."<br>"."Soyisim: ".$soyisim."<br><br><br>";
}
define("NAME","Yusuf");
define("SURNAME","Utku");
$personel=personel(NAME,SURNAME);
echo $personel;
meslek("Full Stack Web-Developer",20);

















    ?>
</body>

</html>