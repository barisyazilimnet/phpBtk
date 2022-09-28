<?php
$text = "Barış KURT - 2000 - [A'dan Z'ye PHP Görsel Eğitim Seti] - {barisyazilim.net} - Şirketi ortak mı kuracağım?";
$tv = 'Philips 27" Monitör';
// $addslashes_text = addslashes($text); //? tek tırnak ve çift tırnakların önüne "\" ters slash ekler
// $addslashes_text = addslashes($tv); //? tek tırnak ve çift tırnakların önüne "\" ters slash ekler
// echo $addslashes_text . "<br />";
// echo stripslashes($addslashes_text); //? tek tırnak ve çift tırnakların önüne "\" ters slashı kaldırır

// $addcslashes_text = addcslashes($text, "'"); //? belirtilen karakterlerin önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// $addcslashes_text = addcslashes($tv, '"'); //? belirtilen karakterlerin önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// $addcslashes_text = addcslashes($text, 'a...z'); //? bütün harflerin önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// $addcslashes_text = addcslashes($text, 'A...Z'); //? bütün harflerin önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// $addcslashes_text = addcslashes($tv, '0...9'); //? bütün rakamların önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// $addcslashes_text = addcslashes($text, 'a...zA...Z0...9'); //? herşeyin önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// $addcslashes_text = addcslashes($text, " -'?"); //? belirtilen karakterlerin önüne "\" ters slash ekler --- normal karakterlerde kullanılması önerilmez
// echo $addcslashes_text . "<br />";
// echo stripcslashes($addcslashes_text); //? "\" ters slashı kaldırır

$quotemeta_text = quotemeta($text); //? özel karakterlerin önüne "\" ters slash ekler
echo $quotemeta_text . "<br />";

/*
! özel karakterler
$   \   ?   +   *   ^   []  ()  .
*/