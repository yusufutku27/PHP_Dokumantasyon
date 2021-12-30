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

    /* Temel Örnek */

    // function bir($isim, $soyisim)
    // {
    //     function iki($isim2,$soyisim2)
    //     {
    //         function uc($isim3,$soyisim3)
    //         {
    //             echo "İsim: ".$isim3."<br>"."Soyisim: ".$soyisim3;
    //         }
    //         uc($isim2,$soyisim2);
    //     }
    //     iki($isim,$soyisim);
    // }

    // bir("Mustafa", "İsabaş");
   



    /* Default parametreli kullanım */

    function bir($isim="Ercan", $soyisim="Topaloglu")
    {
        function iki($isim2,$soyisim2)
        {
            function uc($isim3,$soyisim3)
            {
                echo "İsim: ".$isim3."<br>"."Soyisim: ".$soyisim3;
            }
            uc($isim2,$soyisim2);
        }
        iki($isim,$soyisim);
    }

    bir();








    ?>
</body>

</html>