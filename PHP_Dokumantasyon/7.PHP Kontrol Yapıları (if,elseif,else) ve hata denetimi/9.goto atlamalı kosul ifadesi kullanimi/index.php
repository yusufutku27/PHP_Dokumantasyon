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
	goto	:	Kodlama dosyası içerisinde belirtilecek olan imlenmiş / hedeflenmiş satıra atlama koşulunu sağlamak için kullanılır.
	
	Yapısı :
	goto Yerimiz
	
	Yerimiz:
	*/

    /* Temel Örnek */
    
    // goto isim;
    // echo "Mehmet"."<br>";
    // echo "Yusuf"."<br>";
    // isim:  // bu bir imdir im'e istedigimiz ismi verebiliriz
    // echo "Ramazan"."<br>";
    // echo "Seher"."<br>";




    $Deger	=	4;
	
	if($Deger==1){
		goto Genel;
	}elseif($Deger==2){
		goto Yönetim;
	}elseif($Deger==3){
		goto Egitimci;
	}else{
		goto Diger;
	}
	
	Genel:
	
	echo "Onur Tatlı<br />";
	
	Yönetim:
	
	echo "Ümit Okudan<br />";
	
	echo "Serkan Çelik<br />";
	
	Egitimci:
	
	echo "Hakan Alakent<br />";
	
	echo "Volkan Alakent<br />";
	
	if(($Deger!=1) and ($Deger!=2) and ($Deger!=3)){
		Diger:

		echo "Kişi Yok.";
	}












?>
    
</body>
</html>