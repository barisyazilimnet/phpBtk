<?php
echo base_convert(145, 10, 2) . "<br />"; //? 145 sayısını onluk (decimal) sayı gibi algılayıp ikilik (binary) sayı sistemine dönüştürür
echo base_convert(145, 10, 8) . "<br />"; //? 145 sayısını onluk (decimal) sayı gibi algılayıp sekizlik (octal) sayı sistemine dönüştürür
echo base_convert(145, 10, 16) . "<br /><br />"; //? 145 sayısını onluk (decimal) sayı gibi algılayıp onaltılık (hexadecimal) sayı sistemine dönüştürür

echo base_convert("8AC", 16, 2) . "<br />"; //? "8AC" sayısını onaltılık (hexadecimal)  sayı gibi algılayıp ikilik (binary) sayı sistemine dönüştürür
echo base_convert("8AC", 16, 8) . "<br />"; //? "8AC" sayısını onaltılık (hexadecimal) sayı gibi algılayıp sekizlik (octal) sayı sistemine dönüştürür
echo base_convert("8AC", 16, 10) . "<br /><br />"; //? "8AC" sayısını onaltılık (hexadecimal) sayı gibi algılayıp onluk (decimal) sayı sistemine dönüştürür

echo base_convert(706, 8, 2) . "<br />"; //? 706 sayısını sekizlik (octal)  sayı gibi algılayıp ikilik (binary) sayı sistemine dönüştürür
echo base_convert(706, 8, 10) . "<br />"; //? 706 sayısını sekizlik (octal) sayı gibi algılayıp onluk (decimal) sayı sistemine dönüştürür
echo base_convert(706, 8, 16) . "<br /><br />"; //? 706 sayısını sekizlik (octal) sayı gibi algılayıp onaltılık (hexadecimal) sayı sistemine dönüştürür