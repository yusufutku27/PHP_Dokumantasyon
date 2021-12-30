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
Sabit        :    Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
Kurallar    :
1. Sabitler ve içerikleri define() fonksiyonu ile veya const tanımı ile oluşturulur.
2. Sabit isimleri mutlaka bir harf veya  _ (alt çizgi) ile başlamalıdır.
3. Sabit isimleri hiçbir zaman bir rakam ile başlayamaz.
4. Sabit isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
5. Sabit isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
6. Sabit isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
7. Sabit isimleri büyük harf / küçük harf duyarlıdır. Eğer istenecek olur ise harf duyarlılığı iptal edilebilir.
8. Sabit isimleri birden fazla kez kullanılamaz.
9. Sabitlere atanacak olan değerler daha sonradan değiştirilemez veya tanımsız duruma getirilemez.
10. Sabitler kapsama / etki alanı kurallarına tabi değildir ve her alandan erişilebilir.
 */

    /* Temel Örnek define() */

    /* Öneri: Sabit isimlerini hepsi büyük harf olarak oluşturursan okunması çok kolay olur */
    define("isim", "Yusuf Utku"); // temel kullanım bu şekilde

    echo "Merhaba " . isim . "<br>";

    /* Temel Örnek const */

    const NAME = "Mustafa İsabaş";
    echo NAME . "<br>";

    /* Sabitler büyük küçük harf duyarlıdır bunu üçüncü parametre olan TRUE degeri ile kapatabiliriz. */

    define("Yol", "Adana Yolu", TRUE);
    echo yol . "<br>"; // normalde dogru

    /* Sabitler etki alanın kurallarına tabi  degildir heryerden erişilebilirler */

    define("SURNAME", "Utku");

    function deneme()
    {
        echo SURNAME."<br>";
    }
    
    /* 2.Örnek */

    function oku() {
        define('meyve', 'armut');
        
    }

    oku();
    echo meyve."<br>";


   /* Örnek */
   const ad="Dogan Utku";
   function read() {
       echo ad;
   }

   read();


   

    ?>








</body>

</html>
