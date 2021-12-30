<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    /* Örnek */
    
    define("NAME","Yusuf");
    define("AD",NAME);

    echo AD."<br>";

    /* Örnek */
    
    define("MEYVE","elma");

    const sarı=MEYVE;
    echo sarı."<br>";

    /* Örnek */
    
    $sayı=32;

    define("SAYI",$sayı);
    const number=SAYI;
    echo number;


    ?>
</body>
</html>