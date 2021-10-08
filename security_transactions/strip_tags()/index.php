<?php
$text = "<b>Barış Yazılım.net</b> <i>Barış KURT</i> <u>A'dan Z'ye PHP Görsel Eğitim Seti</u> <script>alert('Hackledim')</script>";
echo strip_tags($text, "<script>"); //? belirtilen tag dışındaki diger bütün html taglarını kaldırır