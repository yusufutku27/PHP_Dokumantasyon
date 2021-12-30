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
	touch()		:	Belirtilecek olan değer doğrultusunda, yeni bir dosya oluşturmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	unlink()	:	Belirtilecek olan değer doğrultusunda, dosya silmek için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	copy()		:	Belirtilecek olan değer doğrultusunda, dosya kopyalamak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	rename()	:	Belirtilecek olan değer doğrultusunda, dosyayı yada dizini yeniden adlandırmak veya taşımak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	*/

    /* Sadece Dosya Oluşturmak */

    // $dosya = "belge.txt";
    // $olustur = touch($dosya);
    // if ($olustur == 1) {
    //     echo "Dosyanız Oluşturuldu<br>";
    // } else {
    //     "Dosya Oluşturulamadı..!";
    // }

    /* bir klasör oluşturup içine dosya oluşturmak */


    $file = "main.html";
    $dizin = "belgeler/";
    $birlestir = $dizin . $file;
    $islem = touch($birlestir);

    if ($islem == 1) {
        echo "Dosyanız başarıyla oluşturuldu.<br>";
    } else {
        "Dosyanız oluşmadı Hata..!<br>";
    }

    /* unlink silme işlemi */

    $deletedosya = "belge.txt";
    unlink($deletedosya);

    $sil = "ExtraEgitim.txt";
    $sonuc = unlink($sil);

    if ($sonuc == 1) {
        echo "Dosya Silindi<br>";
    } else {
        echo "Dosya Silme Başarısız<br>";
    }

    /* dizin içerisindeki dosyayı silmek */

    $yol = "belgeler/";
    $sildosya = "main.docx";
    $silmek = $yol . $sildosya;

    $mesaj = unlink($silmek);
    if ($mesaj == 1) {
        echo "Dosya Silindi<br>";
    } else {
        echo "Dosya Silme Başarısız<br>";
    }

    $newdosya="yeni.txt";
    touch($newdosya);

     
    /* copy methodu */
     
    $copyfile="yeni.txt";
    $newcopy="yusuf.txt";
    copy($copyfile,$newcopy);







    ?>
</body>

</html>