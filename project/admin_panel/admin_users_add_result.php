<?php
if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $username = security($_POST["username"]);
        $password = md5(security($_POST["password"]));
        $name_surname = security($_POST["name_surname"]);
        $email = security($_POST["email"]);
        $phone_number = security($_POST["phone_number"]);
        $query = $db_con->prepare("INSERT INTO admin_users SET admin_user_username=?, admin_user_password=?, admin_user_phone_number=?, admin_user_name_surname=?, admin_user_email=?");
        $query->execute([$username, $password, $phone_number, $name_surname, $email]);
        header("Location:index.php?page_code_outside=0&page_code_inside=72");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=73");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
