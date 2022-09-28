<?php
//! saymaya 1 den başlar
$text = "Barış KURT";
echo substr($text, 8) . "<br />"; //? 8. karakterden sonrasını verir türkçe karakter desteklemez
echo substr($text, -8) . "<br />"; //? sondan 8. karakterden sonrasını verir türkçe karakter desteklemez
echo substr($text, 8, 3) . "<br />"; //? 8. karakterden sonra 3 karakter verir türkçe karakter desteklemez
echo substr($text, -8, 6) . "<br /><br />"; //? sondan 8. karakterden sonra 6 karakter verir türkçe karakter desteklemez

echo mb_substr($text, 8) . "<br />"; //? 8. karakterden sonrasını verir türkçe karakter desteklemez
echo mb_substr($text, -8) . "<br />"; //? sondan 8. karakterden sonrasını verir türkçe karakter desteklemez
echo mb_substr($text, 8, 3) . "<br />"; //? 8. karakterden sonra 3 karakter verir türkçe karakter desteklemez
echo mb_substr($text, -8, 6) . "<br /><br />"; //? sondan 8. karakterden sonra 6 karakter verir türkçe karakter desteklemez

echo mb_substr($text, 8, mb_strlen($text), "utf-8") . "<br />"; //? 8. karakterden sonrasını verir
echo mb_substr($text, -8, mb_strlen($text), "utf-8") . "<br />"; //? sondan 8. karakterden sonrasını verir
echo mb_substr($text, 8, 3, "utf-8") . "<br />"; //? 8. karakterden sonra 3 karakter verir
echo mb_substr($text, -8, 6, "utf-8") . "<br /><br />"; //? sondan 8. karakterden sonra 6 karakter verir

$text1 = "kurt-bar07@hotmail.com info@barisyazilim.net";
echo strstr($text1, "b") . "<br />"; //? belirtilen karakterden sonrasını verir
echo strstr($text1, "b", false) . "<br />"; //? belirtilen karakterden sonrasını verir
echo strstr($text1, "b", true) . "<br />"; //? belirtilen karakterden sonrasını verir
echo stristr($text1, "B") . "<br />"; //? belirtilen karakterden sonrasını verir -- büyük küçük duyarlılıgı yoktur
echo stristr($text1, "B", false) . "<br />"; //? belirtilen karakterden sonrasını verir -- büyük küçük duyarlılıgı yoktur
echo stristr($text1, "B", true) . "<br /><br />"; //? belirtilen karakterden sonrasını verir -- büyük küçük duyarlılıgı yoktur

echo strchr($text1, "b") . "<br />"; //? belirtilen karakterden sonrasını verir
echo strchr($text1, "b", false) . "<br />"; //? belirtilen karakterden sonrasını verir
echo strchr($text1, "b", true) . "<br /><br />"; //? belirtilen karakterden sonrasını verir

echo strrchr($text1, "b") . "<br />"; //? belirtilen karakterden sonrasını verir -- aramaya sondan başlar