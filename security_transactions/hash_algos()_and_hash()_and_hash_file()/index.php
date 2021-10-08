<?php
echo "<pre>";
print_r(hash_algos()); //? yazılımda kullanılabilecek olan tüm şifreleme algoritmalarını verir
echo "</pre>";

echo md5("159753") . "<br />";
echo hash("md5", "159753") . "<br />"; //? aynı md5 gibi şifrelenmiş md5 i verir

echo md5_file("./aa.rar") . "<br />";
echo hash_file("md5", "./aa.rar"); //? aynı md5 gibi şifrelenmiş md5 i verir