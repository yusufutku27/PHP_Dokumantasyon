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
	htmlentities()				:	Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterleri düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	html_entity_decode()		:	Belirtilecek olan ve htmlentities metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan tüm özel karakterleri, orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	*/

    $Deger        =    "<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
    echo $Deger . "<br /><br />";

    $IslemBir        =    htmlentities($Deger);
    echo $IslemBir . "<br /><br />";

    $sonuc = html_entity_decode($IslemBir);
    echo $sonuc . "<br>";

    //Not: Bu iki method tüm özel karakterleri düz metine ceviriyor.










    ?>
</body>

</html>