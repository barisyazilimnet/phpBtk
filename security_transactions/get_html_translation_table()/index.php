<?php
echo "<pre>";
print_r(get_html_translation_table()); //? htmlspecialchars() ile dönüştürelebilir karakterlerin listesini verir
echo "</pre>";

echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS)); //? htmlspecialchars() ile dönüştürelebilir karakterlerin listesini verir
echo "</pre>";

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES)); //? htmlentities() ile dönüştürelebilir karakterlerin listesini verir
echo "</pre>";