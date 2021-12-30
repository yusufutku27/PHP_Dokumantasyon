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
   
    $isim="Mehmet";

    if($isim=="Yusuf") {
      function yaz() {
          global $isim;
          echo "Merhaba: ".$isim;
      }
  
    }
    else {
        function yaz() {
            echo "Sen Yusuf Degilsin! Kimsin Sen ?"."<br><br>";
        }
    }
    yaz();


    $deger=2;

    switch($deger) {
     case 1:
        echo "Merhaba Nasılsın";
        break;
        case  2:
            function oku() {
                echo "Merhaba Dostum Naber ?";
            }
            break;
            default:
            echo "Geçersiz İşlem";
    }
    
    oku();












?>
</body>
</html>