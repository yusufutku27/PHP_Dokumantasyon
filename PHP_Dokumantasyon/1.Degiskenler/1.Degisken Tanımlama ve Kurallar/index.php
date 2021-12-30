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
      Degişkenler : Girdigimiz degerleri alan veya programın çalışması ile bazı degerlerin atandıgı veri tutuculardır.
      Kurallar    : 
      1. Degişkenler daima $ (dolar) işareti ile başlar.
      2. Degişken isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
      3. Degişken isimleri hiçbir zaman rakam ile başlayamaz.
      4. Degişken isimleri içersinde alfanumerik degerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
      5. Degişken isimleri içerisinde hiçbir zaman boşluk,türkçe karakterler veya özel karakterler kullanılamaz.
      6. Degişken isimleri tanımlanırken /PHP tarafından kullanılar isimler veya tanımlar kullanılamaz.
      7. Degişken isimleri büyük harf / küçük harf duyarlıdır.
      8. Degişken isimleri birden fazla kez kullanılabilir.Fakat degişken isminin tekrar edilmesi durumunda.daima son degişkenin degeri gerçek   
      deger olarak kabul edilir
      9. Degişkenler kapsama / etki alanı kurallarına tabidir.
     */

     /* Örnekler */

     // Degişken tanımlama ve kullanma
     $isim="Yusuf Utku";
     echo $isim."<br>";
     

     // Degiken _ (alt çizgi ile başlayabilir)
     $_isim="Yusuf Utku";
     echo $_isim."<br>";


     // Degişken isimleri rakam ile başlamaz
     //  $1isim="Ahmet"; // hata verir


     // Degiken isimleri içersinde alfanumerik degerler ve alt çizgi (_) kullanılabilir
     $Deger1_sayı=15;
     echo $Deger1_sayı."<br><br>";


     // Degişken isminde boşluk olmaz
     // $De ger=20; // hata verir


     // Degişken isminde özel karakter kullanamazsın
     // $name&surname="Yusuf Utku"; // hata verir


     // Deşişken isimlerinde php de tanımlı isimler kullanamazsın
     //$if="blog"; // Hostinglerde hata verir kullanmaktab kaçın
     //echo $if; //Ekrana blog yazar ama normalde hatadır bazı hostingler bunu kabul etmez tıpkı türkçe karakterler gibi

     
     // Degişken isimleri büyük / küçük harf duyarldır
     $name="Yusuf Utku";
     $Name="Mustafa İsabaş";
     echo $name."<br>";
     echo $Name."<br>";


     // Aynı isimli degişkenlerde daima son degikenin degeri okunur
     $sayı1=20;
     $sayı1=30;
     echo $sayı1;

     // Degişkenler local ve glbal alana tabidir.
     function Deger() {
         $Deger=60; // Fonksiyon içi (Local alan)
     }
     echo $Deger;  // hatadır çünkü degiken global alanda tanımlı degildir.local alanda tanımlıdır bu yuzden global alandan okunamaz.



     // Degişkenler önce tanımlanır sonra kullanılır.PHP motoru kodları yukardan aşşagı okur.
     //echo top; // hata verir.Çünkü önce tanımlamamız gerekir.
     //$top="top";





     
     
    






    ?>
</body>
</html>