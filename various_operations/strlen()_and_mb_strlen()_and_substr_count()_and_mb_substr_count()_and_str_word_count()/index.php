<?php
echo strlen("Barış KURT - barisyazilim.net") . "<br />";
echo mb_strlen("Barış KURT - barisyazilim.net") . "<br />";
echo mb_strlen("Barış KURT - barisyazilim.net", "utf-8") . "<br /><br />";

echo substr_count("Barış KURT - barisyazilim.net", "a") . "<br />"; //? büyük harf küçük harf duyarlı
echo substr_count("PHP - Barış KURT - barisyazilim.net - PHP", "PHP") . "<br />"; //? büyük harf küçük harf duyarlı
echo substr_count("PHp - Barış KURT - barisyazilim.net - PHP", "PHP") . "<br />"; //? büyük harf küçük harf duyarlı
echo substr_count("PHPPHPPHPPHPPHPPHPPHP - Barış KURT - barisyazilim.net - PHPPHPPHPPHPPHPPHPPHP", "PHP") . "<br />"; //? büyük harf küçük harf duyarlı -- bu tür degerler yani tekrarlanan degerlerde kullanılması önerilmez yanlış sonuçlar verebilir
echo substr_count("PHP - Barış KURT - barisyazilim.net - PHP", "PHP", 4) . "<br />"; //? büyük harf küçük harf duyarlı -- 4. karakterden sonra saymaya başlar
echo substr_count("PHP - Barış KURT - barisyazilim.net - PHP", "PHP", 4, 10) . "<br /><br />"; //? büyük harf küçük harf duyarlı -- 4. karakterden sonra saymaya başlar 10. karakterde biter

echo mb_substr_count("Barış KURT - barisyazilim.net", "a") . "<br />"; //? büyük harf küçük harf duyarlı
echo mb_substr_count("PHP - Barış KURT - barisyazilim.net - PHP", "PHP") . "<br />"; //? büyük harf küçük harf duyarlı
echo mb_substr_count("PHp - Barış KURT - barisyazilim.net - PHP", "PHP") . "<br />"; //? büyük harf küçük harf duyarlı
echo mb_substr_count("PHPPHPPHPPHPPHPPHPPHP - Barış KURT - barisyazilim.net - PHPPHPPHPPHPPHPPHPPHP", "PHP") . "<br /><br />"; //? büyük harf küçük harf duyarlı -- bu tür degerler yani tekrarlanan degerlerde kullanılması önerilmez yanlış sonuçlar verebilir

echo mb_substr_count("Barış KURT - barisyazilim.net", "a", "utf-8") . "<br />"; //? büyük harf küçük harf duyarlı
echo mb_substr_count("PHP - Barış KURT - barisyazilim.net - PHP", "PHP", "utf-8") . "<br />"; //? büyük harf küçük harf duyarlı
echo mb_substr_count("PHp - Barış KURT - barisyazilim.net - PHP", "PHP", "utf-8") . "<br />"; //? büyük harf küçük harf duyarlı
echo mb_substr_count("PHPPHPPHPPHPPHPPHPPHP - Barış KURT - barisyazilim.net - PHPPHPPHPPHPPHPPHPPHP", "PHP", "utf-8") . "<br /><br />"; //? büyük harf küçük harf duyarlı -- bu tür degerler yani tekrarlanan degerlerde kullanılması önerilmez yanlış sonuçlar verebilir

echo str_word_count("Barış KURT - barisyazilim.net") . "<br />"; //? Kelime saysını verir
echo str_word_count("Barış KURT - barisyazilim.net", 0) . "<br />"; //? Kelime saysını verir
echo "<pre>";
print_r(str_word_count("Barış KURT - barisyazilim.net", 1)); //? Kelimeleri parçaladıgı yerden dizi oluşturarak verir
echo "</pre>";
echo "<pre>";
print_r(str_word_count("Barış KURT - barisyazilim.net", 2)); //? Kelimeleri parçaladıgı yerden dizi oluşturarak verir ve elemanların indis numaralarını kelimenin başladıgı karakter sayısı olarak belirler
echo "</pre>";

echo str_word_count("Barış KURT - barisyazilim.net", 0, "ğĞüÜşŞıİöÖçÇ") . "<br />"; //? Kelime saysını verir
echo "<pre>";
print_r(str_word_count("Barış KURT - barisyazilim.net", 1, "ğĞüÜşŞıİöÖçÇ")); //? Kelimeleri parçaladıgı yerden dizi oluşturarak verir
echo "</pre>";
echo "<pre>";
print_r(str_word_count("Barış KURT - barisyazilim.net", 2, "ğĞüÜşŞıİöÖçÇ")); //? Kelimeleri parçaladıgı yerden dizi oluşturarak verir ve elemanların indis numaralarını kelimenin başladıgı karakter sayısı olarak belirler
echo "</pre>";