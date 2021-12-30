<?php


$gelendosya=$_FILES["file"];

$name=$gelendosya["name"];
$tmpname=$gelendosya["tmp_name"];
$yol="resimler/";
$adyol=$yol.$name;
if(move_uploaded_file($tmpname,$adyol)) {
 echo "Başarılı";
}
else {
    echo "Başarısız";
}






















?>