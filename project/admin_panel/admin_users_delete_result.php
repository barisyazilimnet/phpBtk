<?php
if (isset($_SESSION["admin_user"])) {
    $admin_user_id = $_GET["admin_user_id"];
    if ($SSS_id) {
        $query = $db_con->prepare("DELETE FROM admin_users WHERE admin_user_id=?");
        $query->execute([$admin_user_id]);
        if ($query->rowCount()) {
            header("Location:index.php?page_code_outside=0&page_code_inside=79");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=80");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
