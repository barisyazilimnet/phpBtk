<?php
// echo date_timestamp_get(date_create("2000-1-30")); //? oluşturulmuş tarih nesnesinin unix zaman damgası degerini verir
$_date = date_create();
date_timestamp_set($_date, 949183200); //? oluşturulmuş tarih nesnesine belirtilecek olan unix zaman damgası degerini atar

echo "<pre>";
print_r($_date);
echo "</pre>";