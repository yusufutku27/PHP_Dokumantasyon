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
	setcookie()		:	Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak veya silmek için kullanılır.
	Parametreler	:	1. Parametre : Çerez Adı, 2. Parametre : Çerez Değeri, 3. Parametre : Çerez Yaşam Süresi
	*/

    /* Temel Kullanım */

    // setcookie("name", "Mehmet", time() + 3600);
    // setcookie("surname", "Aslan", time() + 3600);

    // echo "İsim: " . $_COOKIE["name"] . "<br>";
    // echo "Soyisim: " . $_COOKIE["surname"] . "<br>";
    // echo "<pre>";
    // print_r($_COOKIE);
    // echo "</pre>";


    // oluşşan çerezleri degişkene aktarabilirim ve sonra istedigim yerde kullanabilirim
    // $isim = $_COOKIE["name"];
    // $soyisim = $_COOKIE["surname"];

    // cookilerde isimler aynı olunca herzaman sondaki cookinin degerini okur (degişkenlerdeki gibi)

    // setcookie("name","Yusuf");
    // setcookie("surname","Utku");



    /* Bu sayfada cookie oluşturma */

    setcookie("isim", "mehmet", time() + 3600);
    setcookie("soyisim", "aslan", time() + 3600);
   
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";



    ?>

</body>

</html>