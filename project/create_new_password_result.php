<?php
if (isset($_POST) and isset($_GET)) {
    $password = md5(security($_POST["password"]));
    $password2 = md5(security($_POST["password2"]));
    $email = security($_GET["email"]);
    $activation_code = security($_GET["activation_code"]);
    if ($password != "" and $password2 != "" and $email != "" and $activation_code != "") {
        if ($password == $password2) {
            $query = $db_con->prepare("UPDATE users SET user_password = ? WHERE user_email = ? AND user_activation_code = ?");
            $query->execute([$password, $email, $activation_code]);
            if ($query->rowCount()) {
                header("Location:index.php?page_code=45");
            } else {
                header("Location:index.php?page_code=46");
            }
        } else {
            header("Location:index.php?page_code=47");
        }
    } else {
        header("Location:index.php?page_code=48");
    }
}
