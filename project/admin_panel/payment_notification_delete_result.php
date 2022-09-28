<?php
if (isset($_SESSION["admin_user"])) {
    $pn_id = $_GET["pn_id"];
    if ($pn_id) {
        $query = $db_con->prepare("DELETE FROM payment_notifications WHERE payment_notification_id=?");
        $query->execute([$pn_id]);
        if ($query->rowCount()) {
            header("Location:index.php?page_code_outside=0&page_code_inside=113");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=114");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
