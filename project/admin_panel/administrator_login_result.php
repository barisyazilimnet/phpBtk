<?php
if (empty($_SESSION["admin_user"])) {
    if (isset($_POST)) {
        $username = security($_POST["username"]);
        $password = md5(security($_POST["password"]));
        if ($username != "" and $password != "") {
            $query = $db_con->prepare("SELECT * FROM admin_users WHERE admin_user_username = ? AND admin_user_password = ?");
            $query->execute([$username, $password]);
            $admin_user = $query->fetch(PDO::FETCH_OBJ);
            if ($query->rowCount()) {
                $_SESSION["admin_user"] = $username;
                header("Location:index.php?page_code_outside=0&page_code_inside=0");
            } else {
                header("Location:index.php?page_code_outside=3");
            }
        } else {
            header("Location:index.php?page_code_outside=1");
        }
    }
} else {
    header("Location:index.php?page_code_outside=0");
}
