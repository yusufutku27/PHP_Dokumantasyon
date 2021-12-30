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

    class Hesap
    {

        private $Sonuc    =    0;

        function __construct($SayiDegeri)
        {

            $this->Sonuc    =    $SayiDegeri;
        }

        public function Toplama($ToplamaIcinSayiDegeri)
        {

            $this->Sonuc    +=    $ToplamaIcinSayiDegeri;
            return $this;
        }

        public function Cikartma($CikartmaIcinSayiDegeri)
        {

            $this->Sonuc    -=    $CikartmaIcinSayiDegeri;
            return $this;
        }

        public function Carpma($CarpmaIcinSayiDegeri)
        {

            $this->Sonuc    *=    $CarpmaIcinSayiDegeri;
            return $this;
        }

        public function Bolme($BolmeIcinSayiDegeri)
        {

            $this->Sonuc    /=    $BolmeIcinSayiDegeri;
            return $this;
        }

        public function Goster()
        {
            echo $this->Sonuc . "<br />";
            return $this->Sonuc;
        }
    }

    $IslemBir    =    new Hesap(1000);
    $IslemBir->Toplama(500)->Cikartma(300)->Carpma(2)->Bolme(8)->Goster();

    $IslemIki    =    new Hesap(5000);
    $IslemIki->Carpma(2)->Bolme(4)->Goster() . "<br />";

    $IslemUc    =    new Hesap(1000000);
    $IslemUc->Bolme(10)->Carpma(2)->Goster() . "<br />";

    $IslemUc    =    new Hesap(100);
    $IslemUc->Bolme(2)->Bolme(2)->Bolme(5)->Goster() . "<br />";













    ?>
</body>

</html>