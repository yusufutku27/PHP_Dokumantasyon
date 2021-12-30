<?php

 if(isset($_GET["ok"])) {
   
    $name=$_GET["isim"];
    $surname=$_GET["soyisim"];

    echo "İsim: ".$name."<br>"."Soyisim: ".$surname."<br>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";  
    
     

 }


?>