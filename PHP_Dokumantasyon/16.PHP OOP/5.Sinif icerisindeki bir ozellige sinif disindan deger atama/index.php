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
    
    // Not: sadece degişken olan özellikleri degiştirebilirsin sabit olan özellikleri degiştiremezsin
    // Not: Özellik mutlaka public olmalıdır.
     
    class Personel {
        public $name;
        public $surname;
    }
    
    $nesne=new Personel;

    $nesne->name="Yusuf";
    $nesne->surname="Utku";

    echo "İsim: ".$nesne->name."<br>";
    echo "Soyisim: ".$nesne->surname."<br><br>";
 
    $nesne->name="Mustafa";
    $nesne->surname="İsabaş";

    echo "İsim: ".$nesne->name."<br>";
    echo "Soyisim: ".$nesne->surname;
   
    // Not: birçok kez degeri degiştirip kullanabiliriz











    ?>
</body>

</html>