<?php
$query = array("user_name" => "barisyazilim", "password" => "123456");
// echo "http://www.barisyazilim.net/index.php?" . http_build_query($query);
echo "http://www.barisyazilim.net/index.php?" . http_build_query($query, "", "---");
// $query = array("barisyazilim", "123456");
// echo "http://www.barisyazilim.net/index.php?" . http_build_query($query);
// echo "http://www.barisyazilim.net/index.php?" . http_build_query($query, "special");