<?php
//! example_array.json
//? json dizisi şeklinde döndürür
$values = array("Barisyazilim.net", "Barış KURT");
echo json_encode($values) . "<br /><br />";

//! example_object.json
//? json nesnesi şeklinde döndürür
$values1 = array("company" => "Barisyazilim.net", "manager" => "Barış KURT");
echo json_encode($values1) . "<br /><br />";

//! example_advanced.json
//? gelişmiş json dosyası oluşturur
$values2 = array(
    "company" => "Barisyazilim.net",
    "manager" => "Barış KURT",
    "educations" => array("HTML", "CSS3", "PHP", "JS"),
    "instructor" => array(
        array("name" => "Hakan ALAKENT", "lessons" => "HTML"),
        array("name" => "Volkan ALAKENT", "lessons" => "PHP"),
        array("name" => "Onur Tatlı", "lessons" => "CSS3"),
        array("name" => "Ümit Okudan", "lessons" => "JS")
    )
);
echo json_encode($values2) . "<br /><br />";

$values3 = array("<i>Barisyazilim.net</i>", "Barış KURT", "A'dan Z'ye Görsel Eğitim Seti", "27\" Monitör", "HTML & CSS & JS");
echo "<pre>";
print_r($values3);
echo "</pre>";
echo json_encode($values3) . "<br /><br />"; //? içindeki karakterler yüzünden bozuk bir json dosyası oluşur
echo json_encode($values3, JSON_HEX_TAG) . "<br /><br />"; //? tagları hexadecimal degere dönüştürür
echo json_encode($values3, JSON_HEX_APOS) . "<br /><br />"; //? tek tırnakları hexadecimal degere dönüştürür
echo json_encode($values3, JSON_HEX_QUOT) . "<br /><br />"; //? çift tırnakları hexadecimal degere dönüştürür
echo json_encode($values3, JSON_HEX_AMP) . "<br /><br />"; //? ampersant işaretlerini hexadecimal degere dönüştürür
echo json_encode($values3, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . "<br /><br />"; //? bütün hepsini hexadecimal degere dönüştürür

$values4 = array("Barisyazilim.net", "Barış KURT");
echo json_encode($values4, JSON_FORCE_OBJECT) . "<br /><br />"; //? diziyi nesne yapısına dönüştürmek için zorlar

//? json dizisini normal diziye dönüştürür
$value = '["barisyazilim.net", "Barış KURT"]';
echo "<pre>";
print_r(json_decode($value));
echo "</pre>";

//? json nesnesini normal nesne olarka dönüştürür
$value1 = '{ "company": "barisyazilim.net", "manager": "Barış KURT" }';
echo "<pre>";
print_r(json_decode($value1));
echo "</pre>";

//? json nesnesini dizi olarak dönüştürmek için zorlar
$value2 = '{ "company": "barisyazilim.net", "manager": "Barış KURT" }';
echo "<pre>";
print_r(json_decode($value2, true));
echo "</pre>";

//? json nesnesini dizi olarak dönüştürmek için zorlar
$value3 = '{
    "company": "barisyazilim.net",
    "manager": "Barış KURT",
    "educations": ["HTML", "CSS3", "PHP", "JS"],
    "instructor": [
      { "name": "Hakan ALAKENT", "lessons": "HTML" },
      { "name": "Volkan ALAKENT", "lessons": "PHP" },
      { "name": "Onur Tatlı", "lessons": "CSS3" },
      { "name": "Ümit Okudan", "lessons": "JS" }
    ]
  }';
echo "<pre>";
print_r(json_decode($value3));
echo "</pre>";

echo "<pre>";
print_r(json_decode(file_get_contents("./example_array.json")));
echo "</pre>";

echo "<pre>";
print_r(json_decode(file_get_contents("./example_object.json")));
echo "</pre>";

echo "<pre>";
print_r(json_decode(file_get_contents("./example_advanced.json")));
echo "</pre>";