<?php
// echo file_get_contents("new.txt"); //? dosya içerigini tek seferde okur
// echo file_put_contents("new.txt", "Barış KURT\n"); //? dosyaya içerik ekler ama eski içerigi siler ve ekrana yazdırılan içerigin karakter sayısını verir
echo file_put_contents("new.txt", "Barış KURT\n" ,FILE_APPEND); //? dosyaya içerigin üzerine ekler ve ekrana yazdırılan içerigin karakter sayısını verir




/*Barış KURT<br />
21<br />
Programmer*/