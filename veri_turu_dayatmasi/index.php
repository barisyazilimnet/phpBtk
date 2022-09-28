<?php

declare(strict_types=1); // ? kodlama dosyası içerisindeli tüm kodlamaların kural yapısı belirler. strict_types=1 oldugu zaman çok katı kurallar uygular. php dosyasının en başında olmalıdır.

function write(string $name, string $surname, int $age): string
{
    return $name . $surname . "<br />Yaş :" . $age;
}
echo write("Barış", "KURT", 21);
// echo write("Barış", "KURT", "21"); //! burda hata verir

echo "<br /><br /><br />";

function write1(array $value): string
{
    return implode("<br />", $value);
}
echo write1(array("Barış", "KURT", 21));
