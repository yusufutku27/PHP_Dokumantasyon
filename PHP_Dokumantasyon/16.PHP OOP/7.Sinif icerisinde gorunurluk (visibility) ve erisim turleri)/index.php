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
	public		:	Genel. Her yerden erişilebilir.
	private		:	Özel. Yanlızca sınıf içerisinden erişilebilir.
	protected	:	Korumalı. Sınıf içerisinden ve türetilen sınıflardan erişilebilir.
	
	static		:	Sabit. Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.
	
	$this		:	Bu sınıfda şeklinde sınıfı işaret etmek için kullanılır.
	self::		:	Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
	parent::	:	Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
	*/

    /* public heryerden erişim verir */

    class Meyve
    {
        public $meyve = "Armut";
        public const YESİL = "erik";

        public function yaz()
        {
            $turuncu = "Portakal";
            return $turuncu;
        }
    }

    $nesne = new Meyve;

    echo "Meyveler: " . $nesne->meyve . " " . Meyve::YESİL . " " . $nesne->yaz() . "<br><br>";






    // aynı sınıf içerisindeki özelliklere erişme sınıf içerisinden $this ve self kullanini

    class Personel
    {
        private $name = "Yusuf";
        private $surname = "Utku";
        private const AGE = 20;

        public function oku()
        {
            $yaz = "İsim: " . $this->name . "<br>" . "Soyisim: " . $this->surname . "<br>" . "Yaş: " . self::AGE . "<br><br>";
            return $yaz;
        }
    }

    $personel = new Personel;

    echo $personel->oku();






    // class Bir
    // {
    //     protected function bilgi()
    //     {
    //         $metin = "JS";
    //         return $metin;
    //     }
    // }

    // class İki extends Bir
    // {

    //     public function bilgi()
    //     {
    //         $metin = "PHP";
    //         echo $metin;
    //         return parent::bilgi();
    //     }
    // }

    // $bilgi=new İki;
    // echo $bilgi->bilgi();




    class Bir
    {
        protected function bilgi()
        {
            $metin = "JS";
            return $metin;
        }
    }

    class İki extends Bir
    {

        public function bilgi()
        {
            $metin = "PHP " . parent::bilgi();
            return $metin;
        }
    }

    $bilgi = new İki;

    $sonuc = $bilgi->bilgi();
    echo $sonuc."<br><br>";



    // static ifadesi sınıfın herhangi bir kopyasını oluşturmadan özellik veya methodları kullanmamızı saglar
    // Not: static ifadesi sabit özellikler için kullanılmaz.
    // Not: static ifadesi mutlaka public olarak tanımlanmalıdır.

    class Dene
    {
        public static $name = "Yusuf";
        public static $surname = "Utku";
    }

    echo Dene::$name . "<br>";
    echo Dene::$surname . "<br>";

    ?>
</body>

</html>