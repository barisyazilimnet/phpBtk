<?php
session_start();
ob_start();
$mysqli = new mysqli("localhost", "root", "", "php_btk");

if (isset($_SESSION["user"])) {
    $user_query = $mysqli->query("SELECT * FROM users WHERE user_name='" . $_SESSION["user"] . "'")->fetch_object();
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 1000px;
            height: 600px;
            text-align: center;
        }

        .tr {
            height: 100px;

        }

        .bgcolor {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <?php
    if ($_POST) {
        $user_name = $_POST["user_name"];
        $user_password = $_POST["user_password"];
        $query = $mysqli->query("SELECT COUNT(*) AS user_number FROM users WHERE user_name='$user_name' AND user_password='$user_password'")->fetch_object();
        if ($query->user_number) {
            $_SESSION["user"] = $user_name;
            header("Location: index.php");
        } else {
            echo "Girilen bilgiler yanlıştır.";
        }
    }
    ?>
    <table>
        <tr>
            <td colspan="5" class="bgcolor tr">HEADER ALANI</td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td width="200" height="400" class="bgcolor">ANASAYFA</td>
            <td width="10" height="400">&nbsp;</td>
            <td width="480" height="400" class="bgcolor">MAİN ALANI</td>
            <td width="10" height="400">&nbsp;</td>
            <td width="300" height="400">
                <?php if (!isset($_SESSION["user"])) { ?>
                    <form method="post">
                        Kullanıcı adı : <input type="text" name="user_name"><br /><br />
                        Şifre : <input type="password" name="user_password"><br /><br />
                        <input type="submit" value="Giriş yap"><br /><br />
                        <a href="sign_up.php">Yeni Üye Ol</a>
                    </form>
                <?php } else { ?>
                    Merhaba <?php echo $user_query->user_name_surname; ?><br />
                    <a href="sign_out.php">ÇIKIŞ YAP</a>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="5" class="bgcolor tr">FOOTER ALANI</td>
        </tr>
    </table>
</body>

</html>