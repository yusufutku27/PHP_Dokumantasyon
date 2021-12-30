<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/min/dropzone.min.css">
</head>

<body>

    <!-- Dosya yükleme formlarında method multaka POST olmalıdır ayrıca dosya yükleme formlarına 
enctype="multipart/form-data" bu kodu mutlaka eklemeliyiz aksi taktirde dosya yükleme yapamayız
 -->
    <form action="sonuc.php" method="POST" enctype="multipart/form-data">
        Seçiniz: <input type="file" name="dosya"><br><br>
        <input type="submit" value="Dosya Gönder">
    </form>


    <!-- <form action="sonuc.php" class="dropzone" style="width: 50%;">
    
    </form> -->



    <script src="dist/min/dropzone.min.js"></script>
</body>

</html>