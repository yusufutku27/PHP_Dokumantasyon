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
	array_replace()				:	Birden fazla dizi içerisinde bulunan eleman veya elemanların, ilk dizi içerisinde olanları baz alınarak, kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman veya elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır.
	array_replace_recursive()	:	Birden fazla dizi içerisinde bulunan eleman veya elemanların, ilk dizi içerisinde olanları baz alınarak, kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman veya elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır. (Gelişmiş)
	*/ 

    /* Temel Örnek */
    
    //Not. güncelleme yaparken anahtarların kesinlikle aynı olması lazım

    $dizi1=array("yusuf","mehmet","serkan","halil");
    $dizi2=array("mustafa","hatice","esra","seher","yasemin");

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    
    $update=array_replace($dizi1,$dizi2);


    echo "<pre>";
    print_r($update);
    echo "</pre>"."<hr><hr>";

    /* Çok boyutlu versiyonu */
    
    $meyveler=array(array("muz","kivi","portakal"),"elma",array("kiraz"));
    
    $updatedizi=array("karpuz",array("ıspanak","kavun","mandalina"),array("üzüm","fıstık","ceviz"));
 
    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";
     
    echo "<pre>";
    print_r($updatedizi);
    echo "</pre>";


    $newdizi=array_replace($updatedizi,$meyveler); // 1.dizi olan meyveler dizisini 2.dizi olan update dizisi ile güncelledi

    echo "<pre>";
    print_r($newdizi);
    echo "</pre>";







?>
</body>
</html>