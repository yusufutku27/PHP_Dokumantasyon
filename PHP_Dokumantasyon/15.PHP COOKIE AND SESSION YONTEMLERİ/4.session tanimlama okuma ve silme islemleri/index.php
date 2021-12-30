<?php
session_start();
?>
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
	session_start()		:	session (oturum) başlatmak veya session'ları (oturumları) takip etmek için kullanılır.
	session_destroy()	:	Daha önceden oluşturulmuş olan session'ları (oturumları) silmek için kullanılır.
	*/

    $_SESSION["name"] = "Yusuf";
    $_SESSION["surname"] = "Utku";
  
    session_destroy();







    ?>
</body>

</html>