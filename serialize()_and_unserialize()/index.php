<?php
$information = array("İsim" => "Barış", "Soyisim" => "KURT", "Şehir" => "Alanya", "Yaş" => 21);
echo "<pre>";
print_r($information);
echo "</pre>";

echo serialize($information); // ? saklanabilir veri türüne dönüştürür

echo "<br /><br />";

$value = 'a:4:{s:5:"İsim";s:7:"Barış";s:7:"Soyisim";s:4:"KURT";s:6:"Şehir";s:6:"Alanya";s:4:"Yaş";i:21;}';


echo "<pre>";
print_r(unserialize($value)); //? serialize ile dönüştürülmüş saklanabilir veri türünü eski haline dönüştürür
echo "</pre>";


/*
    a:4:{
? a -> veri türü (array) : eleman veya karakter sayısı (4)
        s:5:"İsim";
    ? s -> veri türü (string) : elemanın byte degeri (türkçe karakterler ve özel karakterler genellikle 3 byte olarak algılanır bazende 2 byte olabilir diger karakterler 1 byte) (5)
        s:7:"Barış";
        s:7:"Soyisim";
        s:4:"KURT";
        s:6:"Şehir";
        s:6:"Alanya";
        s:4:"Yaş";
        i:21;
    ? i -> veri türü (int)
    }

    */