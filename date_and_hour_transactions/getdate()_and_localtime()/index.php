<?php
echo "<pre>";
print_r(getdate()); //? geçerli zamanın degerlerinden yeni bir dizi oluşturur
echo "</pre>";
echo "<pre>";
print_r(localtime()); //? yerel zamanın degerlerinden yeni bir dizi oluşturur
echo "</pre>";
echo "<pre>";
print_r(localtime(date("U"), true)); //? yerel zamanın degerlerinden yeni bir dizi oluşturur
echo "</pre>";
echo "<pre>";
print_r(localtime(true)); //? yerel zamanın degerlerinden yeni bir dizi oluşturur -- sadece true yazıldıgı için 1.1.1970 i verir
echo "</pre>";
/*
    [0] => 29 -> saniye
    [1] => 30 -> dakika
    [2] => 11 -> saat
    [3] => 16 -> gün
    [4] => 8 -> ay degeridir ama degerler sıfırdan başlar ocak => 0. aydır  aralık => 11. aydır
    [5] => 121 -> yıl degeridir yılın başlangıcı olarak 1900 kabul edilir ve kaç yıl geçtigini gösterir
    [6] => 4 -> haftanın kaçıncı gün oldugunu söler
    [7] => 258 -> yılın kaçıncı günü oldugunu söler
    [8] => 0  -> yıl yaz saati uygulaması uygulanıyor mu onu söler
*/