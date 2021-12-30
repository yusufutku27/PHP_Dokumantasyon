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
	move_uploaded_file(tmp_name,yol/dosyaname)	:	Herhangi bir dosyayı belirtilecek olan dizine yüklemek için kullanılır.
	*/

    ?>
    <form action="islem.php" method="post" enctype="multipart/form-data" style="width: 24%;">
        <fieldset>
            <legend>Dosya Yükleme Formu</legend>

            <pre>
     Yüklenecek Dosya: <input type="file" name="dosya" id="">

                       <input type="submit" value="Yükle">
     </pre>


        </fieldset>
    </form>

</body>

</html>