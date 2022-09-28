<?php
$credit_card_number = str_split("1234567890123456", 4);
echo "<pre>";
print_r($credit_card_number);
echo "</pre>";
foreach($credit_card_number as $key => $value){
    echo ($key==0 or $key==(count($credit_card_number)-1)) ? $value . " " : "**** "; 
}

echo "<br /><br />";

echo "<pre>";
print_r(str_split("1234567890123456"));
echo "</pre>";

echo "<pre>";
print_r(mb_split("\s", "barisyazilim.net - Barış KURT"));
echo "</pre>";

echo "<pre>";
print_r(mb_split("\w", "barisyazilim.net - Barış KURT"));
echo "</pre>";

echo "<pre>";
print_r(mb_split("-", "barisyazilim.net - Barış KURT"));
echo "</pre>";

echo "<pre>";
print_r(mb_split("-\s", "barisyazilim.net - Barış KURT"));
echo "</pre>";

echo strtok("barisyazilim.net-Barış KURT", "-") . "<br />"; //? ilk eşlesen degerin öncesini verir
echo strpbrk("barisyazilim.net-Barış KURT", "-"); //? ilk eşlesen degerin sonrasını verir