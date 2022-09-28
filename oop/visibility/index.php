<?php
// class _class{

//     public $name = "Barış";
//     public const SURNAME = "KURT";
//     public function _write(){
//         return $this->name . " " . self::SURNAME; 
//         //? class içinde olan bir standart özellige class içinde olan bir fonksiyondan ulaşmak için $this kullanılır
//         //? class içinde olan bir sabit olan özellige class içinde olan bir fonksiyondan ulaşmak için self kullanılır
//     }
// }

// class _class1 extends _class{
//     //? _class sınıfındaki tüm public ve protected özelliklere ve fonksiyonlara bu sınıfdan ulaşılabilir
//     public function _write1()
//     {
//         return parent::_write(); //? üst sınıfdaki fonksiyonu aynı şekilde buradada kullanmak için parent kullanılır
//     }
// }
// $_class = new _class1;
// echo $_class->_write1();

class _static{
    public static $name = "Barış KURT";
    public static function hello(){
        return "Merhaba";
    }
}

echo _static::hello() . " " . _static::$name;
