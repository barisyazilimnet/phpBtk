<?php
/*
? özel karakterleri dönüştürür
-> &
-> '
-> "
-> <
-> >
*/
$text = "<b>Barış Yazılım.net</b> & <i>Barış KURT</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $text . "<br /><br />";
echo htmlspecialchars($text) . "<br />";
echo htmlspecialchars($text, ENT_COMPAT) . "<br />"; //? varsayılan deger -- sadece çift tırnakları dönüştürür
echo htmlspecialchars($text, ENT_QUOTES) . "<br />"; //? hem çift tırnakları hemde tek tırnakları dönüştürür
echo htmlspecialchars($text, ENT_NOQUOTES) . "<br /><br />"; //? çift tırnakları ve tek tırnakları dönüştürmez

echo htmlspecialchars_decode(htmlspecialchars($text)) . "<br />"; //? dönüştürülmüş karakterleri geri dönüştürür
echo htmlspecialchars_decode(htmlspecialchars($text, ENT_COMPAT)) . "<br />"; //? varsayılan deger -- tek tırnakları dönüştürmez
echo htmlspecialchars_decode(htmlspecialchars($text, ENT_QUOTES)) . "<br />"; //? hem çift tırnakları hemde tek tırnakları geri dönüştürür
echo htmlspecialchars_decode(htmlspecialchars($text, ENT_NOQUOTES)) . "<br /><br />"; //? çift tırnakları ve tek tırnakları dönüştürmez

//? tüm özel karakterleri dönüştürür
echo htmlentities($text) . "<br />";
echo htmlentities($text, ENT_COMPAT) . "<br />"; //? varsayılan deger -- sadece çift tırnakları dönüştürür
echo htmlentities($text, ENT_QUOTES) . "<br />"; //? hem çift tırnakları hemde tek tırnakları dönüştürür
echo htmlentities($text, ENT_NOQUOTES) . "<br /><br />"; //? çift tırnakları ve tek tırnakları dönüştürmez

echo html_entity_decode(htmlentities($text)) . "<br />"; //? dönüştürülmüş karakterleri geri dönüştürür
echo html_entity_decode(htmlentities($text, ENT_COMPAT)) . "<br />"; //? varsayılan deger -- tek tırnakları dönüştürmez
echo html_entity_decode(htmlentities($text, ENT_QUOTES)) . "<br />"; //? hem çift tırnakları hemde tek tırnakları geri dönüştürür
echo html_entity_decode(htmlentities($text, ENT_NOQUOTES)) . "<br /><br />"; //? çift tırnakları ve tek tırnakları dönüştürmez