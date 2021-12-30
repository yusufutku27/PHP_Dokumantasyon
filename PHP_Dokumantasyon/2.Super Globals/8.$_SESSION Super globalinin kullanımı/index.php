<?php 
session_start();
?>
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
      $_SESSION super globali oturum açmamıza yarar ve aynı zamanda var olan oturumu okumamıza yarar.
      */

      
     $_SESSION["name"]="Yusuf";
     $_SESSION["email"]="yusufutku120@gmail.com";

      echo $_SESSION["name"]."<br>";
      echo $_SESSION["email"]






    ?>
</body>
</html>