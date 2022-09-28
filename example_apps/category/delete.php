<?php
$mysqli = new mysqli("localhost", "root", "", "php_btk");
$id = $_GET["id"];
$menus_ids = array($id);
function deleted_menus($id){
    global $mysqli;
    global $menus_ids;
    $query = $mysqli->query("SELECT * FROM menus WHERE top_category_id = $id");
    while ($result = $query->fetch_object()) {
        $menus_ids[] = $result->menu_id;
        deleted_menus($result->menu_id);
    }
    return $menus_ids;
}
$deleted_menu_ids = deleted_menus($id);
foreach ($deleted_menu_ids as $value) {
    $query = $mysqli->query("DELETE FROM menus WHERE menu_id=$value");
    echo ($query) ? "İşlem Başarılı" : "İşlem Hatası", "<br />";
}
