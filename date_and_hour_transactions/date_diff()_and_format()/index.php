<?php
echo "<pre>";
print_r(date_diff(date_create("2000-01-30"), date_create("2000-04-01"))); //? oluşturulmuş yeni olan iki tarih arasındaki farkı hesaplar
echo "</pre>";

echo date_diff(date_create("2000-01-30"), date_create("2000-04-01"))->format("%y Yıl, %m Ay, %d Gün") . "<br />"; //? dizi halinde gelen degerleri formatlar
echo date_diff(date_create("2000-01-30"), date_create("2000-04-01"))->format("%R%y Yıl, %R%m Ay, %R%d Gün"); //? dizi halinde gelen degerleri formatlar