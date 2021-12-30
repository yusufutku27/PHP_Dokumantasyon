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
	__construct()		:	Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
	__destruct()		:	Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.
	*/

    class Nesne {


        
        public function __construct()
        {
            echo "Ben bu sınıftaki ilk çalışak methodum<br>";
        }






        public function __destruct()
        {
            echo "Ben En son çalışak methodum<br>";
        }

    }

    $nesne=new Nesne;

    // Not: Herzaman sırası fark etmez ilk __construct çalışır.en son __destruct çalışır












    ?>
</body>

</html>