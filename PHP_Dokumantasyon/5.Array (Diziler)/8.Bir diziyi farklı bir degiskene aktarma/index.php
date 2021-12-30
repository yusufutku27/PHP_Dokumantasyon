<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php
  
  $meyveler=array("elma","armut","karpuz");

  $yiyicek=$meyveler;
  $yiyicek["kırmızı"] ="Kiraz";

  echo "<pre>";
  print_r($yiyicek);
  echo "</pre>";
  




?>
</body>
</html>