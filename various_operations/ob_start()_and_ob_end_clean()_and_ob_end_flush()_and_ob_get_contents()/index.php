<?php
session_start(); //? ob_start ile beraber kullanılması gereklidir
ob_start(); //? çıktı tamponlamasını başlatır
ob_get_contents(); //? çıktı tamponlamasının degerini verir
// ob_end_clean(); //? çıktı tamponlamasını siler ve kapatır
ob_end_flush(); //? çıktı tamponlamasını boşaltır ve kapatır --- çıktı tamponlamasının sadece içindeki veriyi siler ve en çok kullanılan yöntemdir