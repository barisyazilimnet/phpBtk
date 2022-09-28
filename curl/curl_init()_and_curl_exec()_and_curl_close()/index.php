<?php
$ch = curl_init("https://www.sahibinden.com/"); //? ilk önce siteye baglanır 
curl_exec($ch); //? siteyi localhostta çalıştırır
curl_close($ch); //? baglantıyı sonlandırır