<?php
// class _class{
//     public function __construct()
//     {
//         echo "Sınıf çalıştı ve yapıcı method devreye girdi<br />";
//     }

//     public $name = "Barış";
//     public $surname = "KURT";
//     public function _write(){
//         return "PHP";
//     }

//     public function __destruct()
//     {
//         echo "Sınıf içindeki tüm özellikler ve methodlar çalıştı yıkıcı method devreye girdi";
//     }
// }
// $_class = new _class;
// echo $_class->name . " " . $_class->surname;

class db{
    public function __construct($hostname, $username, $password, $vt)
    {
        echo $hostname . "<br />" . $username . "<br />" . $password . "<br />" . $vt . "<br />";
    }
    public function __destruct()
    {
        echo "Sınıf içindeki tüm özellikler ve methodlar çalıştı yıkıcı method devreye girdi";
    }
}
$db = new db("localhost", "barisyazilim.net", 12345, "barisyazilim");