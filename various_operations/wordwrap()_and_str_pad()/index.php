<?php
$text = "barisyazilim.net - Barış KURT";
echo wordwrap($text, 14, "<br />") . "<br />"; //? 14. karakterin geldigi yere ekleme yapar eger kelimeye denk gelirse kelimenin sonuna ekler
//? içerigin başına sagına veya hem başına ve hemde sagına olacak şekilde belirtilene göre karakter eklemesi yapar
echo str_pad($text, 100, "*", STR_PAD_LEFT) . "<br />";
echo str_pad($text, 100, "*", STR_PAD_BOTH) . "<br />";
echo str_pad($text, 100, "*", STR_PAD_RIGHT) . "<br />";