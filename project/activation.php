<?php
require_once "system/system.php";

if (isset($_GET["code"])) {
    $code = $_GET["code"];
    $email = $_GET["email"];
    echo $code . "<br />" . $email;
    if ($code != "" and $email != "") {
        $query = $db_con->prepare("SELECT user_email, user_activation_code FROM users WHERE user_email = ? AND user_activation_code = ?");
        $query->execute([$email, $code]);
        if ($query->rowCount()) {
            $query = $db_con->prepare("UPDATE users SET user_status = 1 WHERE user_email = ? AND user_activation_code = ?");
            $query->execute([$email, $code]);
            if ($query->rowCount()) {
                header("Location:index.php?page_code=29");
            } else {
                header("Location:" . $settings->website_URL);
            }
        } else {
            header("Location:" . $settings->website_URL);
        }
    } else {
        header("Location:" . $settings->website_URL);
    }
} else {
    header("Location:" . $settings->website_URL);
}

$db_con = null;
ob_end_flush();
