<?php if (isset($_SESSION["user"])) {
    $cart_id = security($_GET["cart_id"]);
    $query = $db_con->prepare("SELECT * FROM cart WHERE cart_id = ? AND user_id = ?");
    $query->execute([$cart_id, $user->user_id]);
    $cart_quantity = $query->fetch(PDO::FETCH_OBJ);
    if ($cart_quantity->product_quantity <= 1) {
        $query = $db_con->prepare("DELETE FROM cart WHERE cart_id = ? AND user_id = ?");
        $query->execute([$cart_id, $user->user_id]);
    } else {
        $query = $db_con->prepare("UPDATE cart SET product_quantity = product_quantity - 1 WHERE cart_id = ? AND user_id = ?");
        $query->execute([$cart_id, $user->user_id]);
    }
    if ($query->rowCount()) {
        header("Location:index.php?page_code=93");
    } else {
        header("Location:index.php?page_code=93");
    }
} else {
    header("Location: index.php");
}
