<?php
echo "<pre>";
print_r(hash_hmac_algos()); //? yazılımda kullanılabilecek olan tüm şifreleme algoritmalarını verir
echo "</pre>";

echo md5("159753") . "<br />";
echo hash_hmac("md5", "159753", "yazilim") . "<br />"; //? aynı md5 gibi şifrelenmiş md5 i verir ama eklenmiş özel gizli anahtarıda ekler

echo md5_file("./aa.rar") . "<br />";
echo hash_hmac_file("md5", "./aa.rar", "yazilim"); //? aynı md5 gibi şifrelenmiş md5 i verir ama eklenmiş özel gizli anahtarıda ekler