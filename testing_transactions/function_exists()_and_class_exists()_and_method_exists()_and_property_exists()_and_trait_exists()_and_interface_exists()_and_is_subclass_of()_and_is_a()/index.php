<?php
//? fonksiyonun varlıgını kontrol eder
function _func(){}
echo (function_exists("_fun")) ? "Belirtilen fonksiyon bulunmaktadır" : "Belirtilen fonksiyon bulunmamaktadır", "<br />";
echo (function_exists("_func")) ? "Belirtilen fonksiyon bulunmaktadır" : "Belirtilen fonksiyon bulunmamaktadır", "<br /><br />";

//? classın varlıgını kontrol eder
class _class{}
echo (class_exists("_clas")) ? "Belirtilen class bulunmaktadır" : "Belirtilen class bulunmamaktadır", "<br />";
echo (class_exists("_class")) ? "Belirtilen class bulunmaktadır" : "Belirtilen class bulunmamaktadır", "<br /><br />";

//? classın içinde methodun varlıgını kontrol eder
class _class1{ public function _func(){} }
$_class = new _class1;
echo (method_exists($_class, "_fun")) ? "Belirtilen method bulunmaktadır" : "Belirtilen method bulunmamaktadır", "<br />";
echo (method_exists($_class, "_func")) ? "Belirtilen method bulunmaktadır" : "Belirtilen method bulunmamaktadır", "<br /><br />";

//? classın içinde property (özellik) varlıgını kontrol eder
class _class2{ public $name; }
$_class1 = new _class2;
echo (property_exists($_class1, "surname")) ? "Belirtilen property (özellik) bulunmaktadır" : "Belirtilen property (özellik) bulunmamaktadır", "<br />";
echo (property_exists($_class1, "name")) ? "Belirtilen property (özellik) bulunmaktadır" : "Belirtilen property (özellik) bulunmamaktadır", "<br /><br />";

//? traitin varlıgını kontrol eder
trait _trait{}
echo (trait_exists("trait")) ? "Belirtilen traitin bulunmaktadır" : "Belirtilen traitin bulunmamaktadır", "<br />";
echo (trait_exists("_trait")) ? "Belirtilen traitin bulunmaktadır" : "Belirtilen traitin bulunmamaktadır", "<br /><br />";

//? interface varlıgını kontrol eder
interface _interface{}
echo (interface_exists("interface")) ? "Belirtilen interface bulunmaktadır" : "Belirtilen interface bulunmamaktadır", "<br />";
echo (interface_exists("_interface")) ? "Belirtilen interface bulunmaktadır" : "Belirtilen interface bulunmamaktadır", "<br /><br />";

//? sınıfdan türeyen alt sınıfın varlıgını kontrol eder
class aaa{}
class bbb extends aaa{}
echo (is_subclass_of("bbb", "aaa")) ? "Belirtilen subclass bulunmaktadır" : "Belirtilen subclass bulunmamaktadır", "<br />";
echo (is_subclass_of("bbb", "aaaa")) ? "Belirtilen subclass bulunmaktadır" : "Belirtilen subclass bulunmamaktadır", "<br /><br />";

//? sınıfı başlatmak için verildigi degişkenin dogrulugunu - nesnel örnegi olup olmadıgını - kontrol eder
class a{}
$a = new a;
echo (is_a($a, "a")) ? "Belirtilen degişken sınıfın nesnel örnegidir" : "Belirtilen degişken sınıfın nesnel örnegi degildir", "<br />";
echo (is_a($a, "aa")) ? "Belirtilen degişken sınıfın nesnel örnegidir" : "Belirtilen degişken sınıfın nesnel örnegi degildir", "<br /><br />";