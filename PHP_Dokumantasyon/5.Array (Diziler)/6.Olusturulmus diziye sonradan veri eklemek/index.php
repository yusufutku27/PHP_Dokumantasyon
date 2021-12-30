<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
     
     /* Temel Örnek */
     
     $meyveler=array("elma","armut","kiraz");

     $meyveler["yesil"]="karpuz";
     $meyveler["sari"]="kavun";
     $meyveler[]="portakal";
     $meyveler[]="mandalina";

     echo "<pre>";
     print_r($meyveler);
     echo "</pre>";







    ?>
</body>
</html>