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
	func_num_args()		:	Fonksiyona gönderilen parametre sayısını bulmak için kullanılır.
	func_get_args()		:	Fonksiyona gönderilen parametre değerlerini alarak yeni bir dizi oluşturmak için kullanılır.
	func_get_arg()		:	Fonksiyona gönderilen parametre değerlerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait elemanın değerini döndürmek için kullanılır.
	*/


    /* Temel Örnek */

    function deneme() {
       
        $gelenparametresayisi=func_num_args();
        echo "Gelen Parametre Sayısı: ".$gelenparametresayisi;
        $gelenparametredegerleri=func_get_args();

        echo "<pre>";
        print_r($gelenparametredegerleri);
        echo "</pre>";
        $istenilenparametredegeri=func_get_arg(4);
        echo "İstenilen Anahtar degerine göre parametre degeri: ".$istenilenparametredegeri;
    }
    deneme("Mehmet","Ali","Mustafa","Serkan","Yusuf","Seher","Yasemin","Ercan");
     













    ?>
</body>

</html>