<?php
//? dosyanın varlıgını belirtir
echo (file_exists("new.txt")) ? "Belirtilen dosya bulunmaktadır" : "Belirtilen dosya bulunmamaktadır", "<br />";
echo (file_exists("ne.txt")) ? "Belirtilen dosya bulunmaktadır" : "Belirtilen dosya bulunmamaktadır", "<br /><br />";

//? klasor olup olmadıgını kontrol eder
echo (is_dir("new.txt")) ? "Belirtilen içerik klasordür" : "Belirtilen içerik klasor degildir", "<br />";
echo (is_dir("new")) ? "Belirtilen içerik klasordür" : "Belirtilen içerik klasor degildir", "<br /><br />";

//? dosya olup olmadıgını kontrol eder
echo (is_file("new.txt")) ? "Belirtilen içerik dosyadır" : "Belirtilen içerik dosya degildir", "<br />";
echo (is_file("new")) ? "Belirtilen içerik dosyadır" : "Belirtilen içerik dosya degildir", "<br /><br />";

//? dosyanın veya klasorün okunabilirligini kontrol eder
echo (is_readable("new")) ? "Belirtilen dosya veya klasör okunabilir" : "Belirtilen dosya veya klasör okunamaz", "<br /><br />";

//? dosyanın veya klasorün yazıbilirligini kontrol eder
echo (is_writeable("new")) ? "Belirtilen dosya veya klasör yazılabilir" : "Belirtilen dosya veya klasör yazılabilir", "<br />";
echo (is_writable("new")) ? "Belirtilen dosya veya klasör yazılabilir" : "Belirtilen dosya veya klasör yazılabilir", "<br /><br />";

//? uygulamaların vb çalıştırılabilirligini kontrol eder
echo (is_executable("C:\Users\kurt-\Downloads\LBP6030_V2111_W64_TR.exe")) ? "Belirtilen uygulamaların vb çalıştırılabilir" : "Belirtilen uygulamaların vb çalıştırılamaz", "<br />";
echo (is_executable("new")) ? "Belirtilen uygulamaların vb çalıştırılabilir" : "Belirtilen uygulamaların vb çalıştırılamaz", "<br /><br />";

//? dosyanın veya klasorün yüklenebilirligini kontrol eder
//! bütün dosyalar yüklenebilir
//! şuan bilgisayarda oldugu için yüklenemez hatası verir
echo (is_uploaded_file("new.txt")) ? "Belirtilen dosya veya klasör yüklenebilir" : "Belirtilen dosya veya klasör yüklenemez", "<br /><br />";