<?php
// class name_surname
// {
//     public $name = "Barış";
//     public $surname = "KURT";
// }
// $result = new name_surname;
// echo $result->name . " " . $result->surname;
//!--------------------------------
// class name_surname
// {
//     public const NAME = "Barış";
//     public const SURNAME = "KURT";
// }
// $result = new name_surname;
// echo name_surname::NAME . " " . name_surname::SURNAME;
//!--------------------------------
// class name_surname
// {
//     public function func_name_surname($name, $surname)
//     {
//         return $name . " " . $surname;     
//     }
// }
// $result = new name_surname;
// echo $result->func_name_surname("Barış", "KURT");
//!--------------------------------
class name_surname
{
    var $name = "Barış";
    const SURNAME = "KURT";
}
$result = new name_surname;
echo $result->name . " " . name_surname::SURNAME;