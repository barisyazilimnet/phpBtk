<?php
if (isset($_SESSION["admin_user"])) {
    $banner_id = $_GET["banner_id"];
    if ($banner_id) {
        $query = $db_con->prepare("SELECT banner_img FROM banners WHERE banner_id=?");
        $query->execute([$banner_id]);
        $banner_img = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("DELETE FROM banners WHERE banner_id=?");
        $query->execute([$banner_id]);
        if ($query->rowCount()) {
            unlink("../img/" . $banner_img->banner_img);
            header("Location:index.php?page_code_outside=0&page_code_inside=43");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=44");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
