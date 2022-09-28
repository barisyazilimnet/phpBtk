<?php if (isset($_SESSION["user"])) {
    $product_id = security($_GET["product_id"]);
    if (!empty($product_id)) {
        $query = $db_con->prepare("SELECT * FROM favorites WHERE product_id = ? AND user_id = ?");
        $query->execute([$product_id, $user->user_id]);
        if ($query->rowCount()) {
            header("Location:index.php?page_code=89");
        } else {
            $query = $db_con->prepare("INSERT INTO favorites SET product_id = ?, user_id = ?");
            $query->execute([$product_id, $user->user_id]);
            if ($query->rowCount()) {
                header("Location:index.php?page_code=87");
            } else {
                header("Location:index.php?page_code=88");
            }
        }
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
