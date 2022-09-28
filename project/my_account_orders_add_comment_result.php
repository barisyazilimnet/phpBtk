<?php
if (isset($_SESSION["user"])) {
    $product_id = security($_GET["product_id"]);
    $point = security($_POST["point"]);
    $comment = security($_POST["comment"]);
    if (($product_id != "") and ($point != "") and ($comment != "")) {
        $query = $db_con->prepare("INSERT INTO comments SET user_id = ?, product_id = ?, comment_point = ?, comment_text = ?, comment_date = ?, comment_ip_address = ?");
        $query->execute([$user->user_id, $product_id, $point, $comment, $time, $ip_address]);
        if ($query->rowCount()) {
            $query = $db_con->prepare("UPDATE products SET product_comment_number = product_comment_number + 1, product_total_comment_point = product_total_comment_point + ? WHERE product_id = ?");
            $query->execute([$point, $product_id]);
            if ($query->rowCount()) {
                header("Location:index.php?page_code=77");
                exit();
            } else {
                header("Location:index.php?page_code=78");
            }
        } else {
            header("Location:index.php?page_code=78");
        }
    } else {
        header("Location:index.php?page_code=79");
    }
} else {
    header("Location:index.php");
    exit();
}
