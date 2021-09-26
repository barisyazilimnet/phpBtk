<?php
//? varsayılan geçerli zaman dilimi verir
//? varsayılan degeri xamppda boştur ondan dolayı europe/berlin degerini verir
//? php.ini dosyasında date.timezone = Europe/Istanbul şeklinde degiştirilebilir
// echo date_default_timezone_get() . "<br />";

//? varsayılan degeri 2047 dir ve bütün zaman dilimlerini verir
/*
1 : Africa (Afrika)
2 : America (Amerika)
4 : Antarctica (Antartika)
8 : Arctic (Kuzey Kutbu)
16 : Asia (Asya)
32 : Atlantic (Atlantik)
64 : Australia (Avustralya)
128 : Europe (Avrupa)
256 : Indian (Hindistan)
512 : Pacific (Pasifik)
2047 : All (Tümü)
*/
// echo "<pre>";
// print_r(timezone_identifiers_list()); //? zaman dilimlerini verir
// echo "</pre>";

// date_default_timezone_set("America/Guatemala"); //? Geçerli zaman dilimini degiştirir
// echo date_default_timezone_get() . "<br />";

setlocale(LC_ALL, "tr_TR"); //? Tüm yerel ayarlar türkiye ve türkçeye göre uyarlanır
setlocale(LC_ALL, "tr_TR", "tr", "turkish"); //? Tüm yerel ayarlar türkiye ve türkçeye göre uyarlanır