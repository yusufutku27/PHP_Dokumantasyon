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
	foreach		:	Diziler için döngü işlemi başlatır.
	
	Yapısı :
	foreach(Dizi Değişkeni as Anahtar Atanacak Değişken => Eleman Atanacak Değişken){
		Kod blokları
	}
	*/

    /* Temel Kullanım */

    /* Anahtarsız hali */
    $personel = array("Yusuf", "Utku", 20);

    foreach ($personel as  $elaman) {

        echo $elaman . "<br>";
    }
    echo "<br><br>";
    $isimler = array("ilk" => "Yusuf", "ortanca" => "Mehmet", "son" => "Mustafa");

    foreach ($isimler as $anahtar => $deger) {
        echo  $anahtar . ": " . $deger . "<br>";
    }















    ?>
</body>

</html>