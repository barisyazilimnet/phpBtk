<?php
if (isset($_SESSION["admin_user"])) {
    $shipping_company_id = $_GET["shipping_company_id"];
    if ($shipping_company_id) {
        $query = $db_con->prepare("SELECT shipping_company_logo FROM shipping_companies WHERE shipping_company_id=?");
        $query->execute([$shipping_company_id]);
        $shipping_company_logo = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("DELETE FROM shipping_companies WHERE shipping_company_id=?");
        $query->execute([$shipping_company_id]);
        if ($query->rowCount()) {
            unlink("../img/" . $shipping_company_logo->shipping_company_logo);
            header("Location:index.php?page_code_outside=0&page_code_inside=31");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=32");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
