<?php
echo levenshtein("Baris KÜRT", "Barış KURT") . "<br />"; //? iki deger arasındaki silinmesi, eklenmesi veya degiştirilmesi gerekn karakter saysını verir
echo similar_text("Baris KÜRT", "Barış KURT") . "<br />"; //? iki deger arasındaki benzerlik oranını yüzdesel olarak verir -- eger böle kullanılırsa eşlesen karakter sayısını verir
similar_text("Baris KÜRT", "Barış KURT", $ratio); //? iki deger arasındaki benzerlik oranını yüzdesel olarak verir
echo $ratio;