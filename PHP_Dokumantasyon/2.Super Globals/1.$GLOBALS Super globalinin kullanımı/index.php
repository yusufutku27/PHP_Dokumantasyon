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
    $GLOBALS	:	Atanacak olan değişken için kapsama / etki alanlarının değiştirilmesini sağlar. 
    Bu sayede global (küresel) alanda tanımlanmış bir değişkene local (yerel) alandan, 
    local (yerel) alanda tanımlanmış bir değişkene global (küresel) alandan ulaşılabilme imkanı tanır.
    */


    /* Local alandan Global alana ulaşım örnegi */

    /* Temel Örnek */
    function deneme()
    {
        $GLOBALS["name"] = "Yusuf Utku";
    }
    deneme();
    echo $name . "<br>";

    /* Örnek */

    function topla()
    {
        $sayı1 = 20;
        $sayı2 = 17;
        $GLOBALS["toplam"] = $sayı1 + $sayı2;
    }
    topla();
    echo "Sonuç: " . $GLOBALS["toplam"]."<br>"; // bu şekildede ekrana bastırır.
    echo "Sonuç: " . $toplam."<br><br><br>"; // bu şekildede ekrana bastırır.
    

    /* Global alandan Local alana ulaşım örnegi */

    
    $isim="Ziya isabaş";

    function bastır() {
        
        echo "İsminiz ". $GLOBALS["isim"];
    }
    bastır();





    ?>
</body>

</html>