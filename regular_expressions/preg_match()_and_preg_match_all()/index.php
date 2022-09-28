<?php
preg_match("/Barış/", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result);
//? ilk degerde belirtilen degerin 2. içerikte arar ve sonucu diziye aktarır. ilk eşleşmeyi buldugu anda işlem durur
echo "<pre>";
print_r($result);
echo "</pre>";

preg_match_all("/Barış/", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result1);
//? ilk degerde belirtilen degerin 2. içerikte arar ve sonucu diziye aktarır. ilk eşleşmeyi buldugu anda işlem durur
echo "<pre>";
print_r($result1);
echo "</pre>";

preg_match("/\w/", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result2);
//? 2. içerikte alt çizgi harf rakam gibi şeyleri arar ve sonucu diziye aktarır. ilk eşleşmeyi buldugu anda işlem durur
echo "<pre>";
print_r($result2);
echo "</pre>";

preg_match_all("/\w/", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result3);
//? 2. içerikte alt çizgi harf rakam gibi şeyleri arar ve sonucu diziye aktarır. ilk eşleşmeyi buldugu anda işlem durur
echo "<pre>";
print_r($result3);
echo "</pre>";