<?php
// echo "<pre>";
// print_r(scandir("C:/")); 
//? dizin içerisindeki dosya bilgilerini verir
//? ikinci parametre olarak varsayılan degeri 0 dır 
//? belgeleri dosya sırasına göre listeler
//? ikinci parametre 1 verilirse dosyaları tam tersten listeler
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*")); //? /* konursada aynı işlevi görür
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*", GLOB_MARK)); //? klasörlerin sonuna \ ters slash ekler
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*", GLOB_NOSORT)); //? sıralama yapmaz
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*", GLOB_NOCHECK)); //? dosyaları arama kalıbı eşleştirerek listeler
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*", GLOB_ONLYDIR)); //? sadece klasorleri listeler
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*", GLOB_BRACE));
// echo "</pre>";

// echo "<pre>";
// print_r(glob("C:/*", GLOB_ERR)); //? klasor içindeki dizinlerde veya dosyalarda açılamayan bir şey varsa veya bozulmuşsa hata verir ve kod çalışması durur
// echo "</pre>";

// echo "<pre>";
// print_r(glob("*.rar", GLOB_BRACE)); //? sadece rar uzantılı olan dosyaları verir
// echo "</pre>";

// echo "<pre>";
// print_r(glob("*.{rar,xlsx}", GLOB_BRACE)); //? rar ve xlsx uzantılı olan dosyaları verir
// echo "</pre>";

// echo "<pre>";
// print_r(glob("s*", GLOB_BRACE)); 
//? s harfi ile başlayan dizin ve dosyaları verir 
//! büyük küçük harf duyarlılıgı vardır
// echo "</pre>";

// echo "<pre>";
// print_r(glob("s*.xlsx", GLOB_BRACE)); 
//? s harfi ile başlayan xlsx uzantılı dizin ve dosyaları verir 
//! büyük küçük harf duyarlılıgı vardır
// echo "</pre>";

echo "<pre>";
print_r(glob("a*/", GLOB_BRACE)); 
//? a harfi ile başlayan klasörleri verir
//! büyük küçük harf duyarlılıgı vardır
echo "</pre>";