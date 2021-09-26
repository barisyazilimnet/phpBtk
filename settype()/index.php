<?php
$number = "5";
echo $number, " => ", gettype($number) . "<br />";
settype($number, "integer");
echo "settype ile veri türü degiştirildi<br />" . $number, " => ", gettype($number), "<br /><br /><br />";

$number2 = 85.45;
echo $number2, " => ", gettype($number2) . "<br />";
settype($number2, "integer");
echo "settype ile veri türü degiştirildi<br />" . $number2, " => ", gettype($number2), "<br />";
?>