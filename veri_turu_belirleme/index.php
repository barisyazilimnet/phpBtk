<?php
// ! degeri komple degiştirir
/*
? boolen & bool
? integer & int
? float & double & real
? string -> a-z A-Z 0-9
? array
? object
? unset -> null
*/
$value = (int) "5";
echo $value, " => ", gettype($value), "<br />";

//! orjinal degeri degiştirmez
/*
? intval()
? boolval()
? floatval() & doubleval()
*/
$value1 = 5.56;
echo $value1, " => ", gettype($value1), "<br />";
echo "intval() kullanılarak deger türü degiştirilmiştir <br />", intval($value1), " => ", gettype($value1);
?>