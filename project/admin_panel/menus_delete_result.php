<?php
if (isset($_SESSION["admin_user"])) {
    $menu_id = $_GET["menu_id"];
    if ($menu_id) {
        $query = $db_con->prepare("DELETE FROM menus WHERE menu_id=?");
        $query->execute([$menu_id]);
        if ($query->rowCount()) {
            $query = $db_con->prepare("UPDATE products SET product_status WHERE menu_id=?");
            $query->execute([0, $menu_id]);
            header("Location:index.php?page_code_outside=0&page_code_inside=67");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=68");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
