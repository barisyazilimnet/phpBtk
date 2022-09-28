<?php
$text = "Benim-adım-Barış-KURT";
echo str_replace("-", " ", $text) . "<br /><br />";

$text1 = "Benim adım Ali ÜSTÜN. Ben bir Python yazılımcısıyım.";
$_array1 = array("ali", "ÜSTÜN", "python");
$_array2 = array("Barış", "KURT", "PHP");
echo str_ireplace($_array1, $_array2, $text1) . "<br /><br />"; //? büyük küçük harf duyarsızlıgını kaldırır -- türkçe karakter sıkıntısı var

$text2 = "Benim adım Ali ÜSTÜN. Ben bir Python yazılımcısıyım.";
$_array = array("Ali ÜSTÜN" => "Barış KURT", "Python" => "PHP");
echo strtr($text2, $_array) . "<br /><br />"; //? anahatarlar degerlerini normal degerlerle degiştirir

$text3 = "Semih ACAR bir Pyhton yazılımcısıdır";
//? içerik, eklenecek içerik, kaçıncı karakterden eklenmeye başlanacagı, kaç karakter silecegi
echo substr_replace($text3, "Barış KURT ve ", 0, 0) . "<br />";
echo substr_replace($text3, "Barış KURT", 0, 10) . "<br />";
echo substr_replace($text3, " ve Barış KURT", 10) . "<br />"; //? ekleme yaptıktan sonrasını komple siler
echo substr_replace($text3, " ve Barış KURT", 10, 0) . "<br />";
echo substr_replace($text3, " ve Barış KURT", -30) . "<br /><br />"; //? sondan saymaya başlayarak sondan 30 karakter siler ve ekleme yapar

$text4 = "barisyazilim.net\nBarış KURT";
echo $text4 . "<br />";
echo nl2br($text4); //? \n leri <br /> tagına dönüştürür