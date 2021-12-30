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
	if			=	Eğer.
	elseif		=	Değilse eğer.
	else		=	Değilse.
	
	Yapısı :
	
	if(Koşul veya Koşullar){
		Kod blokları
	}elseif(Koşul veya Koşullar){
		Kod blokları
	}else{
		Kod blokları
	}
	*/

	/* Temel Örnek */

	// if (5 < 10) {

	// 	echo "İf blogu çalıştı" . "<br>";
	// } else {
	// 	echo "if blogu çalışmadı" . "<br>";
	// }




	/* Birden fazla koşul için elseif kullanırız */

	// if (5 > 10) {
	// 	echo "if blogu çalıştı";
	// } elseif (10 < 20) {
	// 	echo "elseif blogu çalıştı";
	// } else {
	// 	echo "else blogu çalıştı";
	// }




	/* Çok kez elseif ile koşul denetimi yaparız */

	// if (10 > 20) {
	// 	echo "if blogu çalıştı";
	// } elseif (3 < 1) {
	// 	echo "1.elseif blogu çalıştı";
	// } elseif (10 < 1) {
	// 	echo "2.elseif blogu çalıştı";
	// } elseif (8 < 10) {
	// 	echo "3.elseif blogu çalıştı";
	// } elseif (120 < 111) {
	// 	echo "4.elseif blogu çalıştı";
	// } else {
	// 	echo "else blogu çalıştı";
	// }




	/* Asıl degişkenlerdeki veriler ile kontrol saglarız */

	// $name = "yusuf";
	// $isim = "Mehmet";
	// $surname = "Utku";

	// if ($name == "Mehmet") {
	// 	echo "if blogu çalıştı";
	// } elseif ($isim == "Yusuf") {
	// 	echo "elseif blogu çalıştı";
	// } elseif ($surname == "Utku") {

	// 	echo "2.elseif blogu çalıştı";
	// } else {
	// 	echo "hiçbiri çalışmadı";
	// }



	/* and (ve) baglacı ile kullanımı */

	// $Saat		=	11;

	// if (($Saat >= 0) and ($Saat <= 6)) {
	// 	echo "İyi geceler.";
	// } elseif (($Saat > 6) and ($Saat <= 9)) {
	// 	echo "Günaydın.";
	// } elseif (($Saat > 9) and ($Saat <= 17)) {
	// 	echo "İyi günler.";
	// } elseif (($Saat > 17) and ($Saat <= 23)) {
	// 	echo "İyi akşamlar.";
	// } else {
	// 	echo "Belirtilen değer ( {$Saat} ) bir saat dilimi değildir.";
	// }
     


	/* or (veya) baglacı kullanımı */

	$Saat		=	20;
	
	if(($Saat == 0) or ($Saat == 1) or ($Saat == 2) or ($Saat == 3) or ($Saat == 4) or ($Saat == 5) or ($Saat == 6)){
		echo "İyi geceler.";
	}
	elseif(($Saat == 7) or ($Saat == 8) or ($Saat == 9)){
		echo "Günaydın.";
	}elseif(($Saat == 10) or ($Saat == 11) or ($Saat == 12) or ($Saat == 13) or ($Saat == 14) or ($Saat == 15) or ($Saat == 16) or ($Saat == 17)){
		echo "İyi günler.";
	}elseif(($Saat == 18) or ($Saat == 19) or ($Saat == 20) or ($Saat == 21) or ($Saat == 22) or ($Saat == 23)){
		echo "İyi akşamlar.";
	}else{
		echo "Belirtilen değer ( {$Saat} ) bir saat dilimi değildir.";
	}


	?>
</body>

</html>