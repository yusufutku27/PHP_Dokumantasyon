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

    /* Temel Kullanım */

    class Personel
    {

        //property
        public $name = "Yusuf"; // özellik(degişken)
        public $surname = "Utku"; // özellik(degişken)
        public const AGE = 20; // özellik(sabit)

        public  function yaz() // method(fonksiyon)
        {
            $mesaj = "Ben bir methodum";
            return $mesaj;
        }
    }

    $Personel = new Personel;

    echo "İsim: " . $Personel->name . "<br>";
    echo "Soyisim: " . $Personel->surname . "<br>";
    echo "Yaş: " . Personel::AGE . "<br>";
    echo "Mesaj: " . $Personel->yaz() . "<br><br><hr>";


    /* Sınıf içerisinde standart degişken tanimalama ve çagırma  */

    // Not:standart degişken sadece özellik(degişkenler) için geçerlidir.

    class İnsan
    {
        var $eyecolor = "Siyah";
        var $haircolor = "Turuncu";
    }

    $İnsan = new İnsan;

    echo "Göz Rengi: " . $İnsan->eyecolor . "<br>";
    echo "Saç Rengi: " . $İnsan->haircolor . "<br><br><hr>";

    /* Sınıflarda construct(yapıcı) ve destruct(yıkıcı) methodların kullanımı */

    // Not: construct herzaman sıra fark etmeksizin ilk çalışan methoddur
    // Not: destruct herzaman sınıf içerisindeki en son çalışıcak methoddur
    // Not: construct(yapıcı method)' a herzaman parametre gönderbiliriz fakat destruct(yıkıcı method)'a parametre göndermeyiz


    // class nesne
    // {
    //     public function oku()
    //     {
    //         $mesaj = "Ben oku isimli bir methodum";
    //         return $mesaj;
    //     }
    //     public function __destruct()
    //     {
    //         echo "Ben en son çalışıcak olan __destruct(yıkıcı) methodum"."<br><br><hr>";
    //     }
    //     public function __construct($isim, $soyisim)
    //     {
    //         echo "İsim: " . $isim . "<br>" . "Soyisim: " . $soyisim . "<br>";
    //     }
    // }

    // // Not: construct ve destruct sınıf çagırıldı anda çalışır

    // $nesne = new nesne("Mustafa", "İsabaş");


    /* Sınıf içerisindeki bir özellige sınıf dışarısından deger atamak */

    class araba
    {
        public $renk;
        public $model;
    }

    $araba = new araba;

    $araba->renk = "Beyaz";
    $araba->model = "BMW 520 d";

    echo "Araba Renk: " . $araba->renk . "<br>";
    echo "Araba Model: " . $araba->model . "<br><br>";

    $araba->renk = "Siyah";
    $araba->model = "Audi a6";

    echo "Araba Renk: " . $araba->renk . "<br>";
    echo "Araba Model: " . $araba->model . "<br><br>";

    /* Sınıf içerisinde bir methoda sınıf dışarısından parametre gondermek */

    class yaz
    {
        public function isimsoyisim($isim = "Yusuf", $soyisim = "Utku")
        {
            return "İsim: " . $isim . "<br>" . "Soyisim: " . $soyisim . "<br><br><hr>";
        }
    }
    $yaz = new yaz;
    echo $yaz->isimsoyisim("Mustafa", "İsabaş");

    // static kullanımı

    class lastik
    {
        static public $deger = "Lastik" . "<br>";
        static public function deneme()
        {
            echo "Ben bir static methodun mesajıyım<br><br><hr>";
        }
    }

    echo lastik::$deger;
    lastik::deneme();

    // $this ve self kullanımı

    class eleman
    {
        private $name = "Yusuf";
        private $surname = "Utku";
        private const AGE = 20;

        public function ekranabas()
        {
            return "İsim: " . $this->name . "<br>" . "Soyisim: " . $this->surname . "<br>" . "Yaş: " . self::AGE . "<br><br><hr>";
        }
    }

    $elaman = new eleman;
    echo $elaman->ekranabas();

    // parent kullanımı

    class bay
    {
        protected function bay()
        {
            return "Ben bay isimli methodum" . "<br>";
        }
    }
    class bayan extends bay
    {

        public function bayan()
        {
            $sonuc = parent::bay() . "Ben ise bayan isimli methodum.<br><br><hr>";
            return $sonuc;
        }
    }

    $bayan = new bayan;

    echo $bayan->bayan();


    class bir
    {
        public function yaz()
        {
            return "Yusuf";
        }
    }
    class iki extends bir
    {
        public function yaz()
        {
            return "Mehmet";
        }
    }
    class uc extends iki
    {
        public function yaz()
        {
            $sonuc = parent::yaz() . " " . bir::yaz();
            return $sonuc . " " . "Mustafa";
        }
    }

    $uc = new uc;
    echo $uc->yaz();















    ?>
</body>

</html>