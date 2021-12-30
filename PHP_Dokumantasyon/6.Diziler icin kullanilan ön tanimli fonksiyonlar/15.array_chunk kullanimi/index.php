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
	array_chunk()	:	Dizinin belli bölümlerini alıp parçalayarak yeni bir çok boyutlu dizi oluşturmak için kullanılır.
	*/

   
    /* Temel Örnek */ 
    
    $isimler=array("mehmet","ali","furkan","serkan","mustafa","yusuf","halil","metin","veli","hazar","miran","azad","cihan");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $newdizi=array_chunk($isimler,2);  // anahtar degerler korunmaz alfanumarik olsa bile korunmaz
    
    echo "<pre>";
    print_r($newdizi);
    echo "</pre>"."<hr><hr>";


   /* anahtar degerlerinin korunması için 3.parametre olarak true girmemiz gerek */
  
   $yenidizi=array_chunk($isimler,4,true);
   echo "<pre>";
   print_r($yenidizi);
   echo "</pre>";








?>
</body>
</html>