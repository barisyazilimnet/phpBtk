<?php
echo strftime("%d %B %Y %T %A") . "<br />"; //? gün ay yıl saat ve günün adını yazar
echo strftime("%d %B %Y %T %A", mktime(20, 30, 45, 1, 30, 2000)) . "<br />"; //? belirtilen günün gün ay yıl saat ve günün adını yazar
echo strftime("%d.%m.%Y %T %Z") . "<br />"; //? gün ay yıl saat ve türkiye standar saati yazar
echo iconv("LATIN5", "UTF-8", strftime("%d.%m.%Y %T %Z")) . "<br />"; //? gün ay yıl saat ve türkiye standar saati yazar türkçe karakter sorununu kaldırır
echo strtotime("1 day", strtotime(date("Y-m-d"))) . "<br />"; //? ingilizce içerikli bir zamanın unix zaman damgasını bulur
//? bugünün zaman damgasını bularak üstüne 1 gün ekler   1 gün zaman damgası degeri -> 86400
echo strtotime("now") . "<br />"; //? şuanın zaman damgasını verir
echo strtotime("+1 second") . "<br />"; //? 1 saniye sonranın zaman damgasını verir
echo strtotime("+1 munite") . "<br />"; //? 1 dakika sonranın zaman damgasını verir
echo strtotime("+1 hour") . "<br />"; //? 1 saat sonranın zaman damgasını verir
echo strtotime("+1 day") . "<br />"; //? 1 gün sonranın zaman damgasını verir
echo strtotime("+1 week") . "<br />"; //? 1 hafta sonranın zaman damgasını verir
echo strtotime("+1 month") . "<br />"; //? 1 ay sonranın zaman damgasını verir
echo strtotime("+1 year") . "<br />"; //? 1 yıl sonranın zaman damgasını verir
echo strtotime("+1 year +3 month +5 day +8 hour") . "<br />";
