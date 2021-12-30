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
	function_exists()	:	Belirtilecek olan fonksiyonun varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	class_exists()		:	Belirtilecek olan class'ın (sınıfın) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	method_exists()		:	Belirtilecek olan class (sınıf) içerisinde, belirtilecek olan metodun (fonksiyonun) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	property_exists()	:	Belirtilecek olan class (sınıf) içerisinde, belirtilecek olan özelliğin (değişkenin) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	trait_exists()		:	Belirtilecek olan class'a (sınıfa) ait, belirtilecek olan trait'in (özelliğin) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	interface_exists()	:	Belirtilecek olan class'a (sınıfa) ait, belirtilecek olan interface'in (arayüzün) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_subclass_of()	:	Belirtilecek olan class'dan (sınıfdan) türeyen, belirtilecek olan sub class'ın (alt sınıfın / mirasının) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_a()				:	Belirtilecek olan class'ın (sınıfın) nesnel örneğini varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/

    /* Temel Kullanımlar */

    function Deneme()
    {
    }

    if (function_exists("Deneme")) {
        echo "Deneme adında fonksiyon bulunmaktadır.<br>";
    } else {
        echo "Deneme adında fonksiyon bulunmamaktadır.<br>";
    }



    class Deneme
    {
    }

    if (class_exists("Deneme")) {
        echo "Deneme adında sınıf bulunmaktadır.";
    } else {
        echo "Deneme adında sınıf bulunmamaktadır.";
    }


    // Not:ihtiyaca göre ilgili methodlar kullanılabilir







    ?>
</body>

</html>