<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

	/*
	__TRAIT__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan özelliğin, özellik adı bilgisi değerini döndürür.
	*/
	
	trait OzellikBir{
		function YazBir(){
			echo __TRAIT__;
		}
	}
	
	trait OzellikIki{
		function YazIki(){
			echo __TRAIT__;
		}
	}
	
	class ExtraEgitim{
		use OzellikBir;
		use OzellikIki;
	}
	
	$Islem	=	new ExtraEgitim;
	$Islem->YazBir();
	echo "<br />";
	$Islem->YazIki();

?>
</body>
</html>