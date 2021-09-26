<?php
$sun_info = date_sun_info(time(), 36.5499272091896, 32.009141658781274);
echo "<pre>";
print_r($sun_info); 
echo "</pre>";
//? params : 1. zaman damgası, 2.enlem, 3.boylam
//? güneşin doguşu batışı, öglen gibi zamanları verir
/*
    [sunrise] => 1631936131 -> gün dogumu
    [sunset] => 1631980594 -> gün batımı
    [transit] => 1631958362 -> öglen
    [civil_twilight_begin] => 1631934661 -> karada alacakaranlık başlangıcı
    [civil_twilight_end] => 1631982064 -> karada alacakaranlık bitişi
    [nautical_twilight_begin] => 1631932846 -> denizde alacakaranlık başlangıcı
    [nautical_twilight_end] => 1631983879 -> denizde alakaranlık bitişi
    [astronomical_twilight_begin] => 1631931000 -> astronomik alacakaranlık başlangıcı
    [astronomical_twilight_end] => 1631985724 -> astronomik alacakaranlık bitişi
*/
foreach($sun_info as $key => $value){
    echo $key . " : " . date("H:i:s", $value) . "<br />";
}
echo date("H:i" ,date_sunrise(time(), SUNFUNCS_RET_TIMESTAMP, 36.5499272091896, 32.009141658781274)) . "<br />"; 
//? gün dogumunu bulur
//? params : 1. zaman damgası, 2.kendi parametresi, 3.enlem, 4.boylam
echo date("H:i" ,date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, 36.5499272091896, 32.009141658781274));
//? gün batımını bulur
//? params : 1. zaman damgası, 2.kendi parametresi, 3.enlem, 4.boylam
/*
? date_sunrise() ve date_sunset() tanımlı parametreleri
SUNFUNCS_RET_STRING -> sonuç string gelir
SUNFUNCS_RET_DOUBLE -> sonuç double gelir
SUNFUNCS_RET_TIMESTAMP -> sonuç zaman damgası olarak gelir
*/