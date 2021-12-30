<?php

declare(strict_types=1);
?>
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
	declare(strict_types=1)		:	Kodlama dosyası içerisindeki tüm kodlamaların kural yapısını belirler. 
    // mutlaka kodlama sayfasının en üst kısmında kullanılmalıdır
	*/

    function Deneme(string $Isim, string $Soyisim, int $Yas)
    {

        $Birlestir    =    $Isim . " " . $Soyisim . "<br />Yaş : " . $Yas;

        return $Birlestir;
    }

    $Sonuc    =    Deneme("Volkan", "Alakent", "38"); // Normalde esnek bir yapı oldugu için hata vermez ama sayfanın
    // üst kısmında declare(strict_types=1) kullangımız için katı kurallar geçerli oldu ve 3.parametre olan "38" ifadesi bir string
    // ifade oldugundan dolayı ölümcül hataya sebep oldu.çünkü biz parametreyi int olarak istedik fakat string olarak gönderdik.

    echo $Sonuc;












    ?>
</body>

</html>