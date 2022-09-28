<?php
mysqli_query($db_con, "SELECT * FROM php_btk.users");
$mysqli->query("SELECT * FROM php_btk.users");

//? veritabanı oluşturmak için kullanılır
// echo (mysqli_query($db_con, "CREATE DATABASE php_btk1 CHARACTER SET utf8 COLLATE utf8_general_ci")) ? "veritabanı oluşturuldu" : "Veritabanı oluşturmada hata oluştu", "<br />;
// echo ($mysqli->query("CREATE DATABASE php_btk2 CHARACTER SET utf8 COLLATE utf8_general_ci")) ? "veritabanı oluşturuldu" : "Veritabanı oluşturmada hata oluştu";

//? tablo oluşturmak için kullanılır
// echo (mysqli_query($db_con, "CREATE TABLE php_btk.table1 (
//     table1_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     table1_name VARCHAR(100) NOT NULL,
//     table1_surname VARCHAR(100) NOT NULL,
//     table1_email VARCHAR(255) NOT NULL UNIQUE KEY,
//     table1_status TINYINT(1) UNSIGNED NOT NULL,
//     table1_registration_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
//     ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci")) 
//     ? "tablo oluşturuldu" : "tablo oluşturmada hata oluştu" , "<br />";
// echo ($mysqli->query(
//     "CREATE TABLE php_btk.table2 (
//         table2_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         table2_name VARCHAR(100) NOT NULL,
//         table2_surname VARCHAR(100) NOT NULL,
//         table2_email VARCHAR(255) NOT NULL UNIQUE KEY,
//         table2_status TINYINT(1) UNSIGNED NOT NULL,
//         table2_registration_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
//     ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci")) 
//     ? "tablo oluşturuldu" : "tablo oluşturmada hata oluştu";

//? tablo oluşturup kopyalamak için kullanılır
//! sadece yapı
// echo (mysqli_query($db_con, "CREATE TABLE php_btk.new_table1 LIKE php_btk.table1")) ? "tablo oluşturuldu ve kopyalandı" : "tablo oluşturmada hata oluştu" , "<br />";
// echo ($mysqli->query("CREATE TABLE php_btk.new_table2 LIKE php_btk.table2")) ? "tablo  oluşturuldu ve kopyalandı" : "tablo oluşturmada hata oluştu";
//! databaseden database kopyalama
// echo (mysqli_query($db_con, "CREATE TABLE php_btk1.new_table1 LIKE php_btk.table1")) ? "tablo oluşturuldu ve kopyalandı" : "tablo oluşturmada hata oluştu" , "<br />";
// echo ($mysqli->query("CREATE TABLE php_btk1.new_table2 LIKE php_btk.table2")) ? "tablo  oluşturuldu ve kopyalandı" : "tablo oluşturmada hata oluştu";
//! yapı ve veri 
// $query = mysqli_query($db_con, "CREATE TABLE php_btk.new_table3 LIKE php_btk.table1");
// if($query){
//     echo "tablo oluşturuldu ve kopyalandı";
//     mysqli_query($db_con, "INSERT INTO php_btk.new_table3 SELECT * FROM php_btk.table1");
// }else{
//     echo "tablo oluşturmada hata oluştu";
// }
// echo "<br />";
// $query = $mysqli->query("CREATE TABLE php_btk.new_table4 LIKE php_btk.table2");
// if($query){
//     echo "tablo oluşturuldu ve kopyalandı";
//     $mysqli->query("INSERT INTO php_btk.new_table4 SELECT * FROM php_btk.table2");
// }else{
//     echo "tablo oluşturmada hata oluştu";
// }

//? tablo adı degiştirme
// echo (mysqli_query($db_con, "RENAME TABLE php_btk.new_table1 TO php_btk.table5")) ? "tablo adı degiştirildi" : "tablo adı degiştirmede hata oluştu" , "<br />";
// echo ($mysqli->query("RENAME TABLE php_btk.new_table2 TO php_btk.table6")) ? "tablo  adı degiştirildi" : "tablo adı degiştirmede hata oluştu";
//! taşınacak databaseden siler
// echo (mysqli_query($db_con, "RENAME TABLE php_btk.table5 TO php_btk1.table5")) ? "tablo taşındı" : "tablo taşımada hata oluştu" , "<br />";
// echo ($mysqli->query("RENAME TABLE php_btk.table6 TO php_btk1.table6")) ? "tablo taşındı" : "tablo taşımada hata oluştu";

//? tablo ve database silme
// echo (mysqli_query($db_con, "DROP DATABASE sektorel")) ? "veritabanı silindi" : "veritabanı silmede hata oluştu" , "<br />";
// echo ($mysqli->query("DROP DATABASE ulas")) ? "veritabanı silindi" : "veritabanı silmede hata oluştu";
// echo (mysqli_query($db_con, "DROP TABLE php_btk.new_table3")) ? "tablo silindi" : "tablo silmede hata oluştu" , "<br />";
// echo ($mysqli->query("DROP TABLE php_btk.new_table4")) ? "tablo silindi" : "tablo silmede hata oluştu";

//? tabloya stun ekleme silme güncelleme
// TODO : ekleme işlemi
//! en sona ekler
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.users ADD user_name VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.users ADD user_surname VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.users ADD COLUMN user_name1 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.users ADD COLUMN user_surname1 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.users 
//                                 ADD isim VARCHAR(100) NOT NULL,
//                                 ADD soyisim VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.users 
//                         ADD isim1 VARCHAR(100) NOT NULL,
//                         ADD soyisim1 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.users 
//                                 ADD COLUMN name1 VARCHAR(100) NOT NULL,
//                                 ADD COLUMN isim VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.users 
//                         ADD COLUMN cinsiyet VARCHAR(5) NOT NULL,
//                         ADD COLUMN cinsiyet1 VARCHAR(5) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
//! en başa ekler
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD isim VARCHAR(100) NOT NULL FIRST,
//                                 ADD soyisim VARCHAR(100) NOT NULL FIRST")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD isim1 VARCHAR(100) NOT NULL FIRST,
//                         ADD soyisim1 VARCHAR(100) NOT NULL FIRST")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD COLUMN name1 VARCHAR(100) NOT NULL FIRST,
//                                 ADD COLUMN isim5 VARCHAR(100) NOT NULL FIRST")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD COLUMN cinsiyet VARCHAR(5) NOT NULL FIRST,
//                         ADD COLUMN cinsiyet1 VARCHAR(5) NOT NULL FIRST")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
//! belirtilen sütundan sonra ekler
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD isim VARCHAR(100) NOT NULL AFTER table1_surname,
//                                 ADD soyisim VARCHAR(100) NOT NULL AFTER table1_surname")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD isim1 VARCHAR(100) NOT NULL AFTER table1_surname,
//                         ADD soyisim1 VARCHAR(100) NOT NULL AFTER table1_surname")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD COLUMN name1 VARCHAR(100) NOT NULL AFTER table1_surname,
//                                 ADD COLUMN isim5 VARCHAR(100) NOT NULL AFTER table1_surname")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD COLUMN cinsiyet VARCHAR(5) NOT NULL AFTER table1_surname,
//                         ADD COLUMN cinsiyet1 VARCHAR(5) NOT NULL AFTER table1_surname")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
//! karışık ekleme
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD isim VARCHAR(100) NOT NULL FIRST,
//                                 ADD soyisim VARCHAR(100) NOT NULL AFTER table1_surname,
//                                 ADD isim10 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD isim1 VARCHAR(100) NOT NULL FIRST,
//                         ADD soyisim1 VARCHAR(100) NOT NULL AFTER table1_surname,
//                         ADD isim11 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD COLUMN isim2 VARCHAR(100) NOT NULL FIRST,
//                                 ADD COLUMN soyisim2 VARCHAR(100) NOT NULL AFTER table1_surname,
//                                 ADD COLUMN isim12 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD COLUMN isim3 VARCHAR(5) NOT NULL FIRST,
//                         ADD COLUMN soyisim3 VARCHAR(5) NOT NULL AFTER table1_surname,
//                         ADD COLUMN isim13 VARCHAR(100) NOT NULL")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
//!yazılan sırada ekleme
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD isim VARCHAR(100) NOT NULL,
//                                 ADD soyisim VARCHAR(100) NOT NULL AFTER isim,
//                                 ADD isim10 VARCHAR(100) NOT NULL AFTER soyisim")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD isim1 VARCHAR(100) NOT NULL,
//                         ADD soyisim1 VARCHAR(100) NOT NULL AFTER isim1,
//                         ADD isim11 VARCHAR(100) NOT NULL AFTER soyisim1")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 
//                                 ADD COLUMN isim2 VARCHAR(100) NOT NULL,
//                                 ADD COLUMN soyisim2 VARCHAR(100) NOT NULL AFTER isim2,
//                                 ADD COLUMN isim12 VARCHAR(100) NOT NULL AFTER soyisim2")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 
//                         ADD COLUMN isim3 VARCHAR(5) NOT NULL,
//                         ADD COLUMN soyisim3 VARCHAR(5) NOT NULL AFTER isim3,
//                         ADD COLUMN isim13 VARCHAR(100) NOT NULL AFTER soyisim3")) ? "Sütun eklendi" : "sütun eklemede hata oluştu" , "<br />";

// TODO : degiştirme
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 CHANGE isim isim500 CHAR(100) NOT NULL")) ? "Sütun ismi degişti" : "sütun ismi degişmede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 CHANGE isim1 isim501 CHAR(100) NOT NULL")) ? "Sütun ismi degişti" : "sütun ismi degişmede hata oluştu", "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 CHANGE COLUMN isim2 isim502 CHAR(100) NOT NULL")) ? "Sütun ismi degişti" : "sütun ismi degişmede hata oluştu", "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 CHANGE COLUMN isim3 isim503 CHAR(100) NOT NULL")) ? "Sütun ismi degişti" : "sütun ismi degişmede hata oluştu", "<br />";

// TODO : sütun özellikleri degiştirme
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 MODIFY isim500 VARCHAR(100)")) ? "Sütun yapısı degişti" : "sütun yapısı degişmede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 MODIFY isim501 VARCHAR(100)")) ? "Sütun yapısı degişti" : "sütun yapısı degişmede hata oluştu", "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 MODIFY COLUMN isim502 VARCHAR(100)")) ? "Sütun yapısı degişti" : "sütun yapısı degişmede hata oluştu", "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 MODIFY COLUMN isim503 VARCHAR(100)")) ? "Sütun yapısı degişti" : "sütun yapısı degişmede hata oluştu", "<br />";

// TODO : silme
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 DROP isim500")) ? "Sütun silindi" : "sütun silmede hata oluştu" , "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 DROP isim501")) ? "Sütun silindi" : "sütun silmede hata oluştu", "<br />";
// echo (mysqli_query($db_con, "ALTER TABLE php_btk.table1 DROP COLUMN isim502")) ? "Sütun silindi" : "sütun silmede hata oluştu", "<br />";
// echo ($mysqli->query("ALTER TABLE php_btk.table1 DROP COLUMN isim503")) ? "Sütun silindi" : "sütun silmede hata oluştu", "<br />";

//? tablo içi boşaltma
// echo (mysqli_query($db_con, "TRUNCATE TABLE php_btk.table1")) ? "tablo içi boşaltıldı" : "tablo içi boşaltmada hata oluştu" , "<br />";
// echo ($mysqli->query("TRUNCATE TABLE php_btk.table2")) ? "tablo içi boşaltıldı" : "tablo içi boşaltmada hata oluştu", "<br />";

//? tabloları ve sütunları listeleme
// $query = mysqli_query($db_con, "SHOW TABLES FROM php_btk");
// $query1 = $mysqli->query("SHOW TABLES FROM php_btk");
// while ($table_names = mysqli_fetch_array($query)) {
//     echo $table_names[0] . "<br />";
// }
// echo "<br />";
// while ($table_names = $query1->fetch_array()) {
//     echo $table_names[0] . "<br />";
// }
// echo "<br />";
// $query = mysqli_query($db_con, "SHOW COLUMNS FROM php_btk.table1");
// $query1 = $mysqli->query("SHOW COLUMNS FROM php_btk.table1");
// while ($column_names = mysqli_fetch_array($query)) {
//     echo $column_names[0] . "<br />";
// }
// echo "<br />";
// while ($column_names = $query1->fetch_array()) {
//     echo $column_names[0] . "<br />";
// }

//? tablo bakım ve onarımı
// echo (mysqli_query($db_con, "CHECK TABLE php_btk.table1")) ? "tablo kontrol edildi" : "tablo kontrol etmede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "ANALYZE TABLE php_btk.table1")) ? "tablo analiz edildi" : "tablo analiz etmede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "REPAIR TABLE php_btk.table1")) ? "tablo tamir edildi" : "tablo tamir etmede hata oluştu" , "<br />";
// echo (mysqli_query($db_con, "OPTIMIZE TABLE php_btk.table1")) ? "tablo optimize edildi" : "tablo optimize etmede hata oluştu" , "<br />";
// echo ($mysqli->query("CHECK TABLE php_btk.table2")) ? "tablo kontrol edildi" : "tablo kontrol etmede hata oluştu", "<br />";
// echo ($mysqli->query("ANALYZE TABLE php_btk.table2")) ? "tablo analiz edildi" : "tablo analiz etmede hata oluştu", "<br />";
// echo ($mysqli->query("REPAIR TABLE php_btk.table2")) ? "tablo tamir edildi" : "tablo tamir etmede hata oluştu" , "<br />";
// echo ($mysqli->query("OPTIMIZE TABLE php_btk.table2")) ? "tablo optimize edildi" : "tablo optimize etmede hata oluştu", "<br />";

//? LIMIT ve ORDER BY
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users LIMIT 2"); //? 2 kayıt getirir
// while($result = mysqli_fetch_object($query)){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users LIMIT 2"); //? 2 kayıt getirir
// while($result = $query->fetch_object()){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users LIMIT 1, 2"); //? indexi 1 olan kayıttan başlar 2 kayıt getirir
// while($result = mysqli_fetch_object($query)){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users LIMIT 1, 2"); //? indexi 1 olan kayıttan başlar 2 kayıt getirir
// while($result = $query->fetch_object()){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name"); //? kullanıcı adlarında alfabeye göre a-z sıralama yapar
// while($result = mysqli_fetch_object($query)){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name ASC"); //? kullanıcı adlarında alfabeye göre a-z sıralama yapar
// while($result = mysqli_fetch_object($query)){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users ORDER BY user_name DESC"); //? kullanıcı adlarında alfabeye göre z-a sıralama yapar
// while($result = $query->fetch_object()){
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name, user_registration_date"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = mysqli_fetch_object($query)) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name ASC, user_registration_date ASC"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = mysqli_fetch_object($query)) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users ORDER BY user_name DESC, user_registration_date DESC"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name, user_registration_date DESC"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = mysqli_fetch_object($query)) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name DESC, user_registration_date"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = mysqli_fetch_object($query)) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users ORDER BY user_name ASC, user_registration_date DESC"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = mysqli_fetch_object($query)) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users ORDER BY user_name DESC, user_registration_date ASC"); //? kullanıcı adlarında ve kayıt tarihlarinde sıralma yapar
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }

//? WHERE -- LIKE -- NOT LIKE -- IN -- NOT IN
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users WHERE user_approval_status=1");
// while ($result = mysqli_fetch_object($query)) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users WHERE user_approval_status=0");
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users WHERE user_name_surname LIKE '%r%'");
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users WHERE user_name_surname NOT LIKE '%r%'");
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users WHERE user_id IN (1,3)");
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users WHERE user_id NOT IN (1,3)");
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users WHERE FIND_IN_SET (159753, user_password)"); //? tam eşleşenleri bulur
// while ($result = $query->fetch_object()) {
//     echo "üye id : " . $result->user_id . "<br />";
//     echo "üye adı : " . $result->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . "<br />";
//     echo "üye şifresi : " . $result->user_password . "<br />";
//     echo "üye email adresi : " . $result->user_email . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . "<br /><br />";
// }

//? mysqli_num_rows() -- num_rows()
// echo $mysqli->query("SELECT * FROM php_btk.users")->num_rows;

//? mysqli_fetch_lengths() -- lengths
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($result = $query->fetch_object()) {
//     $character_number = $query->lengths;
//     echo "üye id : " . $result->user_id . " karatker uzunlugu : " . $character_number[0] . "<br />";
//     echo "üye adı : " . $result->user_name . " karatker uzunlugu : " . $character_number[1] . "<br />";
//     echo "üye kullanıcı adı : " . $result->user_name_surname . " karatker uzunlugu : " . $character_number[2] . "<br />";
//     echo "üye şifresi : " . $result->user_password . " karatker uzunlugu : " . $character_number[3] . "<br />";
//     echo "üye email adresi : " . $result->user_email . " karatker uzunlugu : " . $character_number[4] . "<br />";
//     echo "üye dogum tarihi : " . $result->user_birthday . " karatker uzunlugu : " . $character_number[5] . "<br />";
//     echo "üye onay durumu : " . $result->user_approval_status . " karatker uzunlugu : " . $character_number[6] . "<br />";
//     echo "üye kayıt tarihi : " . $result->user_registration_date . " karatker uzunlugu : " . $character_number[7] . "<br /><br />";
// }

// //? DISTINCT -- aynı olanları filtreleyerek tek bir sefer yazdırır
// $query = $mysqli->query("SELECT DISTINCT user_birthday FROM php_btk.users");
// while($result=$query->fetch_object()){
//     echo $result->user_birthday . "<br />";
// }

//? GROUP BY -- aynı olanları gruplayarak tek bir sefer yazdırır
//! HAVING ile beraber kullanılır kullanımı aynı where ile aynıdır
// $query = $mysqli->query("SELECT * FROM php_btk.users GROUP BY user_birthday");
// while($result=$query->fetch_object()){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

//? INSERT INTO
// $mysqli->query("INSERT INTO php_btk.users (user_name, user_name_surname, user_password, user_email, user_birthday, user_approval_status) VALUES ('Mehmet KURT1', 'mekurt07', '123456', 'mekurt07@gmail.com1', '1960-02-20', '1')");

//? mysqli_insert_id() -- insert_id
// $mysqli->query("INSERT INTO php_btk.users (user_name, user_name_surname, user_password, user_email, user_birthday, user_approval_status) VALUES ('Mehmet KURT3', 'mekurt07', '123456', 'mekurt07@gmail.com3', '1960-02-20', '1')");
// echo $mysqli->insert_id;

//? UPDATE
// $mysqli->query("UPDATE php_btk.users SET user_approval_status=1 WHERE user_approval_status=0");

//? REPLACE -- yorum metinleri içindeki br leri \n yapar
// $mysqli->query("UPDATE php_btk.comments SET comment_text=REPLACE(comment_text, '<br/>', '\n')");

//? DELETE
// $mysqli->query("DELETE FROM php_btk.users WHERE user_id=10");
