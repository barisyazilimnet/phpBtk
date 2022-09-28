<?php
if (isset($_SESSION["user"])) {
    $choose_payment_selection = security($_POST["choose_payment_selection"]);
    $installment_selection = security(@$_POST["installment_selection"]) ?? 0;
    if ($choose_payment_selection == "bank_transfer") {
        $query = $db_con->prepare("SELECT * FROM cart  WHERE user_id = ?");
        $query->execute([$user->user_id]);
        $cart = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($cart as $cart_products) {
                $total_price = 0;
                $total_shipping_price = 0;
                $query = $db_con->prepare("SELECT * FROM products  WHERE product_id = ?");
                $query->execute([$cart_products->product_id]);
                $cart_products_product = $query->fetch(PDO::FETCH_OBJ);
                $query = $db_con->prepare("SELECT * FROM product_variants  WHERE product_variant_id = ?");
                $query->execute([$cart_products->variant_id]);
                $cart_products_variant = $query->fetch(PDO::FETCH_OBJ);
                $query = $db_con->prepare("SELECT * FROM shipping_companies  WHERE shipping_company_id = ?");
                $query->execute([$cart_products->shipping_company_id]);
                $cart_products_shipping = $query->fetch(PDO::FETCH_OBJ);
                $query = $db_con->prepare("SELECT * FROM addresses  WHERE address_id = ?");
                $query->execute([$cart_products->address_id]);
                $cart_products_address = $query->fetch(PDO::FETCH_OBJ);
                if ($cart_products_product->product_price_currency == "$") {
                    $product_price = $cart_products_product->product_price * $settings->usd;
                } else if ($cart_products_product->product_price_currency == "€") {
                    $product_price = $cart_products_product->product_price * $settings->eur;
                } else if ($cart_products_product->product_price_currency == "₺") {
                    $product_price = $cart_products_product->product_price;
                }
                $total_price += ($product_price * $cart_products->product_quantity);
                $total_shipping_price += ($cart_products_product->product_shipping_price * $cart_products->product_quantity);
                $address_detail = $cart_products_address->address . " - " . $cart_products_address->district . " / " . $cart_products_address->province . " / " . $cart_products_address->country;
                $query = $db_con->prepare("INSERT INTO orders SET user_id = ?, order_number = ?, product_id = ?, order_product_type = ?, order_product_name = ?, order_product_price = ?, price_currency = '₺', vat_rate = ?, order_product_quantity = ?, order_product_total_amount = ?, shipping_company = ?, shipping_cost = ?, order_product_img = ?, variant_header = ?, variant_selection = ?, address_name_surname = ?, address_detail = ?, address_phone_number = ?, payment_selection = ?, installment_selection = 0, order_date = ?, order_ip_address = ?");
                $query->execute([$user->user_id, $cart_products->cart_number, $cart_products->product_id, $cart_products_product->product_type, $cart_products_product->product_name, $product_price, $cart_products_product->vat_rate, $cart_products->product_quantity, $total_price, $cart_products_shipping->shipping_company_name, $total_shipping_price, $cart_products_product->product_img, $cart_products_product->product_variant_header, $cart_products_variant->product_variant_name, $cart_products_address->name_surname, $address_detail, $cart_products_address->phone_number, $choose_payment_selection, $date, $ip_address]);
                if ($query->rowCount()) {
                    $query = $db_con->prepare("DELETE FROM cart WHERE cart_id = ? AND user_id = ? LIMIT 1");
                    $query->execute([$cart_products->cart_id, $user->user_id]);
                    $query = $db_con->prepare("UPDATE products SET product_total_sale_number = product_total_sale_number + ?  WHERE product_id = ? LIMIT 1");
                    $query->execute([$cart_products->product_quantity, $cart_products->product_id]);
                    $query = $db_con->prepare("UPDATE product_variants SET product_variant_stock_quantity = product_variant_stock_quantity - ? WHERE product_variant_id = ? LIMIT 1");
                    $query->execute([$cart_products->product_quantity, $cart_products->variant_id]);
                }
            }
            header("Location:index.php?page_code=100");
            exit();
        } else {
            header("Location:index.php?page_code=101");
            exit();
        }
    } else {
        if ($installment_selection != "") {
            $query = $db_con->prepare("UPDATE cart SET payment_selection = ?, installment_selection = ? WHERE user_id = ?");
            $query->execute([$choose_payment_selection, $installment_selection, $user->user_id]);
            if ($query->rowCount()) {
                header("Location:index.php?page_code=102");
                exit();
            } else {
                header("Location:index.php");
                exit();
            }
        }
    }
} else {
    header("Location:index.php");
    exit();
}
