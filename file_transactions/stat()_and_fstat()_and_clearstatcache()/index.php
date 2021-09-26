<?php
echo "<pre>";
print_r(stat("new.rar")); //?tüm dosya bilgilerini verir
/*
    [0] => 2349506256
    [1] => 2814749767296642
    [2] => 33206
    [3] => 1
    [4] => 0
    [5] => 0
    [6] => 0
    [7] => 0
    [8] => 1631951093
    [9] => 1631951093
    [10] => 1631951093
    [11] => -1
    [12] => -1
    ? burdan sonrası üstüyle aynı degerler sırayıla
    [dev] => 2349506256 -> aygıt numarası genellikle 2 degerini verir
    [ino] => 2814749767296642 -> dosya dügüm/node numarası genellikle 0 dır
    [mode] => 33206 -> dosya erişim izinleri genellikle 33206 dır
    [nlink] => 1 -> baglantı sayısı genellikle 1 dir
    [uid] => 0 -> dosya sahibi id'si genellikle 0 dır
    [gid] => 0 -> dosya sahibi grubu id'si genellikle 0 dır
    [rdev] => 0 -> dosya dügümü aygıtları için aygıt türü genellikle 2 dir
    [size] => 0 -> dosya boyutu byte cinsinden
    [atime] => 1631951093 -> dosyaya son erişim zamanı
    [mtime] => 1631951093 -> dosya degiştirilme zamanı
    [ctime] => 1631951093 -> dosya oluşturulma zamanı
    [blksize] => -1 -> dosya sistemi için I/O blok boyutu genellikle windows degeri -1 dir
    [blocks] => -1 dosya için ayrılmış 512 bytelık blok boyutu genellikle windows boyutu -1 dir
*/
echo "</pre>";

echo "<pre>";
print_r(fstat(fopen("new.rar", "w"))); //? yeni açılmış olan tüm dosya bilgilerini verir
echo "</pre>";

clearstatcache(); //? bellege kaydedilen dosya bilgileri bellekten silinir