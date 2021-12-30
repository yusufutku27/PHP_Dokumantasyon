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
	break		:	Döngünün çalışmasını sonlandırmak için kullanılır.
	*/
    
    /* Temel Örnek */

   $deger=1;
   
   while($deger<=10) {

      echo $deger."<br>";
      if($deger == 5) {
        break;
      }

      $deger++;
   }
   









    ?>
</body>

</html>