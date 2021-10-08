<?php
echo mb_convert_encoding("Barış KURT - barisyazilim.net", "utf-8", "iso-8859-9") . "<br />"; //? 1. , 2.dönüştürülecek set, 3. içerik seti
echo mb_convert_encoding("BarÄ±Å KURT - barisyazilim.net", "iso-8859-9", "utf-8") . "<br />"; 
echo mb_convert_encoding("BarÄ±Å KURT - barisyazilim.net", "iso-8859-9", "utf-8, iso-8859-1, iso-8859-2") . "<br />"; 
echo mb_detect_encoding("Barış KURT - barisyazilim.net") . "<br />"; //? içerigin karakter kodlamasını verir
echo mb_detect_encoding("BarÄ±Å KURT - barisyazilim.net") . "<br />"; //? içerigin karakter kodlamasını verir
echo "<pre>";
print_r(mb_list_encodings());
echo "</pre>";