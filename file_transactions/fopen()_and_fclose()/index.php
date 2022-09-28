<?php
$_openfile = fopen("new.txt", "r");
/*
r -> okuma amaçlı
r+ -> hem okuma hem yazma amaçlı
w -> yazma amaçlı açar. dosya verisini silerek baştan yazar. dosya mevcut degilse oluşturur
w+ -> hem okuma hem yazma amaçlı açar. dosya verisini silerek baştan yazar. dosya mevcut degilse oluşturur
a -> yazma amaçlı açar. dosya verisinden devam ederek yazar. dosya mevcut degilse oluşturur
a+ -> hem okuma hem yazma amaçlı açar. dosya verisinden devam ederek yazar. dosya mevcut degilse oluşturur
x-> yazma amaçlı açar. dosya mevcut degilse hata verir
x+ -> hem okuma hem yazma amaçlı açar. dosya mevcut degilse hata verir
*/
echo ($_openfile) ? "Dosya başarılı ile açıldı" : "Dosya açılamadı";
fclose($_openfile);