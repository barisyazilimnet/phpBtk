<?php
$_openfile = fopen("new.txt", "r");
// echo fgets($_openfile) . "<br />"; //? dosya içerigini satır satır okur ve ilk satırı verir. tüm içerik için döngü kullanılabilir
// echo fgetc($_openfile) . "<br />"; //? dosya içerigini karakter karakter okur ve ilk karakteri verir. tüm içerik için döngü kullanılabilir
// echo fread($_openfile, 5) . "<br />"; //? dosya içerigini belirtilen karakter sayısı kadar okur. tüm içerik için döngü kullanılabilir 
//! normal karakterler 1 karakter, türkçe karakterler, özel karakterler ve bir alt satıra geçiş 2 karakter olarak sayılır
// echo fread($_openfile, 14) . "<br />"; //? dosya içerigini belirtilen karakter sayısı kadar okur. tüm içerik için döngü kullanılabilir
// echo fpassthru($_openfile); //? bütün içerigi okur ama bir alt satıra geçişleri boşluk olarak algılayıp tek satırmış gibi okur ve en son toplam karakter sayısını verir.
//? alt satıra geçişi kabul etmesi için <br /> tagı kullanılması lazım
// while(!feof($_openfile)){ //? dosya sonuna kadar döngü devam eder -> dosya sonuna kadar okunmadıysa devam et anlamındadır
//     echo fgets($_openfile);
// }

// while(!feof($_openfile)){ //? dosya sonuna kadar döngü devam eder -> dosya sonuna kadar okunmadıysa devam et anlamındadır
//     echo fgetc($_openfile);
// }
fclose($_openfile);

$_openurl = fopen("https://www.google.com.tr/", "r");
echo fpassthru($_openurl);
fclose($_openurl);
