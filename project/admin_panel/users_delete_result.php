<?php
if (isset($_SESSION["admin_user"])) {
    $user_id = $_GET["user_id"];
    if ($user_id) {
        $query = $db_con->prepare("UPDATE users SET user_status WHERE user_id=?");
        $query->execute([0, $user_id]);
        $query = $db_con->prepare("DELETE FROM cart WHERE user_id=?");
        $query->execute([$user_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=83");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=84");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
