<?php
if (isset($_SESSION["admin_user"])) {
    $order_number = $_GET["order_number"];
    if ($order_number) {
        $query = $db_con->prepare("SELECT * FROM orders WHERE order_number = ?");
        $query->execute([$order_number]);
        $orders = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($orders as $order) {
                $query = $db_con->prepare("DELETE FROM orders WHERE order_id = ?");
                $query->execute([$order->order_id]);
                if ($query->rowCount()) {
                    $query = $db_con->prepare("UPDATE products SET product_total_sale_number=product_total_sale_number-? WHERE product_id = ?");
                    $query->execute([$order->order_product_quantity, $order->product_id]);
                    if ($query->rowCount()) {
                        $query = $db_con->prepare("UPDATE product_variants SET product_variant_stock_quantity=product_variant_stock_quantity+? WHERE product_variant_name = ? AND product_id = ?");
                        $query->execute([$order->order_product_quantity, $order->variant_selection, $order->product_id]);
                    } else {
                        header("Location:index.php?page_code_outside=0&page_code_inside=110");
                    }
                } else {
                    header("Location:index.php?page_code_outside=0&page_code_inside=110");
                }
            }
            header("Location:index.php?page_code_outside=0&page_code_inside=109");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=110");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
