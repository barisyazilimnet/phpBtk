<?php
echo $mysqli->query("SELECT COUNT(*) AS total_records FROM php_btk.orders")->fetch_object()->total_records . "<br />";
echo $mysqli->query("SELECT MIN(order_amount) AS min_amount FROM php_btk.orders")->fetch_object()->min_amount . "<br />";
echo $mysqli->query("SELECT MAX(order_amount) AS max_amount FROM php_btk.orders")->fetch_object()->max_amount . "<br />";
echo $mysqli->query("SELECT SUM(order_amount) AS total_amount FROM php_btk.orders")->fetch_object()->total_amount . "<br />";
echo $mysqli->query("SELECT AVG(order_amount) AS average_amount FROM php_btk.orders")->fetch_object()->average_amount . "<br />";
