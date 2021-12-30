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
	class	:	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
	new		:	Daha önceden tanımlanmış olan herhangi bir sınıfı çağıramak için kullanılır.

	Kurallar	:
	1. Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır.
	2. Sınıf isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
	3. Sınıf isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
	4. Sınıf isimleri hiçbir zaman bir rakam ile başlayamaz.
	5. Sınıf isimleri içerisinde hiçbir zaman boşluk, türkçe karkaterler ve özel karakterler kullanılamaz.
	6. Sınıf isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (namespace (isim uzayı) kullanılması durumunda birden fazla kez kullanılailir.)
	8. Sınıf isimleri küçük harf / büyük harf duyarlı değildir.
	9. Sınıf kapsama / etki alanı kurallarına tabidir.

	Yapısı		:
	class İsim{
		Kod blokları
	}
	*/


    /* Temel Kullanım */

    // Özellik tanimlama ve kullanma şekli
    class Personel
    {
        public $name = "Yusuf";
        public $surname = "Utku";
    }
    $personel = new Personel;

    echo "İsim: " . $personel->name . "<br>";
    echo "Soyisim: " . $personel->surname . "<br><br><br>";

    //Sabit tanimlama ve kullanma şekli

    class Kisi
    {
        public const İSİM = "Mustafa";
        public const SOYİSİM = "İsabaş";
    }

    echo "İsim: " . Kisi::İSİM . "<br>";
    echo "Soyisim: " . Kisi::SOYİSİM . "<br><br>";

    // Method tanimlama ve kullanma şekli

    class Bilgi
    {
        public function bilgiler()
        {
            $isim = "Mehmet";
            $soyisim = "Aslan";
            $metin = "İsim :" . $isim . "<br>" . "Soyisim: " . $soyisim . "<br><br>";
            return $metin;
        }
    }
    $nesne = new Bilgi;

    echo $nesne->bilgiler();


    // Method $degişken ve sabitleri hepsini bir arada kullanmak

    class İnsan
    {
        public $firtname = "Yusuf";
        public $lastname = "Utku";
        public const YAS=20;

        public function yaz() {
            $hobi="Futbol";
            $fobi="Yüzmek";
            return "Ben ".$hobi."'u seviyorum fakat ".$fobi."'i sevmiyorum<br><br>";
        }
    }
    $insan=new İnsan;

    echo "isim: ".$insan->firtname."<br>";
    echo "Soyisim: ".$insan->lastname."<br>";
    echo "Yaş: ".İnsan::YAS."<br>";
    echo "Mesaj: ".$insan->yaz();









    ?>
</body>

</html>
