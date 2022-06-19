<?php
if (isset($_SESSION["user"])) {
    if (isset($_POST["email"])) {
        $email        =    security($_POST["email"]);
    } else {
        $email        =    "";
    }
    if (isset($_POST["password"])) {
        $password                =    security($_POST["password"]);
    } else {
        $password                =    "";
    }
    if (isset($_POST["password2"])) {
        $password2        =    security($_POST["password2"]);
    } else {
        $password2        =    "";
    }
    if (isset($_POST["name_surname"])) {
        $name_surname        =    security($_POST["name_surname"]);
    } else {
        $name_surname        =    "";
    }
    if (isset($_POST["phone_number"])) {
        $phone_number    =    security($_POST["phone_number"]);
    } else {
        $phone_number    =    "";
    }
    if (isset($_POST["gender"])) {
        $gender            =    security($_POST["gender"]);
    } else {
        $gender            =    "";
    }


    if (($email != "") and ($password != "") and ($password2 != "") and ($name_surname != "") and ($phone_number != "") and ($gender != "")) {
        $md5_password                    =    md5($password);
        if ($password != $password2) {
            header("Location:index.php?page_code=57");
            exit();
        } else {
            if ($password == "EskiSifre") {
                $password_update            =    0;
            } else {
                $password_update            =    1;
            }

            if ($user->user_email != $email) {
                $query        =    $db_con->prepare("SELECT * FROM users WHERE user_email = ?");
                $query->execute([$email]);
                if ($query->rowCount()) {
                    header("Location:index.php?page_code=56");
                    exit();
                }
            }

            if ($password_update) {
                $query        =    $db_con->prepare("UPDATE users SET user_email = ?, user_password = ?, user_name_surname = ?, user_phone_number = ?, user_gender = ? WHERE user_id = ?");
                $query->execute([$email, $md5_password, $name_surname, $phone_number, $gender, $user->user_id]);
                print_r($query->errorInfo());
            } else {
                $query        =    $db_con->prepare("UPDATE users SET user_email = ?, user_name_surname = ?, user_phone_number = ?, user_gender = ? WHERE user_id = ?");
                $query->execute([$email, $name_surname, $phone_number, $gender, $user->user_id]);
                print_r($query->errorInfo());
            }
            if ($query->rowCount()) {
                $_SESSION["user"]    =    $email;

                header("Location:index.php?page_code=53");
                exit();
            } else {
                header("Location:index.php?page_code=54");
            }
        }
    } else {
        header("Location:index.php?page_code=55");
        exit();
    }
} else {
    header("Location:index.php");
    exit();
}
