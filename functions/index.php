<?php
// $GLOBALS["name"] = "Barış KURT";
// function write(){
//     echo $GLOBALS["name"];
// }

// $name = "Barış KURT";
// function write(){
//     global $name;
//     echo $name;
// }
// write();

// echo "<br />";

// $write = function(){ // anonim fonksiyon
//     echo "Barış KURT";
// };
// $write();

// $names = array(
//     "Barış",
//     "Semih",
//     function () {
//         echo "Gülşah KARATAŞ";
//     },
//     "Erkan"
// );
// echo $names[0] . "<br />";
// echo $names[1] . "<br />";
// $names[2]();
// echo "<br />";
// echo $names[3];

//! sınırsız parametre fonksiyonları
// ? func_num_args() => fonksiyona gönderilen parametre sayısını bulur
// ? func_get_args() => fonksiyona gönderilen parametre degerlerini alarak yeni bir dizi oluşturur
//? func_get_arg() => fonksiyona gönderilen parametre degerlerini dizi olarak kabul ederek belirtilecek olan anahtara ait elemanın degerini döndürür
// function information()
// {
//     echo "Gelen parametre sayısı => " . func_num_args() . "<br />";
//     echo "<pre>";
//     print_r(func_get_args());
//     echo "</pre>";
//     foreach(func_get_args() as $values){
//         echo $values . "<br />";
//     }
//     echo func_get_arg(5);
// }
// echo information("Barış KURT", "Alanya", 21, "Yazılım Geliştirme Uzmanı", "kurt-bar07@hotmail.com", "barisyazilim.net");

// $run = "trial";
// function trial(){
//     echo "Barış KURT";
// }
// $run();

// (function(){ // ? otomatik çalışan fonksiyon
//     echo "Barış KURT";
// })();

// (function($name){ // ? otomatik çalışan fonksiyon
//     echo $name;
// })("Barış KURT");

// function tranaciton($number) // ? kendini tekrarlayan fonksiyon -> recursive fonksiyon
// {
//     if ($number <= 10) {
//         echo $number . "<br />";
//         tranaciton($number + 1);
//     }
// }
// tranaciton(1);

// function tranaciton()
// {
//     static $number = 0; //? statik oldugu için son degeri elinde tutar ve onun üzerine ekler
//     $number += 1;
//     echo "Sayı degeri = " . $number . "<br />";
// }
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();
// tranaciton();

