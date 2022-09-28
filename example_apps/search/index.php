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
    $mysqli = new mysqli("localhost", "root", "");
    if ($_POST) {
        $search = $_POST["search"];
        $query = $mysqli->query("SELECT * FROM php_btk.things WHERE things_name LIKE '%$search%'");
        echo $mysqli->error;
        while($result = $query->fetch_object()){
            echo $result->things_name . "<br />";
        }
    }
    ?>
    <form action="" method="post">
        <input type="search" name="search" id="search">
        <input type="submit" value="ARA">
    </form>
</body>

</html>