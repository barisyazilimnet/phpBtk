<?php
echo bindec(10010001) . "<br />"; //? ikilik (binary) sayının decimal (onluk) sayıya dönüştürür
echo octdec(221) . "<br />"; //? sekizlik (octal) sayının decimal (onluk) sayıya dönüştürür
echo hexdec(91) . "<br /><br />"; //? onaltılık (hexadecimal) sayının decimal (onluk) sayıya dönüştürür

//! çok önemli
//! hepsi 1453 karşılıgı
//! eger sıfırla başlıyorsa tırnaklar içinde yazılır veya başında sıfır olmamalı -> 10110101101
echo "bindec('010110101101') => " . bindec("010110101101") . "<br />";
echo "bindec(10110101101) => " . bindec(10110101101). "<br />"; 
echo "octdec(2655) => " . octdec(2655) . "<br />";
echo "hexdec('5AD') => " . hexdec("5AD") . "<br />"; //! eger içinde harf bulunuyorsa tırnaklar içinde yazılmalı