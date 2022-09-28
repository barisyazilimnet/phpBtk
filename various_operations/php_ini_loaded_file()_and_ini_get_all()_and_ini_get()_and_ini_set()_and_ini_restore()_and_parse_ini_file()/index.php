<?php
// echo php_ini_loaded_file() . "<br />"; //? php.ini dosyasının yolunu  verir

// echo "<pre>";
// print_r(ini_get_all()); //? php.ini dosyasındaki yapılandırma ayarlarını verir
// echo "</pre>";

// echo "<pre>";
// print_r(ini_get_all("session")); //? php.ini dosyasındaki session ile ilgili yapılandırma ayarlarını verir
// echo "</pre>";

// echo "<pre>";
// print_r(ini_get_all("mysqli", false)); //? php.ini dosyasındaki mysqli ile ilgili yapılandırma ayarlarını verir ama kısa kısa verir
// echo "</pre>";

// echo ini_get("upload_max_filesize") . "<br />"; //? maximum yüklenebilir dosya boyutunu verir eklenti oldugu için ini_get_all fonksiyonu ile ulaşılamaz
// echo ini_get("display_errors") . "<br />"; //? hataları gösterme eklentisi
// ini_set("display_errors", 0); //? eklentinin degeri off olur ve hataları göstermez
// echo ini_get("display_errors") . "<br />"; //? hataları gösterme eklentisi
// ini_restore("display_errors"); //? degiştirilmiş degeri sıfırlar
// echo ini_get("display_errors") . "<br />"; //? hataları gösterme eklentisi

echo "<pre>";
print_r(parse_ini_file("barisyazilim.ini")); //? ini dosyası içindeki bilgileri kısa kısa verir
echo "</pre>";
echo "<pre>";
print_r(parse_ini_file("barisyazilim.ini", true)); //? ini dosyası içindeki bilgileri uzun verir
echo "</pre>";