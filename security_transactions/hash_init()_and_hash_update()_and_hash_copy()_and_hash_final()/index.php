<?php
echo hash("md5", "159753") . "<br />";
$encryption = hash_init("md5");
hash_update($encryption, "159753");
echo hash_final($encryption) . "<br /><br />";

$encryption1 = hash_init("md5");
hash_update($encryption1, "159753");
hash_update($encryption1, "123456"); //? ikinci update deki içerigi birinci update edilen içerigin sonuna boşluk eklemeden ekler
echo hash_final($encryption1) . "<br /><br />";

$encryption2 = hash_init("md5");
hash_update($encryption2, "159753");
$copy = hash_copy($encryption2);
echo hash_final($encryption2) . "<br /><br />";

hash_update($copy, "123456"); 
echo hash_final($copy) . "<br /><br />";