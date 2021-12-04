<?php
// echo "<pre>";
// print_r(get_defined_vars()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün degişkenleri verir
// echo "</pre>";

$name = "Barış";
$colors = array("Brown", "Black", "White");
setcookie("information", "barisyazilim.net");

// echo "<pre>";
// print_r(get_defined_vars()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün degişkenleri verir
// echo "</pre>";

// echo "<pre>";
// print_r(get_defined_constants()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün sabitleri verir
// echo "</pre>";

define('NAME', 'Barış');
define('COUNTRY', "Türkiye");

// echo "<pre>";
// print_r(get_defined_constants()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün sabitleri verir
// echo "</pre>";

// echo "<pre>";
// print_r(get_defined_functions()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün fonksiyonları verir
// echo "</pre>";

function _func(){}

// echo "<pre>";
// print_r(get_defined_functions()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün fonksiyonları verir
// echo "</pre>";

// echo "<pre>";
// print_r(get_declared_classes()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün sınıfları verir
// echo "</pre>";

class _class{
    var $name_surname = "Barış KURT";
    public const CHARACTERS = "ABC";
    public $numbers1 = "12";
    private $numbers2 = "34";
    protected $numbers3 = "56";
    static $numbers4 = "78";
    public function _func1(){}
    private function _func2(){}
    protected function _func3(){}
    static function _func4(){}
}
$_class = new _class;

// echo "<pre>";
// print_r(get_declared_interfaces()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün interface leri verir
// echo "</pre>";

interface _interface{}

// echo "<pre>";
// print_r(get_declared_traits()); //? sisteme tanımlı olan ve sonradan tanımlanan bütün trait leri verir
// echo "</pre>";

trait _trait{}

// echo "<pre>";
// print_r(get_class_vars("_class")); //? belirtilen sınıfın degişken ve özellik isimleri ile birlikte degerlerini verir sadece public ve static olan özellikler alınır
// echo "</pre>";

// echo "<pre>";
// print_r(get_object_vars($_class)); //? belirtilen sınıfın degişken ve özellik isimleri ile birlikte degerlerini verir sadece public olan özellikler alınır
// echo "</pre>";

echo "<pre>";
print_r(get_class_methods("_class")); //? belirtilen sınıfın method isimlerini verir sadece public ve static olan özellikler alınır
echo "</pre>";