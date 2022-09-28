<?php
echo basename("new.txt") . "<br />"; //? uzantısı ile dosya adını verir
echo basename("new/new/new.txt") . "<br />"; //? uzantısı ile dosya adını verir
echo dirname("new/new/new.txt") . "<br />"; //? dosya yolunu verir
echo "<pre>";
print_r(pathinfo("new/new/new.txt")); //? dosya bilgilerini verir
echo "</pre>"; 
echo realpath("new/new/new.txt") . "<br />"; //? mutlak dosya yolunu verir ana dizin olan c: dizininden başlar