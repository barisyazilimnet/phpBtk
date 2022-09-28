<?php
echo substr(sprintf("%o",fileperms("new.txt")), -4); //?ilk önce dosya izin degerini alır sonra onu 8 lik olarak dönüştürür en sonda son 4 karakterini alır ve chmod degerine ulaşılmış olur

chmod("new.txt", 0777); //? windowsda izinler pek saglıklı olarak çalışmıyor o yüzden degişmeyecektir ilk önce elle yapılması gereklidir
//? sonucu 0 veya 1 olarak alınabilir
