<?php
echo "Orjinal içerik <br /> Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz <br />Degiştirilmiş içerik <br />" . 
preg_filter(array("/Barış/"), array("Ali"), "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz") . "<br /><br />";
//? içerikte degiştirilmek istenen degerleri degiştirir

echo "Orjinal içerik <br /> Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz <br />Degiştirilmiş içerik <br />" . 
preg_replace(array("/Barış/"), array("Ali"), "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz") . "<br /><br />";
//? içerikte degiştirilmek istenen degerleri degiştirir

echo "Orjinal içerik <br /> Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz <br />Degiştirilmiş içerik <br />" . 
preg_replace(array("/Barış/", "/Yazılımcıyım/", "/KURT/"), array("Ali", "Uçak İndiricisi", "ÜSTÜN"), "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz") . "<br /><br />";
//? içerikte degiştirilmek istenen degerleri degiştirir

echo "Orjinal içerik <br /><pre>";
print_r(array(22, 23.32, 42.009, "23:43:43"));
echo "</pre>";
echo "Degiştirilmiş içerik <br /><pre>";
print_r(preg_replace(array("/2/", "/\./", "/:/"), array("1", ",", "."), array(22, 23.32, 42.009, "23:43:43"))); //? içerikte degiştirilmek istenen degerleri degiştirir
echo "</pre>";