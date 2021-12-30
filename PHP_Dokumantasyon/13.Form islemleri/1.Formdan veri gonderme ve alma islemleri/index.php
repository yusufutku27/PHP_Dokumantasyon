<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="islem.php" method="POST" style="width: 25%;">
        <fieldset>
            <legend>Personel Form</legend>

            <pre>
          Ad Soyad: <input type="text" name="adsoyad" id="">

             Email: <input type="email" name="email" id="">

           Telefon: <input type="text" name="telefon" id="">

          Cinsiyet: <input type="radio" name="cinsiyet" value="Erkek" id="erkek"><label for="erkek">Erkek</label>  <input type="radio" value="Kadın" name="cinsiyet" id="kadin"><label for="kadin">Kadın</label> 

               Yaş: <select name="yas" id="">
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20" selected>20</option>
            <option value="21">21</option>
          </select>

                    <input type="submit" value="Gönder">
        </pre>
        </fieldset>
    </form>

</body>

</html>