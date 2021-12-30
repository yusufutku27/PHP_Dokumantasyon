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
	stat()						:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	fstat()						:	fopen() metodu kullanılarak açılmış olan ve belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	clearstatcache()			:	stat() veya fstat() metodu kullanılarak elde edilen ve ön belleğe alınan verileri temizlemek için kullanılır.
	
	stat() ve fstat() Değerleri	:
	
    0		ve		dev	 		=>		Aygıt numarası (Genellikle değeri 2'dir.)
    1		ve		ino			=>		Dosya düğüm numarası (Genellikle değeri 0'dır.)
    2		ve		mode	 	=>		Dosya erişim izinleri (Genellikle değeri 33206)
    3		ve		nlink	 	=>		Bağlantı sayısı (Genellikle değeri 1'dir.)
    4		ve		uid	 		=>		Dosya sahibi ID'si (Genellikle değeri 0'dır.)
    5		ve		gid	 		=>		Dosya sahibi grubu ID'si (Genellikle değeri 0'dır.)
    6		ve		rdev	 	=>		Dosya düğümü aygıtları için aygıt türü (Genellikle değeri 2'dir.)
    7		ve		size	 	=>		Dosya boyutu (Byte cinsinden)
    8		ve		atime	 	=>		Dosya son erişim zamanı. (Unix zaman damgası türünde)
    9		ve		mtime	 	=>		Dosya değiştirilme zamanı. (Unix zaman damgası türünde)
    10		ve		ctime	 	=>		Dosya oluşturulma zamanı. (Unix zaman damgası türünde)
    11		ve		blksize	 	=>		Dosya sistemi için I/O blok boyutu (Genellikle Windows değeri -1'dir.)
    12		ve		blocks	 	=>		Dosya için ayrılmış 512 byte'lık blok boyutu (Genellikle Windows değeri -1'dir.)
	*/


    /* Temel Kullanım */
	$Dosya		=	"Ornek.zip";
	$Islem		=	stat($Dosya);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";













    ?>
</body>

</html>