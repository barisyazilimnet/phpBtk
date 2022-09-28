<?php
// @$db_con = mysqli_connect("localhost", "root", "", "php_btk"); //? veri tabanı baglantısını saglar
@$db_con = mysqli_connect("localhost", "root", ""); //? sunucu baglantısını saglar
// if (mysqli_connect_errno()) {//? veri tabanına baglanırken hata kodu dönüp dönmedigine bakar
//     echo mysqli_connect_error() . "<br />";
//     die("veritabanına baglanılamadı"); //? bu satırdan sonraki bütün kodu durdurur ve ekrana mesajı yazar
// } 
// mysqli_select_db($db_con, "php_btk"); //? veri tabanına baglantı saglar
mysqli_set_charset($db_con, "UTF8"); //? veri tabanı baglantısında karakter seti tanımlaması yapar 
// mysqli_close($db_con); //? veritabanı baglantısını sonlandırır

// @$mysqli = new mysqli("localhost", "root", "", "php_btk"); //? veri tabanı baglantısını saglar
@$mysqli = new mysqli("localhost", "root", ""); //? sunucu baglantısını saglar
if ($mysqli->connect_errno) { //? veri tabanına baglanırken hata kodu dönüp dönmedigine bakar
    echo $mysqli->connect_error . "<br />";
    die("veritabanına baglanılamadı"); //? bu satırdan sonraki bütün kodu durdurur ve ekrana mesajı yazar
}
// $mysqli->select_db($db_con, "php_btk"); //? veri tabanına baglantı saglar
$mysqli->set_charset("UTF8"); //? veri tabanı baglantısında karakter seti tanımlaması yapar 
// $mysqli->close();

// $db_con = mysqli_init();
// mysqli_real_connect($db_con, "localhost", "root", "", "ph_btk");
// mysqli_close($db_con);

// $db_con = mysqli_init();
// $db_con->real_connect($db_con, "localhost", "root", "", "ph_btk");
// $db_con->close();

//? birden fazla vt baglantısı
// $mysqli->query("SELECT * FROM php_btk.users");