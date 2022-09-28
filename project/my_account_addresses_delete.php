<?php if (isset($_SESSION["user"])) {
    $id = security($_GET["id"]);
    $query = $db_con->prepare("DELETE FROM addresses WHERE address_id = ?");
    $query->execute([$id]);
    if ($query->rowCount()) {
        header("Location:index.php?page_code=68");
    } else {
        header("Location:index.php?page_code=69");
    }
} else {

    echo header("Location: index.php");

    header("Location: index.php");

}
