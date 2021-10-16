<?php
$text = "Barış Yazılım - Barış KURT - A'dan Z'ye PHP Görsel Eğitim Seti - 32\" Monitör - Birde \ yazayım";
echo $mysqli->real_escape_string($text); //? tek tırnak -- çift tırnak ve ters slash ların önüne ters slash ekler