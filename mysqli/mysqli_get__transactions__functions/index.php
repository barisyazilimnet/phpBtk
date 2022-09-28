<?php
echo mysqli_get_client_info() . "<br />"; //? mysql kütüphanesinin detay bilgisini verir
echo mysqli_get_client_version() . "<br />"; //? mysql kütüphanesinin sürüm bilgisini verir
echo mysqli_get_host_info($db_con) . "<br />"; //? isim ve baglantı protokol türünü verir
echo $mysqli->host_info . "<br />"; //? isim ve baglantı protokol türünü verir
echo mysqli_get_proto_info($db_con) . "<br />"; //? baglantı protokol sürümünü verir
echo $mysqli->protocol_version . "<br />"; //? baglantı protokol sürümünü verir
echo mysqli_get_server_info($db_con) . "<br />"; //? mysql in detay bilgisini verir
echo $mysqli->server_info . "<br />"; //? mysql in detay bilgisini verir
echo mysqli_get_server_version($db_con) . "<br />"; //? mysql in sürüm bilgisini verir
echo $mysqli->server_version . "<br />"; //? mysql in sürüm bilgisini verir