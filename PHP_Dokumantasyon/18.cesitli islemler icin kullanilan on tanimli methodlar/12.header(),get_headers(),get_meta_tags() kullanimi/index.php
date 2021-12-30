<?php
// header("Expires: Mon, 01 Jan 2018 00:00:00 GMT"); // İlgili tarihte web sayfamı güncelle
// header("Cache-Control: no-cache"); // Sayfamı ön bellege alma herzaman güncel tut
// header("Pragma: no-cache"); // Sayafamı ön bellege alma

//header("Content-Type: text/html; charset=UTF-8"); // Genel Karakter Setidir.
// header("Content-Type: text/html; charset=ISO-8859-9"); // Türkçe Karakter Setidir.
// header("Content-Type: text/html; charset=windows-1254"); // Windows İçin Türkçe Karakter Setidir.
?>

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

    /*
	header()		:	Belirtilecek olan içerik dahilinde, istemciye işlenmiş HTTP üst bilgisi iletmek için kullanılır.
	get_headers()	:	Belirtilecek olan URL doğrultusunda HTML isteğine karşı sunucunun verdiği tüm yanıtları kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	get_meta_tags()	:	Belirtilecek olan URL doğrultusunda HTML dosyasında bulunan ve name değerine sahip tüm meta etiketlerini kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/


    /* Temel Kullanım */

    // header("Location:deneme.php"); 
    // header("refresh:10 url=deneme.php"); // 10 saniye bekle ve deneme.php sayfasına yönlen
    // exit(); // her header işleminden sonra mutlaka exit() veya die() methodu kullan bu daha saglıklı olur


    // get_meta_tags()

    $adres = "https://www.sahibinden.com/";
    $sonuc = get_meta_tags($adres);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";







    ?>
</body>

</html>