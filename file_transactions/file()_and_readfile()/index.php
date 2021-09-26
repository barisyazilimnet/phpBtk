<?php
echo "<pre>";
print_r(file("new.txt")); //?dosya içerigini satır satır okur ve ve diziye aktarır
echo "</pre>";

echo readfile("new.txt"); //? dosya içerigini komple alır ve en sonda karakter sayısını verir