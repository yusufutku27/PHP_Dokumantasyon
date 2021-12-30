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


    // $Saat    =    14;

    // if (($Saat >= 0) and ($Saat <= 6)) {
    //     if ($Saat == 0) {
    //         echo "İyi Geceler. Saat şuanda 00:00";
    //     } elseif ($Saat == 1) {
    //         echo "İyi Geceler. Saat şuanda 01:00";
    //     } elseif ($Saat == 2) {
    //         echo "İyi Geceler. Saat şuanda 02:00";
    //     } elseif ($Saat == 3) {
    //         echo "İyi Geceler. Saat şuanda 03:00";
    //     } elseif ($Saat == 4) {
    //         echo "İyi Geceler. Saat şuanda 04:00";
    //     } elseif ($Saat == 5) {
    //         echo "İyi Geceler. Saat şuanda 05:00";
    //     } elseif ($Saat == 6) {
    //         echo "İyi Geceler. Saat şuanda 06:00";
    //     } else {
    //         echo "Bilinmeyen Bir Hata Oluştu.";
    //     }
    // } elseif (($Saat > 6) and ($Saat <= 9)) {
    //     if ($Saat == 7) {
    //         echo "Günaydın. Saat şuanda 07:00";
    //     } elseif ($Saat == 8) {
    //         echo "Günaydın. Saat şuanda 08:00";
    //     } elseif ($Saat == 9) {
    //         echo "Günaydın. Saat şuanda 09:00";
    //     } else {
    //         echo "Bilinmeyen Bir Hata Oluştu.";
    //     }
    // } elseif (($Saat > 9) and ($Saat <= 17)) {
    //     if ($Saat == 10) {
    //         echo "İyi Günler. Saat şuanda 10:00";
    //     } elseif ($Saat == 11) {
    //         echo "İyi Günler. Saat şuanda 11:00";
    //     } elseif ($Saat == 12) {
    //         echo "İyi Günler. Saat şuanda 12:00";
    //     } elseif ($Saat == 13) {
    //         echo "İyi Günler. Saat şuanda 13:00";
    //     } elseif ($Saat == 14) {
    //         echo "İyi Günler. Saat şuanda 14:00";
    //     } elseif ($Saat == 15) {
    //         echo "İyi Günler. Saat şuanda 15:00";
    //     } elseif ($Saat == 16) {
    //         echo "İyi Günler. Saat şuanda 16:00";
    //     } elseif ($Saat == 17) {
    //         echo "İyi Günler. Saat şuanda 17:00";
    //     } else {
    //         echo "Bilinmeyen Bir Hata Oluştu.";
    //     }
    // } elseif (($Saat > 17) and ($Saat <= 23)) {
    //     if ($Saat == 18) {
    //         echo "İyi Akşamlar. Saat şuanda 18:00";
    //     } elseif ($Saat == 19) {
    //         echo "İyi Akşamlar. Saat şuanda 19:00";
    //     } elseif ($Saat == 20) {
    //         echo "İyi Akşamlar. Saat şuanda 20:00";
    //     } elseif ($Saat == 21) {
    //         echo "İyi Akşamlar. Saat şuanda 21:00";
    //     } elseif ($Saat == 22) {
    //         echo "İyi Akşamlar. Saat şuanda 22:00";
    //     } elseif ($Saat == 23) {
    //         echo "İyi Akşamlar. Saat şuanda 23:00";
    //     } else {
    //         echo "Bilinmeyen Bir Hata Oluştu.";
    //     }
    // } else {
    //     echo "Saat Geçersiz Bir Değer İçeriyor.";
    // }
     
    /* Örnek */

    $deger=20;
    
    if($deger>=10 and $deger<=25) {
      if($deger>21) {
       echo "deger 21 den büyük";
      }
      elseif(($deger>15) and ($deger<=21)){
        echo "Deger 15 den büyük 21 den küçüktür";
      }
      else {
          echo "Deger 21 den küçüktür";
      }
    }
    else {
        echo "Deger 25 den büyük bir sayıdır";
    }

    ?>
</body>

</html>