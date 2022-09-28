<?php
// try {
//     $db_con = new PDO("mysql:host=localhost;dbname=php_btk;charset=UTF8", "root", ""); //? veritabanı baglantısı yapar
//     echo "Baglantı kuruldu";
// } catch (PDOException $err) { //? oluşan hatayı yakalar
//     die("Hata : " .  $err->getMessage()); //? hata mesajını ekrana yazdırır
// }
// $db_con = null; //? baglantıyı kapatır

// try {
//     $db_con = new PDO("mysql:host=localhost;dbname=php_btk", "root", ""); //? veritabanı baglantısı yapar
//     $db_con->exec("SET CHARACTER SET UTF8");
//     echo "Baglantı kuruldu";
// } catch (PDOException $err) { //? oluşan hatayı yakalar
//     die("Hata : " .  $err->getMessage()); //? hata mesajını ekrana yazdırır
// }
// $db_con = null; //? baglantıyı kapatır

//? birden fazla baglanma
// try {
//     $db_con = new PDO("mysql:host=localhost;dbname=php_btk;charset=UTF8", "root", ""); //? veritabanı baglantısı yapar
//     $db_con1 = new PDO("mysql:host=localhost;dbname=php_btk1;charset=UTF8", "root", ""); //? veritabanı baglantısı yapar
//     echo "Baglantı kuruldu";
// } catch (PDOException $err) { //? oluşan hatayı yakalar
//     die("Hata : " .  $err->getMessage()); //? hata mesajını ekrana yazdırır
// }
// $db_con = null; //? baglantıyı kapatır
// $db_con1 = null; //? baglantıyı kapatır

try {
    $db_con = new PDO("mysql:host=localhost;charset=UTF8", "root", ""); //? veritabanı baglantısı yapar
    echo "Baglantı kuruldu";
} catch (PDOException $err) { //? oluşan hatayı yakalar
    die("Hata : " .  $err->getMessage()); //? hata mesajını ekrana yazdırır
}
// $db_con->query("SELECT * FROM php_btk.table1");
// $db_con->query("SELECT * FROM php_btk1.table5");
// $db_con = null; //? baglantıyı kapatır
