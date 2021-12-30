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
	extends		:	Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
	final		:	En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı metod adı kullanılamaz.
	*/

    /* Temel Kullanım */

    class Bir
    {
        public $name = "Yusuf";
        public $surname = "Utku";
        public const AGE = 20;

        public function yaz()
        {
            $mesaj = "Benim en sevdigim programlama dili javascripttir.";
            return $mesaj;
        }
    }

    final class İki extends Bir 
    {
    }
    // class uc extends İki // hata verir çünkü İki isimli sınıf final yani son sınıf artık bu isimden sınıf türetemezsin
    // {
    // }
    $nesne = new İki;

    echo "isim: " . $nesne->name . "<br>";
    echo "Soyisim: " . $nesne->surname . "<br>";
    echo "Yaş: " . İki::AGE . "<br>";
    echo "Mesaj: " . $nesne->yaz();











    ?>
</body>

</html>