<?php
//? php eklentisinin yüklü olup olmadıgını kontrol eder
echo (extension_loaded("gd")) ? "Belirtilen eklenti yüklüdür" : "Belirtilen eklenti yüklü degildir", "<br />";
echo (extension_loaded("xml")) ? "Belirtilen eklenti yüklüdür" : "Belirtilen eklenti yüklü degildir", "<br />";
echo (extension_loaded("ffmpeg")) ? "Belirtilen eklenti yüklüdür" : "Belirtilen eklenti yüklü degildir", "<br />";