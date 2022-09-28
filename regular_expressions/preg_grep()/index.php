<?php
echo "Orjnal içerik <pre>";
print_r(array(22, 12, 143, 252, 82, 104));
echo "</pre>";
echo "Bulunan degerler <pre>";
print_r(preg_grep("/2/", array(22, 12, 143, 252, 82, 104)));
echo "</pre>";