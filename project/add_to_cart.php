<?php
if (isset($_SESSION["user"])) {
    $product_id = security($_GET["product_id"]);
    $variant = security($_POST["variant"]);
    if (($product_id != "" and $variant != "")) {
        $query        =    $db_con->prepare("SELECT * FROM cart WHERE user_id =  ? ORDER BY cart_id DESC LIMIT 1");
        $query->execute([$user->user_id]);
        if ($query->rowCount()) {
            $query        =    $db_con->prepare("SELECT * FROM cart WHERE user_id = ? AND product_id = ? AND variant_id = ? LIMIT 1");
            $query->execute([$user->user_id, $product_id, $variant]);
            $quanity = $query->fetch(PDO::FETCH_OBJ);
            if ($query->rowCount()) {
                $query        =    $db_con->prepare("UPDATE cart SET product_quantity = ? WHERE cart_id = ? and user_id = ? and product_id = ?");
                $query->execute([$quanity->product_quantity + 1, $quanity->cart_id, $user->user_id, $product_id]);
                if ($query->rowCount()) {
                    header("Location:index.php?page_code=93");
                    exit();
                } else {
                    header("Location:index.php?page_code=91");
                    exit();
                }
            } else {
                $query        =    $db_con->prepare("INSERT INTO cart SET user_id = ?, product_id = ?, variant_id = ?, product_quantity = 1");
                $query->execute([$user->user_id, $product_id, $variant]);
                $cart_last_insert_id = $db_con->lastInsertId();
                if ($query->rowCount()) {
                    $query        =    $db_con->prepare("UPDATE cart SET cart_number = ? WHERE user_id=?");
                    $query->execute([$cart_last_insert_id, $user->user_id]);
                    if ($query->rowCount()) {
                        header("Location:index.php?page_code=93");
                        exit();
                    } else {
                        header("Location:index.php?page_code=91");
                        exit();
                    }
                } else {
                    header("Location:index.php?page_code=91");
                    exit();
                }
            }
        } else {
            $query        =    $db_con->prepare("INSERT INTO cart SET user_id = ?, product_id = ?, variant_id = ?, product_quantity = 1");
            $query->execute([$user->user_id, $product_id, $variant]);
            $cart_last_insert_id = $db_con->lastInsertId();
            if ($query->rowCount()) {
                $query        =    $db_con->prepare("UPDATE cart SET cart_number = ? WHERE user_id=?");
                $query->execute([$cart_last_insert_id, $user->user_id]);
                if ($query->rowCount()) {
                    header("Location:index.php?page_code=93");
                    exit();
                } else {
                    header("Location:index.php?page_code=91");
                    exit();
                }
            } else {
                header("Location:index.php?page_code=91");
                exit();
            }
        }
    } else {
        header("Location:index.php");
    }
} else {
    header("Location:index.php?page_code=92");
    exit();
}
