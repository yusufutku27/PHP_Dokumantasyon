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
	Fonksiyon	:	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan küçük program parçacıklarına verilen isimdir.
	
	Kurallar	:
	1. Fonksiyon isimleri her zaman anlamlı olarak kullanılmalıdır.
	2. Fonksiyon isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
	3. Fonksiyon isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
	4. Fonksiyon isimleri hiçbir zaman bir rakam ile başlayamaz.
	5. Fonksiyon isimleri içerisinde hiçbir zaman boşluk, türkçe karkaterler ve özel karakterler kullanılamaz.
	6. Fonksiyon isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Fonksiyon isimleri hiçbir zaman birden fazla kez kullanılamaz.
	8. Fonksiyon isimleri küçük harf / büyük harf duyarlı değildir.
	9. Fonksiyonlar kapsama / etki alanı kurallarına tabidir.
	
	Yapısı		:
	function İsim(Paramtere veya Parametreler){
		Kod blokları
	}
	*/
    

    /* Temel Kullanım */
    
    function yaz() {
        $name="Yusuf";

        echo "İsmim: ".$name."<br><br>";
    }
    yaz();

    /* Örnek */

    function loop() {
        $deger=0;
        while ($deger<=10) {
           echo $deger."<br>";

           $deger+=2;
        }
    }
    loop();

















?>
</body>
</html>