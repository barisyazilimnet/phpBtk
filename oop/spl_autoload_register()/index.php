<?php

function call_class($param)
{
    require $param . ".php";
}
spl_autoload_register("call_class"); //? dosyaya eklenmemiş sınıfı algılar ve fonksiyon yardımıyla sınıfı ekler0

$result = new classes;
echo $result->value;