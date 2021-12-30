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
	abstract	:	Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.
	interface	:	Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır.
	implements	:	Daha önceden oluşturulmuş olan herhangi bir arayüz sınıfını, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
	
	abstract 	:
	1. Soyut metodlar içerebilir.
	2. Normal metodlar içerebilir.
	3. Özellikler içerebilir.
	4. Sabitler içerebilir.
	5. public, private veya protected tanımlanabilir.
	6. Herhangi bir sınıf sadece tek bir içerebilir.'dan türeyebilir.
	
	interface	:
	1. Soyut metodlar içerebilir.
	2. public gönürlüğüne sahip olmak kaydıyla normal metodlar içerebilir.
	3. Sabitler içerebilir.
	4. Herhangi bir sınıfda birden fazla interface (arayüz) kullanılabilir.
	*/

    /* abstract(soyut sınıf) kullanımı */
    abstract class Tema
    {

        abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);
        abstract public function BodyAlani($Icerik);
        abstract public function FooterAlani($CopyMetni);
    
    }

    class UstAlan extends Tema
    {

        public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri)
        {
        }

        public function BodyAlani($Icerik)
        {
        }

        public function FooterAlani($CopyMetni)
        {
        }
    }




    /* İnterface (arayüz) kullanımı */

    interface Deneme
    {

        public function Tanim($ParametreIcerigi);
    }

    class Test implements Deneme
    {

        function Tanim($ParametreIcerigi)
        {
        }
    }

    




    /* İnterface örnek */




    // interface Olusturma
    // {

    //     public function Olusturma($TabloDegeri, $BenzersizKimlik);
    // }

    // interface Okuma
    // {

    //     public function Okuma($TabloDegeri, $BenzersizKimlik);
    // }

    // interface Duzenleme
    // {

    //     public function Duzenleme($TabloDegeri, $BenzersizKimlik);
    // }

    // interface Silme
    // {

    //     public function Silme($TabloDegeri, $BenzersizKimlik);
    // }

    // class Test implements Olusturma, Okuma, Duzenleme, Silme
    // {

    //     function Olusturma($TabloDegeri, $BenzersizKimlik)
    //     {
    //     }

    //     function Okuma($TabloDegeri, $BenzersizKimlik)
    //     {
    //     }

    //     function Duzenleme($TabloDegeri, $BenzersizKimlik)
    //     {
    //     }

    //     function Silme($TabloDegeri, $BenzersizKimlik)
    //     {
    //     }
    // }












    ?>
</body>

</html>