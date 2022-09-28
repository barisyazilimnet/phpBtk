<?php
// $query = $db_con->query("SELECT * FROM php_btk.users", PDO::FETCH_ASSOC);
// $query = $db_con->query("SELECT * FROM php_btk.users", PDO::FETCH_NUM);
// $query = $db_con->query("SELECT * FROM php_btk.users", PDO::FETCH_BOTH);
// $query = $db_con->query("SELECT * FROM php_btk.users", PDO::FETCH_OBJ);
// echo $db_con->exec("INSERT INTO php_btk.users (user_name) VALUES ('GameMaster')");

/*
? veritabanı oluşturma
? tablo oluşturma
? tablo kopyalama
? tablo adı degiştirme
? tablo taşıma
? veritabanı silme
? tablo silme
? sütun oluşturma, sütun ismi degiştirme, sütun yapısı degiştirme ve sütun silme
? tablo içini boşaltma
? tabloları ve sütunları listeme
? tablo bakım onarım işlemleri
? aynı mysqli deki gibi
*/

// $query = $db_con->query("SELECT * FROM php_btk.users");
// foreach($query as $result){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }
// $query = $db_con->query("SELECT * FROM php_btk.users")->fetch();
// echo "<pre>";
// print_r($query);
// echo "</pre>";
// $query = $db_con->query("SELECT * FROM php_btk.users")->fetchAll();
// foreach($query as $result){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

// echo $db_con->query("SELECT * FROM php_btk.users", PDO::FETCH_OBJ)->rowcount(); //? hem işlemden etkilenen kayıt sayısını ve mysqlideki kayıt sayısını verir

// $db_con->query("INSERT INTO php_btk.orders (user_id, order_amount) VALUES (2,156)");
// echo $db_con->lastInsertId();

// $query = $db_con->prepare("SELECT * FROM php_btk.users");
// $query->execute();
// echo "<pre>";
// print_r($query->fetch(PDO::FETCH_OBJ));
// echo "</pre>";

// $query = $db_con->prepare("SELECT * FROM php_btk.users");
// $query->execute();
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

// $query = $db_con->prepare("SELECT * FROM php_btk.users WHERE user_id>=? AND user_id<=?");
// $query->execute([2,5]);
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

// $query = $db_con->prepare("SELECT * FROM php_btk.users WHERE user_id>=:id AND user_id<=:id_1");
// $query->execute(["id" => 1, "id_1" => 10]);
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

// $id = 1; 
// $id_1 = 10; 
// $query = $db_con->prepare("SELECT * FROM php_btk.users WHERE user_id>=? AND user_id<=?");
// $query->bindParam(1, $id, PDO::PARAM_INT);
// $query->bindParam(2, $id_1, PDO::PARAM_INT);
// $query->execute();
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

// $id = 1; 
// $id_1 = 10; 
// $query = $db_con->prepare("SELECT * FROM php_btk.users WHERE user_id>=:id AND user_id<=:id_1");
// $query->bindParam("id", $id, PDO::PARAM_INT);
// $query->bindParam("id_1", $id_1, PDO::PARAM_INT);
// $query->execute();
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

// $id = 1; 
// $id_1 = 10; 
// $query = $db_con->prepare("SELECT * FROM php_btk.users WHERE user_id>=? AND user_id<=?");
// $query->bindValue(1, $id, PDO::PARAM_INT);
// $query->bindValue(2, $id_1, PDO::PARAM_INT);
// $query->execute();
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

// $id = 1; 
// $id_1 = 10; 
// $query = $db_con->prepare("SELECT * FROM php_btk.users WHERE user_id>=:id AND user_id<=:id_1");
// $query->bindValue("id", $id, PDO::PARAM_INT);
// $query->bindValue("id_1", $id_1, PDO::PARAM_INT);
// $query->execute();
// foreach ($query->fetchAll(PDO::FETCH_OBJ) as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

$db_con->beginTransaction();
$query = $db_con->prepare("UPDATE php_btk.bank_accounts SET quantity=quantity-1000 WHERE id=3");
echo "<pre>";
print_r($db_con->errorInfo());
echo "</pre>";
$query->execute();
$query1 = $db_con->prepare("UPDATE php_btk.bank_accounts SET quantity=quantity+1000 WHERE id=1");
echo "<pre>";
print_r($db_con->errorInfo()); //? sqldeki hataları gösteririr
echo "</pre>";
$query1->execute();
if (($query == true) and ($query1 == true)) {
    $db_con->commit();
    echo "İşlem tamamlandı";
} else {
    $db_con->rollBack(); //? işlemi geri alır
    echo "Hata oluştu";
}