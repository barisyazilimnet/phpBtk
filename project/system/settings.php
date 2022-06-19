<?php
session_start();
ob_start();
try {
    $db_con = new PDO("mysql:host=localhost;dbname=php_btk_project;charset=UTF8", "root", "");
} catch (PDOException $e) {
    // die($e->getMessage());
    die();
}

$query = $db_con->prepare("SELECT * FROM settings");
$query->execute();
$settings = $query->fetch(PDO::FETCH_OBJ);
