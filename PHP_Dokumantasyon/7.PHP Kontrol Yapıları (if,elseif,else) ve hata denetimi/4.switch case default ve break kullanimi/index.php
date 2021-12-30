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
	switch		=	Koşul başlat.
	case		=	Koşul kontrol et.
	break		=	Koşul kontrolünü sonlandır.
	default		=	Koşul olumsuzlukları sonucu.
	
	Yapısı :
	
	switch(Koşul){
		case Kontrol ifadesi:
			Kod blokları
		break;
		default:
			Kod blokları
	}
	
	*/

	/* Temel Kullanım */

	$deger = 2;

	switch ($deger) {
		case 1:
			echo "Deger: 1";
			break;
		case 2:
			echo "Deger: 2"."<br><br>";
			break;
		case 3:
			echo "Deger: 3";
			break;
		case 4:
			echo "Deger: 4";
			break;
		case 5:
			echo "Deger: 5";
			break;
		default:
			echo "Geçersiz Deger";
	}


	/* Örnek */

	$ay = "Haziran";

	switch ($ay) {
		case $ay == "Ocak":
			echo "Ay: Ocak";
			break;
		case $ay == "Şubat":
			echo "Ay: Şubat";
			break;
		case $ay == "Mart":
			echo "Ay: Mart";
			break;
		case $ay == "Nisan":
			echo "Ay: Nisan";
			break;
		case $ay == "Mayıs":
			echo "Ay: Mayıs";
			break;
		case $ay == "Haziran":
			echo "Ay: Haziran";
			break;
		case $ay == "Temmuz":
			echo "Ay: Temmuz";
			break;
		case $ay == "Agustos":
			echo "Ay: Agustos";
			break;
		case $ay == "Eylül":
			echo "Ay: Eylül";
			break;
		case $ay == "Ekim":
			echo "Ay: Ekim";
			break;
		case $ay == "Kasım":
			echo "Ay: Kasım";
			break;
		case $ay == "Aralık":
			echo "Ay: Aralık";
			break;
		default:
			echo "Geçersiz Ay";
	}








	?>
</body>

</html>