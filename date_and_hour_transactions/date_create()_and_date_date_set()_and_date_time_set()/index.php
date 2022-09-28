<?php
$_date = date_create("2000-1-30"); //? belirtilecek olan tarih degerlerine göre yeni bir tarih dizi nesnesi oluşturur -- yıl-ay-gün
date_date_set($_date, 2000, 04, 01); //? bazı sunucularda sıfırlı hali dogru olur bazı sunucularda sıfırsız hali --- yıl-ay gün
date_time_set($_date, 13, 55, 34); //? bazı sunucularda sıfırlı hali dogru olur bazı sunucularda sıfırsız hali saat dakika saniye

echo "<pre>";
print_r($_date);
echo "</pre>";