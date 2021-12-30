<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 


	    echo '$_SERVER["PHP_SELF"] => ' . $_SERVER["PHP_SELF"] . "<br />"; //İlgili çalışan php dosyasının yol bilgisi
	 	echo '$_SERVER["GATEWAY_INTERFACE"] => ' . $_SERVER["GATEWAY_INTERFACE"] . "<br />";//php dosyasının çalıştığı serverin desteklediği sürüm bilgisi(ortağ ağ geçidi)
	 	echo '$_SERVER["SERVER_ADDR"] => ' . $_SERVER["SERVER_ADDR"] . "<br />";//çalıştığı serverin ip adresi
	 	echo '$_SERVER["SERVER_NAME"] => ' . $_SERVER["SERVER_NAME"] . "<br />";//çalıştığı serverin ip adresi
	 	echo '$_SERVER["SERVER_SOFTWARE"] => ' . $_SERVER["SERVER_SOFTWARE"] . "<br />";//çalıştığı serverin yazılım bilgisini döndürür
	    echo '$_SERVER["SERVER_PROTOCOL"] => ' . $_SERVER["SERVER_PROTOCOL"] . "<br />";//çalıştığı serverin yazılım bilgisini döndürür
	    echo '$_SERVER["REQUEST_METHOD"] => ' . $_SERVER["REQUEST_METHOD"] . "<br />";//dosyaya erişim için kullanılan istek biçimi bilsini döndürür
	    echo '$_SERVER["REQUEST_TIME"] => ' . $_SERVER["REQUEST_TIME"] . "<br />";//1970 den bu güne geçen süre fonsiyonalrla okunulabilir hale getirilir.
	    echo '$_SERVER["REQUEST_TIME_FLOAT"] => ' . $_SERVER["REQUEST_TIME_FLOAT"] . "<br />";//
	    echo '$_SERVER["QUERY_STRING"] => ' . $_SERVER["QUERY_STRING"] . "<br />";//sayfadaki sorgu dizesini gösterir serkanikizoglu.com/ara?dsadadasdadada
	    echo '$_SERVER["DOCUMENT_ROOT"] => ' . $_SERVER["DOCUMENT_ROOT"] . "<br />";//kök dizini gösterir
	    echo '$_SERVER["HTTP_ACCEPT"] => ' . $_SERVER["HTTP_ACCEPT"] . "<br />";//dosya mim türü
	    echo '$_SERVER["HTTP_ACCEPT_ENCODING"] => ' . $_SERVER["HTTP_ACCEPT_ENCODING"] . "<br />";//kök dizini gösterir
        echo '$_SERVER["HTTP_ACCEPT_LANGUAGE"] => ' . $_SERVER["HTTP_ACCEPT_LANGUAGE"] . "<br />";//kök dizini gösterir
        echo '$_SERVER["HTTP_CONNECTION"] => ' . $_SERVER["HTTP_CONNECTION"] . "<br />";
        echo '$_SERVER["HTTP_HOST"] => ' . $_SERVER["HTTP_HOST"] . "<br />";//kök dizini gösterir
        echo '$_SERVER["HTTP_REFERER"] => ' . @$_SERVER["HTTP_REFERER"] . "<br />";//hangi refans ile gelidğini dönderir
        echo '$_SERVER["HTTP_USER_AGENT"] => ' . @$_SERVER["HTTP_USER_AGENT"] . "<br />";//hangi tarayıcı ile geldiğini dönderir
        echo '$_SERVER["HTTPS"] => ' . @$_SERVER["HTTPS"] . "<br />";//hangi tarayıcı ile geldiğini dönderir
        echo '$_SERVER["REMOTE_ADDR"] => ' . $_SERVER["REMOTE_ADDR"] . "<br />";// giriş yapan kullanıcının ip adresi
        echo '$_SERVER["REMOTE_HOST"] => ' . $_SERVER["REMOTE_HOST"] . "<br />";//misafirin httpd.conf dosyadınsa HostnameLookups On yapılır pc nin adını dönderir
        echo '$_SERVER["REMOTE_PORT"] => ' . $_SERVER["REMOTE_PORT"] . "<br />";//
        echo '$_SERVER["SCRİPT_FILENAME"] => ' . $_SERVER["SCRIPT_FILENAME"] . "<br />";//
        echo '$_SERVER["SERVER_ADMIN"] => ' . $_SERVER["SERVER_ADMIN"] . "<br />";//
        echo '$_SERVER["SERVER_PORT"] => ' . $_SERVER["SERVER_PORT"] . "<br />";// LİSTEN 80
        echo '$_SERVER["SERVER_SIGNATURE"] => ' . $_SERVER["SERVER_SIGNATURE"] . "<br />";// SUNUCU İMZASI
        echo '$_SERVER["SCRIPT_NAME"] => ' . $_SERVER["SCRIPT_NAME"] . "<br />";// sunucudaki adresi
         echo '$_SERVER["REQUEST_URI"] => ' . $_SERVER["REQUEST_URI"] . "<br />";// sunucudaki adresi



         //YADA TEKBİR KOD İLE HEPSİNİ YAZIRABİLİRİSİN
         echo "<pre>";

         print_r($_SERVER);
         echo "</pre>"






































         ?>

     </body>
     </html>