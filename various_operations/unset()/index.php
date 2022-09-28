<?php
// $name = "Barış KURT";
// echo $name . "<br />";
// unset($name); //? degişkeni yok eder
// echo $name; //? hata verir çünkü degişken yok edildi

// $name = "Barış";
// $surname = "KURT"; 
// echo $name . " " . $surname . "<br />";
// unset($name, $surname); //? degişkenleri yok eder
// echo $name . " " . $surname; //? hata verir çünkü degişkenler yok edildi

// $names = array("Barış", "Semih", "Ali");
// echo "<pre>";
// print_r($names);
// echo "</pre>";
// unset($names); //? diziyi yok eder
// echo "<pre>";
// print_r($names); //? hata verir çünkü dizi yok edildi
// echo "</pre>";

// $names = array("Barış", "Semih", "Ali");
// echo "<pre>";
// print_r($names);
// echo "</pre>";
// unset($names[1]); //? dizinin 1. indexdeki elemanı yok eder
// echo "<pre>";
// print_r($names); //? dizi 2 elemanlı olarak ekrana yazar ve index numaraları degişmez
// echo "</pre>";

$_SESSION["name"] = "Barış KURT";
echo $_SESSION["name"];
unset($_SESSION["name"]); //? sessionu yok eder
echo $_SESSION["name"]; //? hata verir çünkü session yok edildi