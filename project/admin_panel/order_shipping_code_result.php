<?php
if (isset($_SESSION["admin_user"])) {
    $order_number = $_GET["order_number"];
    $shipping_post_code = $_POST["shipping_post_code"];
    if ($order_number) {
        $query = $db_con->prepare("UPDATE orders SET approval_status = ?, order_shipping_status = ?, order_shipping_post_code = ? WHERE order_number = ?");
        $query->execute([1, 1, $shipping_post_code, $order_number]);
        if ($query->rowCount()) {
            header("Location:index.php?page_code_outside=0&page_code_inside=106");
        } else {
            header("Location:index.php?page_code_outside=0&page_code_inside=107");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=107");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
