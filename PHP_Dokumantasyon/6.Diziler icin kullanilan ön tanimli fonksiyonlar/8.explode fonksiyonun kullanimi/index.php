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
	explode()	:	Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.
	*/


    /* Temel Örnek */

    $deger="Yusuf Utku Mehmet Aslan";

    $sonuc=explode(" ",$deger);
    echo "Normal yazı hali: ".$deger;

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    /* Örnek */
    
    $meyveler="elma,armut,karpuz,mandalina,muz,kivi,kiraz,yedi dünya,lahana,turp,pırasa";

    $islem=explode(",",$meyveler);
    echo "Normal yazı hali: ".$meyveler;

    echo "<pre>";
    print_r($islem);
    echo "</pre>";
    
    // dizinin kaç elamanlı olucagına 3.parametre sayı girerek belirliyebiliriz

    $sebzeler="turp,marul,lahana,patlıcan,biber,kabak";

    echo "Normal yazı hali: ".$sebzeler;

    $info=explode(",",$sebzeler,3);  // 3.parametre dizinin kaç elemanlı olacagını belirledi
    
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    
    // 3.parametre -(negatif) sayı olursa o sayı kadar sondan elaman çıkarılır

    $kaldır=explode(",",$sebzeler,-2); // biber,kapak çıkarıldı
   
    echo "<pre>";
    print_r($kaldır);
    echo "</pre>";
    
   


?>
</body>
</html>