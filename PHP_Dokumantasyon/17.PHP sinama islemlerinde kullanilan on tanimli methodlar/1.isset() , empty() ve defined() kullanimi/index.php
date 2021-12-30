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
	defined()	:	Belirtilecek olan sabitin varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	isset()		:	Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	empty()		:	Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın daha önceden tanımlanmamış olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/


    /* defined() kullanımı */

    define("NAME", "Yusuf");
    const SURNAME = "Utku";
    $kontrol = defined("SURNAME");

    if ($kontrol == true) {
        echo "NAME isminde bir sabitiniz vardır.<br><br><hr>";
    } else {
        echo "NAME isminde bir sabitiniz yoktur.<br><br><hr>";
    }


    /* isset() kullanımı */

    $isim = "Yusuf";
    $sonuc = isset($isim);

    if ($sonuc == true) {
        echo '$isim isminde bir degişken vardır.<br><br>';
    } else {
        echo '$isim isminde bir degişken yoktur.<br><br>';
    }

    $diziler=array("Yusuf","Mehmet","Ali");
   
    $outup=isset($diziler[2]);

    if ($outup == true) {
        echo '$diziler[2] isminde bir anahtar vardır.<br><br><hr>';
    } else {
        echo '$diziler[2] isminde bir anahtar yoktur.<br><br><hr>';
    }
    
    /* empty() kullanımı */
   
    if(empty($adsoyad)==true) {  // adsoyad isminde bir degişken olmadıgı için true döner
   echo "Evet bu isimde bir degişken yoktur."."<br>";
    }
    else {
        echo "Bu isimde bir degişken vardır."."<br>";
    }


    ?>
</body>

</html>