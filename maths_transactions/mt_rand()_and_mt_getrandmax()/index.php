<?php
echo mt_rand() . "<br />"; //? Mersene twister algoritması kullanılarak rastgele bir sayı üretir
echo mt_rand(5, 50) . "<br />"; //? 5 ile 50 arasında Mersene twister algoritması kullanılarak rastgele bir sayı üretir
echo mt_getrandmax(); //? mt_rand() ile Mersene twister algoritması kullanılarak üretilebilecek olan en büyük sayı degerini verir