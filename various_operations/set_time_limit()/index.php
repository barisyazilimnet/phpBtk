<?php

echo "Varsayılan deger :" . ini_get("max_execution_time") . " saniye<br />";
set_time_limit(2); //? php dosyasının maksimum çalışma süresini belirler -- 2 saniye
echo "Varsayılan deger :" . ini_get("max_execution_time") . " saniye<br />";