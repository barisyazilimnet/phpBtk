<?php
echo iconv("utf-8", "iso-8859-9", "Barış KURT") . "<br />"; //? karakter seti dönüşümü yapar -- eger sorun olmayan bir içerikte dönüşüm yapılırsa içerik bozulur
echo iconv("utf-8", "iso-8859-1//TRANSLIT", "Barış KURT") . "<br />"; //? karakter seti dönüşümü yapar -- eger sorun olmayan bir içerikte dönüşüm yapılırsa içerik bozulur -- eger dönüştüremedigi karakterin yerine benzer karakter bulabilirse onu koyar yoksa kural dışı karakteri koyar
echo iconv("utf-8", "iso-8859-1//IGNORE", "Barış KURT"); //? karakter seti dönüşümü yapar -- eger sorun olmayan bir içerikte dönüşüm yapılırsa içerik bozulur -- eger dönüştüremedigi karakter olursa yok eder

echo "<pre>";
print_r(iconv_get_encoding("all")); //? php dosyasında tanımlı olan encodingleri verir
echo "</pre>";

iconv_set_encoding("input_encoding", "iso-8859-9"); //? girdi encodigini degiştirir

echo "<pre>";
print_r(iconv_get_encoding("all")); //? php dosyasında tanımlı olan encodingleri verir
echo "</pre>";