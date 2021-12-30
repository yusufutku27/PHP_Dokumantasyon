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
	is_string()		:	Belirtilecek olan değişken içeriğinin string (alfanumerik) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_int()		:	Belirtilecek olan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_integer()	:	Belirtilecek olan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_long()		:	Belirtilecek olan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_double()		:	Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_float()		:	Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_real()		:	Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_numeric()	:	Belirtilecek olan değişken içeriğinin numeric (sayısal) veri türlerinden (integer, double, float) biri olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_bool()		:	Belirtilecek olan değişken içeriğinin boolean (mantıksal) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_null()		:	Belirtilecek olan değişken içeriğinin null (boş / değeri olmayan) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_resource()	:	Belirtilecek olan değişken içeriğinin resource (kaynak) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_callable()	:	Belirtilecek olan değişken içeriğinin callable (geri çağırımlar / geri çağırabilenler) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_array()		:	Belirtilecek olan değişken içeriğinin array (dizi) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_object()		:	Belirtilecek olan değişken içeriğinin object (nesne) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/

    $Deger        =    "Volkan Alakent";

    if (is_string($Deger)) {
        echo '$Deger adındaki değişkenin içeriği string (alfanumerik) içeriktir.';
    } else {
        echo '$Deger adındaki değişkenin içeriği string (alfanumerik) içerik değildir.';
    }


   // NoT:ihtiyaca göre açıklamadaki methodlar kullanılabilir










    ?>
</body>

</html>