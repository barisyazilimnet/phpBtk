<?php

use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $product_type = security($_POST["product_type"]);
        $name = security($_POST["name"]);
        $query = $db_con->prepare("INSERT INTO menus SET menu_product_type=?, menu_name=?");
        $query->execute([$product_type, $name]);
        header("Location:index.php?page_code_outside=0&page_code_inside=60");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=61");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
