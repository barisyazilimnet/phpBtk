<?php
// $_open_file = fopen("new.txt", "a+");
// $character_number = fwrite($_open_file, "Merhaba ben Barış KURT\n21 yaşındayım\nYazılımcıyım.\n"); //? dosyaya içerik ekler eger bir degişkene aktarılırsa eklenen içerigin karakter sayısını verir
// echo $character_number . "<br />";
// fclose($_open_file);

// $_open_file = fopen("new.txt", "a+");
// $character_number = fputs($_open_file, "Merhaba ben Barış KURT\n21 yaşındayım\nYazılımcıyım.\n"); //? dosyaya içerik ekler eger bir degişkene aktarılırsa eklenen içerigin karakter sayısını verir
// echo $character_number;
// fclose($_open_file);

$_open_file = fopen("new.txt", "a");
ftruncate($_open_file, 26); //? dosya içerigini belirtilecek olan karakter sayısından itibaren siler
fclose($_open_file);