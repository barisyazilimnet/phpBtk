<?php
if (isset($_SESSION["admin_user"])) {
    $menu_id = $_GET["menu_id"];
    if ($_POST) {
        $product_type = security($_POST["product_type"]);
        $name = security($_POST["name"]);
        $query = $db_con->prepare("UPDATE menus SET menu_product_type=?, menu_name=? WHERE menu_id=?");
        $query->execute([$product_type, $name, $menu_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=64");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=65");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
