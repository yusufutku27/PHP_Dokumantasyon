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
	try 			=	Hata oluşturabilecek kodlar için kullanılır.
	catch			=	Hata oluşursa çalıştırılacak kodlar için kullanılır.
	finally			=	Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır.
	throw			=	Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.
	Exception		=	Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılır.
	getMessage()	=	Tüm istisnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.
	
	Yapısı :
	try{
		Kod blokları
		throw new Exception(İleti);
	}catch(Exception İleti Ataması){
		Kod blokları
	}finally{
		Kod blokları
	}
	*/

    /* Temel Örnek */
    
    // try {
    //     $deger1=100;
    //     $deger2=0;
        
    //     if($deger2==0) {
    //           throw new Exception("Hata! Bir sayısı 0 'a Bölemezsin");
    //     }
       
    //     $islem=$deger1/$deger2;
      
    // }
    // catch(Exception $sonuc) {
    //   echo $sonuc->getMessage();
    // }




    /* Örnek */

    // try {
    //     $isim="Mehmet";
    //     if($isim=="Yusuf"):
    //         echo "İsim: ".$isim;
    //         else :
    //             throw new Exception("Sen Yusuf Degilsin! Kimsin Sen ?");
    //         endif;
    // }
    
    // catch(Exception $deger) {
    //    echo $deger->getMessage();
    // }

      


    try {
        $isim="Serkan";
        if($isim=="Yusuf"):
            echo "İsim: ".$isim."<br>";
            else :
                throw new Exception("Sen Yusuf Degilsin! Kimsin Sen ?");
            endif;
            echo "Merhaba"; // yukarıda hata çıkarsa yani istisna oluşursa hatadan sonraki kodlar çalışmaz yani 
            // echo çalışmaz artık çünkü yukarıda hata çıktı ve istisna oluştu
    }
    
    catch(Exception $deger) {
       echo $deger->getMessage()."<br>";
    }
    finally {
        echo "Ben finally hata çıksada çıkmadasa herzaman çalışırım";
    }



    ?>
</body>

</html>