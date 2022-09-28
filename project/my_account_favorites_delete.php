<?php if (isset($_SESSION["user"])) {
    $favorite_id = security($_GET["favorite_id"]);
    $query = $db_con->prepare("DELETE FROM favorites WHERE favorite_id = ? AND user_id = ?");
    $query->execute([$favorite_id, $user->user_id]);
    if ($query->rowCount()) {
        header("Location:index.php?page_code=59");
    } else {
        header("Location:index.php?page_code=81");
    }
} else {
    echo header("Location: index.php");
}
