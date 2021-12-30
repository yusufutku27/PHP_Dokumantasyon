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
	get_html_translation_table()	:	PHP yazılımı içerisinde kullanılabilecek olan sisteme tanımlı tüm htmlspecialchars() ve htmlentities() dönüştürülebilir karakterlerinin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		HTML_ENTITIES				:	get_html_translation_table metodu kullanılarak htmlentities metodu için tanımlanmış ve dönüştürülecek olan karakter listesini elde etmek için kullanılır.
		HTML_SPECIALCHARS			:	get_html_translation_table metodu kullanılarak htmlspecialchars metodu için tanımlanmış ve dönüştürülecek olan karakter listesini elde etmek için kullanılır. (Varsayılan)
	*/

    $Degerler        =    get_html_translation_table();

    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";









    ?>
</body>

</html>