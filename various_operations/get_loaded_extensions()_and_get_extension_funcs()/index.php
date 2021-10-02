<?php
echo "<pre>";
print_r(get_loaded_extensions()); //? sistemdeki bütün modülleri bulur
echo "</pre>";

echo "<pre>";
print_r(get_extension_funcs("mysqli")); //? belirtilen mödülün sistemdeki bütün fonksiyonlarını bulur
echo "</pre>";
