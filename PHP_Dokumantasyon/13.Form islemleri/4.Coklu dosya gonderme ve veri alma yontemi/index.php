<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="islem.php" method="POST" enctype="multipart/form-data" style="width: 24%;">
    <fieldset>
    <legend>Çoklu Dosya Yükleme Formu</legend>
   
   <pre>
    <label for="dosya">Yüklenecek Dosyalar: </label><input type="file" name="dosya[]" id="dosya" multiple>
    
                         <input type="submit" value="Yükle" style="padding: 5px 20px;">
   </pre>


    </fieldset>    
    </form>
</body>
</html>