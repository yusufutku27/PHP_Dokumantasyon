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
	namespace	:	Sınıflar için özel isim alanları / küme tanımlamak için kullanılır.
    Not: namespace mutlaka dökümanın başında olmalıdır harici php dosyalarında sorun olmaz
	*/

    require_once "class/mehmet.php";
    require_once "class/yusuf.php";
    require_once "class/ali.php";

    use \Uyeler\Mehmet\personel as Mehmet; // namespace  ismi uzunsa as ile ona takma isim verebilirsin
    $mehmet=new Mehmet;
    $yusuf=new \Uyeler\Yusuf\personel;
    $ali=new \Uyeler\Mehmet\personel;


    echo "1.İsim: ".$mehmet->name."<br>";
    echo "2.isim: ".$yusuf->name."<br>";
    echo "3.isim: ".$ali->name."<br>";










    ?>
</body>

</html>