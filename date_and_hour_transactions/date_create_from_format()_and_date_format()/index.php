<?php
echo date_create_from_format("d.m.Y", "30-01-2000"); 
//? belirtilecek olan formata göre biçimlendirilmiş yeni bir tarih nesnesi dizisi oluşturur
//? 1. param : sabitler, 2.param : tarih (gün-ay-yıl) -> belirlenen sabit sıralamasına göre 2.parametreleri yazın

echo date_format(date_create("2000-01-30"), "d.m.Y");