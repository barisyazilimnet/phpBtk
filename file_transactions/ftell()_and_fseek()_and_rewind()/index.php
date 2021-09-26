<?php
$_open_file = fopen("new.txt", "r");
echo "Şuanki imlecin bulundugu nokta :" . ftell($_open_file) . "<br />"; //? dosyadaki içerigin okunmaya hazır oldugu konumu yani imlecin bulundugu konumu
fseek($_open_file, 14); //? bulunan konumu 14 karakter ileri alır 
echo "Şuanki imlecin bulundugu nokta :" . ftell($_open_file). "<br />"; //? dosyadaki içerigin okunmaya hazır oldugu konumu yani imlecin bulundugu konumu
rewind($_open_file); //? ileri alınmış olan konumu sıfırlar
echo "Şuanki imlecin bulundugu nokta :" . ftell($_open_file); //? dosyadaki içerigin okunmaya hazır oldugu konumu yani imlecin bulundugu konumu
fclose($_open_file);