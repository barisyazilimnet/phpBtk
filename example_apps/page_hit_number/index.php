<?php
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo $mysqli->connect_error . "<br />";
    die("veritabanına baglanılamadı");
}
$mysqli->set_charset("UTF8");
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="width: 75%;">
        <?php
        $query = $mysqli->query("SELECT * FROM php_btk.articles");
        while ($result = $query->fetch_object()) {
            ?>
            <tr>
                <td style="text-align: center; width=50%;"><a href="read.php?id=<?php echo $result->article_id; ?>"><?php echo $result->article_header; ?></a></td>
                <td style="text-align: right; width=50%;"><?php echo $result->article_impression_number; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>