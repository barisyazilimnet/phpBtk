<?php
echo time() . "<br />"; //? geçerli zamanının unix zaman damgası degerini verir
echo mktime(15, 20, 30, 1, 30, 2000) . "<br />"; //? belirtilen zamanının unix zaman damgası degerini verir eger boş olursa time() aynı degeri verir -- saat dakika saniye ay gün yıl
echo "<pre>";
print_r(getdate(mktime(15, 20, 30, 1, 30, 2000)));
echo "</pre>";
echo microtime() . "<br />"; //? geçerli zamanının unix zaman damgası ve mikro saniye degerini bulur -- ilk deger mikro saniye degeridir
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";
//? geçerli zamanının unix zaman damgası, mikro saniye, yaz saati uygulaması ve Greenwich batısı degerlerinden dizi oluşturur.
//? ayrıca istenirse string olarakda geçerli zamanın unix zaman damgası ve mikro saniye degerini bulur
/*
    [sec] => 1631782346 -> zaman damgası
    [usec] => 750025 -> micro saniye
    [minuteswest] => -180 -> greenwich batısı
    [dsttime] => 0 -> yaz saati uygulaması aktif mi
*/

echo gettimeofday(true); //? zaman damgası . mikro saniye