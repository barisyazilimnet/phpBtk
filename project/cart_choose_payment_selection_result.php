<?php
if (isset($_SESSION["user"])) {
    $choose_payment_selection = security($_POST["choose_payment_selection"]);
    //credit_card   bank_transfer
    $installment_selection = security($_POST["installment_selection"]);
    if ($choose_payment_selection == "bank_transfer") {
        $query = $db_con->prepare("SELECT * FROM cart  WHERE user_id = ?");
        $query->execute([$user->user_id]);
        $cart = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($cart as $cart_products) {
                $query = $db_con->prepare("SELECT * FROM products  WHERE product_id = ?");
                $query->execute([$cart_products->product_id]);
                $product = $query->fetch(PDO::FETCH_OBJ);
                $query = $db_con->prepare("SELECT * FROM product_variants  WHERE product_variant_id = ?");
                $query->execute([$cart_products->variant_id]);
                $cart_products_variant = $query->fetch(PDO::FETCH_OBJ);
                $query = $db_con->prepare("SELECT * FROM shipping_companies  WHERE shipping_company_id = ?");
                $query->execute([$cart_products->shipping_company_id]);
                $cart_products_shipping = $query->fetch(PDO::FETCH_OBJ);

                
                if ($product->product_price_currency == "$") {
                    $product_price = $product->product_price * $settings->usd;
                } else if ($product->product_price_currency == "€") {
                    $product_price = $product->product_price * $settings->eur;
                } else if ($product->product_price_currency == "₺") {
                    $product_price = $product->product_price;
                }
                $total_product_count += $cart_products->product_quantity;
                $total_price += ($product_price * $cart_products->product_quantity);
                $total_shipping_price += ($product->product_shipping_price * $cart_products->product_quantity);
            }
        }
    
    } else {
        if($installment_selection != ""){

        }
    }
} else {
    header("Location:index.php");
    exit();
}
