<?php
//? içerigin string (metinsel) ifade olup olmadıgını kontrol eder
echo (is_string("Barış KURT")) ? "Bu ifade string (metinsel) ifadedir" : "Bu ifade string (metinsel) degildir", "<br />";
echo (is_string(1)) ? "Bu ifade string (metinsel) ifadedir" : "Bu ifade string (metinsel) degildir", "<br /><br />";

//? içerigin integer (tam sayı) olup olmadıgını kontrol eder
echo (is_int(5.1)) ? "Bu ifade integer (tam sayı) ifadedir" : "Bu ifade integer (tam sayı) degildir", "<br />";
echo (is_int(1)) ? "Bu ifade integer (tam sayı) ifadedir" : "Bu ifade integer (tam sayı) degildir", "<br />";
echo (is_integer(10.50)) ? "Bu ifade integer (tam sayı) ifadedir" : "Bu ifade integer (tam sayı) degildir", "<br />";
echo (is_integer(1)) ? "Bu ifade integer (tam sayı) ifadedir" : "Bu ifade integer (tam sayı) degildir", "<br />";
echo (is_long(10.50)) ? "Bu ifade integer (tam sayı) ifadedir" : "Bu ifade integer (tam sayı) degildir", "<br />";
echo (is_long(1)) ? "Bu ifade integer (tam sayı) ifadedir" : "Bu ifade integer (tam sayı) degildir", "<br /><br />";

//? içerigin float (ondalıklı sayı) olup olmadıgını kontrol eder
echo (is_double(5.1)) ? "Bu ifade float (ondalıklı sayı) ifadedir" : "Bu ifade float (ondalıklı sayı) degildir", "<br />";
echo (is_double(1)) ? "Bu ifade float (ondalıklı sayı) ifadedir" : "Bu ifade float (ondalıklı sayı) degildir", "<br />";
echo (is_float(10.50)) ? "Bu ifade float (ondalıklı sayı) ifadedir" : "Bu ifade float (ondalıklı sayı) degildir", "<br />";
echo (is_float(1)) ? "Bu ifade float (ondalıklı sayı) ifadedir" : "Bu ifade float (ondalıklı sayı) degildir", "<br /><br />";

//? içerigin numeric (sayısal -> int, float, double) olup olmadıgını kontrol eder
echo (is_numeric("1")) ? "Bu ifade numeric (sayısal -> int, float, double) ifadedir" : "Bu ifade numeric (sayısal -> int, float, double) degildir", "<br />";
echo (is_numeric(10)) ? "Bu ifade numeric (sayısal -> int, float, double) ifadedir" : "Bu ifade numeric (sayısal -> int, float, double) degildir", "<br />";
echo (is_numeric(10.52)) ? "Bu ifade numeric (sayısal -> int, float, double) ifadedir" : "Bu ifade numeric (sayısal -> int, float, double) degildir", "<br />";
echo (is_numeric("Barış KURT")) ? "Bu ifade numeric (sayısal -> int, float, double) ifadedir" : "Bu ifade numeric (sayısal -> int, float, double) degildir", "<br /><br />";

//? içerigin bool (mantıksal) ifade olup olmadıgını kontrol eder
echo (is_bool("Barış KURT")) ? "Bu ifade bool (mantıksal) ifadedir" : "Bu ifade bool (mantıksal) degildir", "<br />";
echo (is_bool(true)) ? "Bu ifade bool (mantıksal) ifadedir" : "Bu ifade bool (mantıksal) degildir", "<br /><br />";

//? içerigin null (boş) ifade olup olmadıgını kontrol eder
echo (is_bool("Barış KURT")) ? "Bu ifade null (boş) ifadedir" : "Bu ifade null (boş) degildir", "<br />";
echo (is_bool(null)) ? "Bu ifade null (boş) ifadedir" : "Bu ifade null (boş) degildir", "<br /><br />";

//? içerigin resource (kaynak) ifade olup olmadıgını kontrol eder
//? eger dosya oluşturulmamışsa hata verir
//? veritabanı veya herhangi bir dosya kaynak olabilir
echo (is_resource(fopen("new.txt", "w"))) ? "Bu ifade resource (kaynak) ifadedir" : "Bu ifade resource (kaynak) degildir", "<br />"; //?dosyayı otomatik oluşturcagı için hata vermeyecektir
echo (is_resource(fopen("new2.txt", "r"))) ? "Bu ifade resource (kaynak) ifadedir" : "Bu ifade resource (kaynak) degildir", "<br /><br />";

//? içerigin callable (geri çagırabilen) ifade olup olmadıgını kontrol eder
function _func(){}
echo (is_callable("_func")) ? "Bu ifade callable (geri çagırabilen) ifadedir" : "Bu ifade callable (geri çagırabilen) degildir", "<br /><br />";

//? içerigin array (dizi) ifade olup olmadıgını kontrol eder
echo (is_array(array())) ? "Bu ifade array (dizi) ifadedir" : "Bu ifade array (dizi) degildir", "<br /><br />";

//? içerigin object (nesne) ifade olup olmadıgını kontrol eder
class _class{}
$_class = new _class;
echo (is_object($_class)) ? "Bu ifade object (nesne) ifadedir" : "Bu ifade object (nesne) degildir", "<br /><br />";