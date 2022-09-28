<?php
echo disk_total_space("/") . "<br />"; //? sunucunun vey hostingin toplam disk kapasitesini verir
echo disk_free_space("/") . "<br />"; //? sunucunun vey hostingin toplam boş disk kapasitesini verir
echo  memory_get_usage(); //? bulundugu dosyanın kullandıgı bellek miktaını verir