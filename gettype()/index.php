<?php
$value = "Barış KURT";
echo $value, " => ", gettype($value), "<br />";

$number = "1";
echo $number, " => ", gettype($number), "<br />";

$number1 = 1;
echo $number1, " => ", gettype($number1), "<br />";

$number2 = 5.53;
echo $number2, " => ", gettype($number2), "<br />";

$boolen1 = true;
echo $boolen1, " => ", gettype($boolen1), "<br />";
$boolen2 = false;
echo $boolen2, " => ", gettype($boolen2), "<br />";

$array = array("Barış KURT");
echo "<pre>";
print_r($array);
echo "</pre>", gettype($array), "<br />";

class class1{
    public $name = "Barış KURT";
}
$transaction = new class1;
echo $transaction->name, " => ", gettype($transaction), "<br />";

$null_value = null;
echo " => ", gettype($null_value), "<br />";