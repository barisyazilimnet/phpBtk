<?php
if (isset($_SESSION["admin_user"])) {
    $bank_account_id = $_GET["bank_account_id"];
    if ($bank_account_id) {
        $query = $db_con->prepare("SELECT bank_logo FROM bank_accounts WHERE bank_account_id=?");
        $query->execute([$bank_account_id]);
        $bank_logo = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("DELETE FROM bank_accounts WHERE bank_account_id=?");
        $query->execute([$bank_account_id]);
        if ($query->rowCount()) {
            unlink("../img/" . $bank_logo->bank_logo);
            header("Location:index.php?page_code_outside=0&page_code_inside=19");
        }
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=20");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
