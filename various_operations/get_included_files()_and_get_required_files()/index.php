<?php
// include "files/c.php";
// require "files/d.php";
// include "files/file.php";
// require "files/name.php";
// include "a.php";
// require "b.php";
// include "barisyazilim.php";
// require "x.php";
include "a.php";
require "b.php";
echo "<pre>";
print_r(get_included_files()); //? dosyaya eklenmiş diger dosyaların yolunu ve adını verir eger eklenmiş dosya yoksa bulundugu dosyanın yolunu ve adını verir
echo "</pre>";

echo "<pre>";
print_r(get_required_files()); //? dosyaya eklenmiş diger dosyaların yolunu ve adını verir eger eklenmiş dosya yoksa bulundugu dosyanın yolunu ve adını verir
echo "</pre>";