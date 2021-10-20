<?php
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo $mysqli->connect_error . "<br />";
    die("veritabanına baglanılamadı");
}
$mysqli->set_charset("UTF8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (@$_POST["delete_users"]) {
        $mysqli->query("DELETE FROM php_btk.users WHERE user_id IN (" . implode(", ", $_POST["delete"]) . ")");
    }
    ?>
    <form action="" method="post">
        <?php
        $query = $mysqli->query("SELECT * FROM php_btk.users");
        while ($result = $query->fetch_object()) {
        ?>
            <input type="checkbox" name="delete[]" value="<?php echo $result->user_id; ?>">
        <?php
            echo $result->user_name . "<br />";
        }
        ?>
        <input type="submit" value="Sil" name="delete_users">
    </form>
</body>

</html>