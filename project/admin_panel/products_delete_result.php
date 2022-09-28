<?php
if (isset($_SESSION["admin_user"])) {
    $product_id = $_GET["product_id"];
    if ($product_id) {
        $query = $db_con->prepare("SELECT menu_id FROM products WHERE product_id=?");
        $query->execute([$product_id]);
        $deleted_product_menu_id = $query->fecth(PDO::FETCH_OBJ);
        $query = $db_con->prepare("UPDATE products SET product_status WHERE product_id=?");
        $query->execute([0, $product_id]);
        $query = $db_con->prepare("DELETE FROM cart WHERE product_id=?");
        $query->execute([$product_id]);
        $query = $db_con->prepare("DELETE FROM favorites WHERE product_id=?");
        $query->execute([$product_id]);
        $query = $db_con->prepare("UPDATE menus SET menu_product_number=menu_product_number-1 WHERE menu_id=?");
        $query->execute([$deleted_product_menu_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=99");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=100");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
