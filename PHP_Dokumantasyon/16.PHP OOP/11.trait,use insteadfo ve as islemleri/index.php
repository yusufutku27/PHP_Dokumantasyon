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
trait     : Sınıflar için özellik ve method gruplarının oluşturulması için kullanılır
use       : Daha önceden tanınlanmış olan herhangi bir özellik ve method grubunu ilgili sınıfa tanımlamak için kullanılır
insteadof : Sınıf için tanımlanmış olan özellik ve method gruplarında  tercih/seçim işlemleri için kullanılır
as        : Sınıf için tanımlanmış olan özellik ve method gruplarında methoda takma isim ve görünürlük atamada kullanılır
*/

    /* trait ve use kullanımı */

    // trait Bilgiler
    // {
    //     public $name = "Yusuf";
    //     public $lastname = "Utku";
    //     public $age = 20;
    //     // public const name="YUSUF"; Hata verir çünkü trait içersinde sabitler kullanılamaz
    //     public function Bastır()
    //     {
    //         return $this->name . " " . $this->lastname . " " . $this->age;
    //     }
    // }


    // class Personel
    // {
    //     use Bilgiler;
    // }
    // $sonuc = new Personel;
    // echo $sonuc->Bastır();



    /* traitler kendi içerisinde derger alabilir */

    trait adsoyad {
        public $name="Yusuf";
        public $lastname ="Utku";
    }
    trait bas {
        use adsoyad;
        public function bas() {
            return $this->name." ".$this->lastname;
        }
    }

    class Personel {
        use bas;
    }
    $sonuc =new Personel;
    echo $sonuc->bas();

    /* inteadof kullanımı */
 

    trait eleman1 {
        public $name="Yusuf";
        public $surname="Utku";

        public function yaz() {
            return "İsim: ".$this->name."<br>"."Soyisim: ".$this->surname."<br><br>";
        }
    }


    class nesne {
        use eleman1;
    }
    $personel=new nesne;

    echo $personel->yaz();






















    ?>
</body>

</html>