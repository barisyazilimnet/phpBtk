<?php
// $query = $mysqli->query("SELECT * FROM php_btk.users AS U INNER JOIN php_btk.statistics AS S ON U.user_id=S.user_id");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

// $query = $mysqli->query("SELECT * FROM php_btk.users AS U INNER JOIN php_btk.statistics AS S ON U.user_id=S.user_id INNER JOIN php_btk.orders AS O ON U.user_id=O.user_id");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

//? soldaki tabloyu getirir ve sagdaki tablo ile eşlesen degerleri alır eşlemeyenleri boş bırakır
// $query = $mysqli->query("SELECT * FROM php_btk.users AS U LEFT JOIN php_btk.statistics AS S ON U.user_id=S.user_id");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

//? sagdaki tabloyu getirir ve soldaki tablo ile eşlesen degerleri alır eşlemeyenleri boş bırakır
// $query = $mysqli->query("SELECT * FROM php_btk.users AS U RIGHT JOIN php_btk.statistics AS S ON U.user_id=S.user_id");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

//? eşleşmeyi otomatik olarak kendisi yapar
// $query = $mysqli->query("SELECT * FROM php_btk.users AS U NATURAL JOIN php_btk.statistics AS S");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

//? 2 tabloda da id sütununa göre eşleşme yapar aynı natural join gibi çalışır
//! iki tablodada sütun ismi " id " olmalı
// $query = $mysqli->query("SELECT * FROM php_btk.users AS U INNER JOIN php_btk.statistics AS S USING (id)");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }
