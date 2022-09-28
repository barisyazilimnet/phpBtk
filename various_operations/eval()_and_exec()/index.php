<?php
eval('echo "Barış KURT";'); //? içerigi php kodu olarak algılar
exec("ping google.com.tr", $result); //? belirtilen komutu çalıştırarak degişkene atar
echo "<pre>";
print_r($result);
echo "</pre>";
//? sisteme komut gönderir
exec("index.php $result1"); //? belirtilen dosyayı açarak içine degişkene aktarır
echo $result1;
