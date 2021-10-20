<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET["id"];
    $mysqli = new mysqli("localhost", "root", "", "php_btk");
    function opener_list_menu($edited_id, $edited_top_cateogry_id, $top_category_id = 0, $space = 0)
    {
        global $mysqli;
        $query = $mysqli->query("SELECT * FROM menus WHERE top_category_id = $top_category_id");
        while ($result = $query->fetch_object()) {
            if ($edited_id != $result->menu_id) {
                echo ($edited_top_cateogry_id == $result->menu_id)
                    ?
                    "<option value='$result->menu_id' selected>" . str_repeat("&nbsp;", $space) . $result->menu_name . "</option>"
                    :
                    "<option value='$result->menu_id'>" . str_repeat("&nbsp;", $space) . $result->menu_name . "</option>";
                opener_list_menu($edited_id, $edited_top_cateogry_id, $result->menu_id, $space + 5);
            }
        }
    }
    if ($_POST) {
        $top_category_id = $_POST["top_category_id"];
        $menu_name = $_POST["menu_name"];
        $query = $mysqli->query("UPDATE menus SET top_category_id=$top_category_id, menu_name='$menu_name' WHERE menu_id=$id");
        if ($query) {
            echo "İşlem başarılı";
        } else {
            echo "İşlem hatası";
        }
    }
    $query = $mysqli->query("SELECT * FROM menus WHERE menu_id=$id")->fetch_object();
    ?>
    <form method="post">
        Üst Menü :
        <select name="top_category_id">
            <option value="0" <?php if ($query->top_category_id == 0) {
                                    echo "selected";
                                } ?>>Ana Menü</option>
            <?php opener_list_menu($query->menu_id, $query->top_category_id) ?>
        </select>
        <br />
        Menü Adı :
        <input type="text" name="menu_name" value="<?php echo $query->menu_name; ?>"><br />
        <input type="submit" value="Ekle">
    </form>
    <br /><br /><br /><br /><br /><br />
</body>

</html>