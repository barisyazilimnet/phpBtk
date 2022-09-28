<?php
$_opendir = opendir("./"); //? belirtilen klasörü açar ve içindekilerini bellege alır
while(($_readdir = readdir($_opendir)) != false){ //? bellege alınmış bilgileri okur
    echo $_readdir . "<br />";
}
closedir($_opendir); //? açılmış klasörü kapatır ve bellekte olan bilgileri siler