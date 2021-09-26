<?php
echo filetype("new") . "<br />"; //? dosya türünü verir
echo filetype("new.rar") . "<br />";
echo filetype("new.txt") . "<br />";
echo fileowner("new.txt") . "<br />"; //? dosya sahibi degerini verir genellikle 0 verir
echo filegroup("new.txt") . "<br />"; //? dosya sahibi group degerini verir genellikle 0 verir
echo fileinode("new.txt") . "<br />"; //? dügüm/node numarasını verir
echo fileperms("new.txt") . "<br />"; //? dosyaya erişim izni degerini verir
echo filesize("new.txt") . "<br />"; //? dosyaya boyutunu verir
echo date("d.m.Y H:i:s" ,filectime("new.txt")) . "<br />"; //? dosyayı oluşturma zamanını verir -> zaman damgası şeklinde
echo date("d.m.Y H:i:s" ,filemtime("new.txt")) . "<br />"; //? dosyayı degiştirme zamanını verir -> zaman damgası şeklinde
echo date("d.m.Y H:i:s" ,fileatime("new.txt")) . "<br />"; //? dosyayı son erişim zamanını verir -> zaman damgası şeklinde