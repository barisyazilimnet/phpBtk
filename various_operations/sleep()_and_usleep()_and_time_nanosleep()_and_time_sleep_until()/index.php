<?php
//! ilk önce üst taraf okunur sonra bekleme süresine göre bekleme yapılır ve kodun devamı okunur 
//! tüm sayfanın kod okunması tamamlandıktan sonra ekrana yazdırır
// sleep(2); //? 2 sn lik bekletme yapar
// echo "Barış KURT<br />";
// usleep(5000000); //? 5sn eşit -> mikro saniye cinsinden belirtilmeli
// time_nanosleep(4, 500000000); //? 4.5 sn eşit -> sn ve nano saniye cinsinden belirtilmeli
time_sleep_until(strtotime("+5 second"));
echo "barisyazilim.net";