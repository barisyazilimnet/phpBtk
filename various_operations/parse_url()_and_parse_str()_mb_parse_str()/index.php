<?php
echo "<pre>";
print_r(parse_url("http://admin:123456@www.barisyazilim.net:80/index.php?user_name=barisyazilim.net#home"));
echo "</pre>";
/*
PHP_URL_SCHEME
PHP_URL_HOST
PHP_URL_PORT
PHP_URL_USER
PHP_URL_PASS
PHP_URL_PATH
PHP_URL_QUERY
PHP_URL_FRAGMENT
*/
parse_str(parse_url("http://admin:123456@www.barisyazilim.net:80/index.php?user_name=barisyazilim.net&password=123456#home", PHP_URL_QUERY), $result);
echo "<pre>";
print_r($result);
echo "</pre>";

mb_parse_str(parse_url("http://admin:123456@www.barisyazilim.net:80/index.php?user_name=barisyazilim.net&password=123456#home", PHP_URL_QUERY), $result);
echo "<pre>";
print_r($result);
echo "</pre>";