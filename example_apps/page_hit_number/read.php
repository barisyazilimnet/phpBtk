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

<body style="text-align: center;">
    <?php
        $mysqli->query("UPDATE php_btk.articles SET article_impression_number = article_impression_number + 1 WHERE article_id = " . $_GET["id"]);
        $query = $mysqli->query("SELECT * FROM php_btk.articles WHERE article_id = " . $_GET["id"])->fetch_object();
        echo $query->article_header . "<br />";
        echo htmlspecialchars_decode($query->article_content) . "<br /><br /><br /><br /><br />";
        echo "Bu makale " . $query->article_impression_number . " defa görüntülendi."
    ?>
</body>

</html>