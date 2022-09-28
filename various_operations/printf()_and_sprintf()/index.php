<?php
printf("%%"); //? ekrana 1 tane yüzde işareti bırakır
echo "<br />";
echo sprintf("%%"); //? ekrana 1 tane yüzde işareti bırakır
echo "<br />";
$name = "Barış";
printf("Hoşgeldiniz %s bey", $name); //? %s olan yere degişkenin içerigini yazar
echo "<br />";
echo sprintf("Hoşgeldiniz %s bey", $name); //? %s olan yere degişkenin içerigini yazar
echo "<br />";
$value = "Merhaba nasılsın %s %s";
printf($value, "Barış", "KURT"); //? %s olan yere degişkenin içerigini yazar
echo "<br />";
$price = 99.99;
printf("Borcunuz %d TL'dir", $price); //? %d olan yere degişkenin içerigini yazar ama ondalıklı sayı oldugu için sadece tam sayı kısmını alır
echo "<br />";
echo sprintf("Borcunuz %d TL'dir", $price); //? %d olan yere degişkenin içerigini yazar ama ondalıklı sayı oldugu için sadece tam sayı kısmını alır
echo "<br />";
printf("Borcunuz %+d TL'dir", $price); //? %+d olan yere degişkenin içerigini yazar ama ondalıklı sayı oldugu için sadece tam sayı kısmını alır ve negatiflik pozitiflik işaretini de ekler
echo "<br />";
printf("Borcunuz %f TL'dir", $price); //? %f olan yere degişkenin içerigini yazar ama ondalık hane kısmını 6 ya tamamlar
echo "<br />";
printf("Borcunuz %0.2f TL'dir", $price); //? %0.2f olan yere degişkenin içerigini yazar ve ondalık kısmı sadece 2 hane olarak kalır
echo "<br />";
printf("Borcunuz %0.2F TL'dir", $price); //? %0.2F olan yere degişkenin içerigini yazar ve ondalık kısmı sadece 2 hane olarak kalır ve ingilizce olan tarayıcılarda ondalık kısmını virgülle ayrılır
echo "<br />";
$name = "Barış KURT";
printf("Hoşgeldin %0.7s", $name); //? %0.5s olan yere degişkenin ilk 5 karakterini yazar
echo "<br />";
printf("65 ascıı kodunun karakter karşılıgı : %c", 65); //? ascıı karakter kodlarının karşılıgını verir
echo "<br />";
printf("İsim : %c%c%c%c%c", 66, 97, 114, 105, 115); //? ascıı karakter kodlarının karşılıgını verir
echo "<br />";
printf("Degerin binary karşılıgı %b", 2000); //? degerin binary (ikilik) sistem karşılıgnı verir
echo "<br />";
printf("Degerin octal karşılıgı %o", 2000); //? degerin octal (sekizlik) sistem karşılıgnı verir
echo "<br />";
printf("Degerin hexadecimal karşılıgı %x", 2000); //? degerin hexadecimal (onaltılık) sistem karşılıgnı verir -- küçük x oldugu için harfler küçük harflerle yazılır
echo "<br />";
printf("Degerin hexadecimal karşılıgı %X", 2000); //? degerin hexadecimal (onaltılık) sistem karşılıgnı verir ----- büyük x oldugu için harfler büyük harflerle yazılır
echo "<br />";
printf("Degerin bilimsel gösterim karşılıgı %e", 2000); //? degerin bilimsel gösterim karşılıgnı verir -- küçük e oldugu için e yi küçük yazar
echo "<br />";
printf("Degerin bilimsel gösterim karşılıgı %E", 2000); //? degerin bilimsel gösterim karşılıgnı verir -- büyük e oldugu için e yi büyük yazar
echo "<br />";
printf("Degerin kısa gösterim karşılıgı %g", 200020002000200020002000); //? degerin kısa gösterim karşılıgnı verir -- küçük g oldugu için e yi küçük yazar
echo "<br />";
printf("Degerin kısa gösterim karşılıgı %G", 200020002000200020002000); //? degerin kısa gösterim karşılıgnı verir -- büyük g oldugu için e yi büyük yazar
echo "<br />";
printf("%'*30s","PHP"); //? deger dahil yıldız ile 30 karaktere tamamlar ve yıldızları sola ekler
echo "<br />";
printf("%-'*30s","PHP"); //? deger dahil yıldız ile 30 karaktere tamamlar ve yıldızları saga ekler
echo "<br />";
printf("%-'*30s","PHP"); //? deger dahil yıldız ile 30 karaktere tamamlar ve yıldızları saga ekler