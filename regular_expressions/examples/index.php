<?php
// echo "Orjinal Metin<br /><span style='color:aqua'>Barış KURT</span><br />";
// $result = preg_replace("/<\/?[^>]+>/", "", "<span style='color:aqua'>Barış KURT</span>");
// echo $result;

// echo "<br /><br />";

//? ^0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}$ -> telefon numarası dogrulatmada kullanılabilir
// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. Bana 0532 497 38 73 Numaradan Ulaşabilirsiniz<br />";
// preg_match("/\s+0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}\s+/", "Merhaba Benim Adım Barış KURT. Bana 0532 497 38 73 Numaradan Ulaşabilirsiniz", $result1);
// echo "<pre>";
// print_r($result1);
// echo "</pre>";

// echo "<br /><br />";

//? ^[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{4}$ -> tarih dogrulatmada kullanılabilir
// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 30.01.2000 dogumluyum<br />";
// preg_match("/\s+[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{4}\s+/", "Merhaba Benim Adım Barış KURT. 30.01.2000 dogumluyum", $result2);
// echo "<pre>";
// print_r($result2);
// echo "</pre>";

// echo "<br /><br />";

//? ^[0-9]{2}\s?[a-zA-Z]{1,}\s?[0-9]{1,}$ -> plaka dogrulatmada kullanılabilir
// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. Aracımın plakası 07 NHF 27 dir<br />";
// preg_match("/\s+[0-9]{2}\s?[a-zA-Z]{1,}\s?[0-9]{1,}\s+/", "Merhaba Benim Adım Barış KURT. Aracımın plakası 07 NHF 27 dir", $result3);
// echo "<pre>";
// print_r($result3);
// echo "</pre>";

// echo "<br /><br />";

//? ^(http(s)?:\/\/.)?(www\.)?[a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]{2,256}\.[a-z]{2,6}\b([a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]*)+$ -> URL dogrulatmada kullanılabilir
// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. https://www.barisyazilim.net Benim Sitemdir.<br />";
// preg_match("/\s+(http(s)?:\/\/.)?(www\.)?[a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]{2,256}\.[a-z]{2,6}\b([a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]*)+\s+/", "Merhaba Benim Adım Barış KURT. https://www.barisyazilim.net Benim Sitemdir.", $result4);
// echo "<pre>";
// print_r($result4);
// echo "</pre>";

// echo "<br /><br />";

//? ^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$ -> mail adresi dogrulatmada kullanılabilir
echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. kurt-bar07@hotmail.com Benim Mail Adresimdir.<br />";
preg_match("/\s+(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))\s+/", "Merhaba Benim Adım Barış KURT. kurt-bar07@hotmail.com Benim Mail Adresimdir.", $result5);
echo "<pre>";
print_r($result5);
echo "</pre>";

// echo "<br /><br />";
