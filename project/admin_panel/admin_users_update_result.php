<?php
if (isset($_SESSION["admin_user"])) {
    $admin_user_id = $_GET["admin_user_id"];
    if ($_POST) {
        $username = security($_POST["username"]);
        $name_surname = security($_POST["name_surname"]);
        $email = security($_POST["email"]);
        $phone_number = security($_POST["phone_number"]);
        $query = $db_con->prepare("UPDATE admin_users SET admin_user_name_surname=?, admin_user_phone_number=?, admin_user_username=?, admin_user_email=? WHERE admin_user_id=?");
        $query->execute([$name_surname, $phone_number, $username, $admin_user_email, $admin_user_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=76");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=77");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
