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
    $mysqli = new mysqli("localhost", "root", "", "php_btk");
    function menus($top_category_id = 0, $space = 0)
    {
        global $mysqli;
        $query = $mysqli->query("SELECT * FROM menus WHERE top_category_id = $top_category_id");
        while ($result = $query->fetch_object()) {
            echo str_repeat("&nbsp;", $space);
            echo $result->menu_name . "  <a href='edit.php?id=$result->menu_id'>[Güncelle]</a> <a href='delete.php?id=$result->menu_id'>[Sil]</a><br />";
            menus($result->menu_id, $space + 5);
        }
    }
    function opener_list_menu($top_category_id = 0, $space = 0)
    {
        global $mysqli;
        $query = $mysqli->query("SELECT * FROM menus WHERE top_category_id = $top_category_id");
        while ($result = $query->fetch_object()) {
            echo "<option value='$result->menu_id'>" . str_repeat("&nbsp;", $space) . $result->menu_name . "</option>";
            opener_list_menu($result->menu_id, $space + 5);
        }
    }
    if($_POST){
        $top_category_id = $_POST["top_category_id"];
        $menu_name = $_POST["menu_name"];
        $query = $mysqli->query("INSERT INTO menus SET top_category_id=$top_category_id, menu_name='$menu_name'");
        if($query){
            echo "İşlem başarılı";
        }else{
            echo "İşlem hatası";
        }
    }
    ?>
    <form method="post">
        Üst Menü :
        <select name="top_category_id">
            <option value="0">Ana Menü</option>
            <?php opener_list_menu() ?>
        </select>
        <br />
        Menü Adı :
        <input type="text" name="menu_name"><br />
        <input type="submit" value="Ekle">
    </form>
    <br /><br /><br /><br /><br /><br />
    <?php
    menus();
    ?>
</body>

</html>