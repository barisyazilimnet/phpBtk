<?php

echo defined("ISIM") ? "ISIM adında sabit bulunmaktadır" : "ISIM adında sabit bulunmamaktadır"; //? Sabitin varlıgını kontrol eder
echo "<br />";
echo isset($text) ? '$text adında degişken bulunmaktadır' : '$text adında degişken bulunmamaktadır'; //? degişkenin varlıgını kontrol eder
echo "<br />";
echo isset($_POST["form1"]) ? 'form1 formu post edilmiştir' : 'form1 formu post edilmemiştir'; //? post edilen deger varlıgını kontrol eder
echo "<br />";
$name = "";
echo empty($name) ? '$name adında degişkenin içi boştur veya degişken yoktur' : '$name adında degişkenin içi doludur'; //? degişkenin varlıgını ve içi boş olup olmadıgını kontrol eder

?>
<html>
    <body>
        <form action="" method="post"><input type="submit" name="form1" value="Gönder"></form>
    </body>
</html>
