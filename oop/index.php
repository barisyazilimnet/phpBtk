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
// class name_surname
// {
//     var $name = "Barış";
//     const SURNAME = "KURT";
// }
// $result = new name_surname;
// echo $result->name . " " . name_surname::SURNAME;
//!-----------------------------------------
// class formats{
//     public $text;
//     public $style;
//     public function text($text_value)
//     {
//         $this->text = $text_value;
//         return $this; //? bu fonksiyonu döndürür
//     }
//     public function color($color_value)
//     {               
//         $this->style = "color:" . $color_value . "; ";
//         return $this; //? bu fonksiyonu döndürür
//     }
//     public function size($size_value)       
//     {
//         $this->style .= "font-size:" . $size_value . "; ";
//         return $this;
//     }
//     public function finished()
//     {
//         return "<div style='" . $this->style . "'>" . $this->text . "</div>";
//     }
// }
// $result = new formats;
// echo $result->text("Barış KURT - barisyazilim.net")->color("red")->size("20px")->finished(); //? zincirleme fonksiyon kullanılabilmesi için fonksiyonların için return $this ifadesi yer almalı

// class calculator{
//     private $result;
//     public function __construct($number)
//     {
//         $this->result = $number;
//     }
//     public function plus($number)
//     {               
//         $this->result += $number;
//         return $this;
//     }
//     public function munis($number)       
//     {
//         $this->result -= $number;
//         return $this;
//     }
//     public function multiply($number)       
//     {
//         $this->result *= $number;
//         return $this;
//     }
//     public function divided_by($number)       
//     {
//         $this->result /= $number;
//         return $this;
//     }
//     public function finished()
//     {
//         return $this->result . "<br />";
//     }
// }
// $result = new calculator(100);
// echo $result->plus(50)->plus(100)->multiply(5)->finished();

require "classes/standart_transactions.php";
require "classes/calculator_transactions.php";
use \calculator_transactions\transactions as ct, \standart_transactions\transactions as st;

$result = new ct;
// $result = new \calculator_transactions\transactions;
echo $result->plus(30, 30) . "<br />";

$result1 = new st;
// $result1 = new \standart_transactions\transactions;
echo $result1->name;
