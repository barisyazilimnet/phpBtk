<?php
$mysqli = new mysqli("localhost", "root", "", "php_btk");
if(isset($_SESSION["user"])){
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
        $user_name_surname = $_POST["user_name_surname"];
        $user_email = $_POST["user_email"];
        $user_name = $_POST["user_name"];
        $user_password = $_POST["user_password"];
        $query = $mysqli->query("SELECT COUNT(*) AS user_number FROM users WHERE user_name='$user_name' OR user_email='$user_email'")->fetch_object();
        if ($query->user_number) {
            echo "Kaydınız bulunmaktadır.";
            header("Location: index.php");
        } else {
            $query = $mysqli->query("INSERT INTO users SET user_name_surname='$user_name_surname', user_email='$user_email', user_name='$user_name', user_password='$user_password'");
            echo ($query) ? "İşlem başarılı" : "İşlem hatası";
            header("Location: index.php");
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
                <form method="post">
                    Ad Soyad : <input type="text" name="user_name_surname"><br /><br />
                    Email Adresi : <input type="email" name="user_email"><br /><br />
                    Kullanıcı Adı : <input type="text" name="user_name"><br /><br />
                    Şifre : <input type="password" name="user_password"><br /><br />
                    <input type="submit" value="Üye ol"><br /><br />
                </form>
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
<?php }else{
    header("Location: index.php");
} ?>