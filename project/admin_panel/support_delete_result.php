<?php
if (isset($_SESSION["admin_user"])) {
    $SSS_id = $_GET["SSS_id"];
    if ($SSS_id) {
        $query = $db_con->prepare("DELETE FROM SSS WHERE SSS_id=?");
        $query->execute([$SSS_id]);
        if ($query->rowCount()) {
            header("Location:index.php?page_code_outside=0&page_code_inside=55");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=56");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
