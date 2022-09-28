<?php
if (isset($_SESSION["admin_user"])) {
    $comment_id = $_GET["comment_id"];
    if ($comment_id) {
        $query = $db_con->prepare("SELECT comment_point, product_id FROM comments WHERE comment_id=?");
        $query->execute([$comment_id]);
        $comment = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("DELETE FROM comments WHERE comment_id=?");
        $query->execute([$comment_id]);
        $query = $db_con->prepare("UPDATE products SET product_comment_number=product_comment_number-1, product_total_comment_point=product_total_comment_point-? WHERE product_id=?");
        $query->execute([$comment->comment_point, $comment->product_id]);
        print_r($db_con->errorInfo());
        header("Location:index.php?page_code_outside=0&page_code_inside=87");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=88");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
