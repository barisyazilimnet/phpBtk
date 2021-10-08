<?php
echo uniqid() . "<br />"; //? eşsiz degerler oluşturur
echo uniqid("asdvkmlşd=") . "<br />"; //? belirtilen içerigin devamına eşsiz degerler oluşturur
echo uniqid("asdvkmlşd=", true) . "<br />"; //? belirtilen içerigin devamına eşsiz degerler oluşturur ve sonuna döküntü tabiri ile kullanılan karakterler eklenir
echo md5("159753") . "<br />"; //? içerigin md5 şifrelenmiş halini verir
echo md5_file("./aa.rar"); //? dosyanın md5 şifrelenmiş halini verir