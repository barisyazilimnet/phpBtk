<?php
$mysqli = new mysqli("localhost", "root", "");
$query = $mysqli->query("SELECT COUNT(*) AS total_records FROM php_btk.things")->fetch_object();
$total_records = $query->total_records;
if (isset($_REQUEST["page"])) {
    $paging = $_REQUEST["page"];
} else {
    $paging = 1;
}
$limit = 5;
$start = ($paging * $limit) - $limit;
$page_number = ceil($total_records / $limit);
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
    $query = $mysqli->query("SELECT * FROM php_btk.things LIMIT $start, $limit");
    while ($result = $query->fetch_object()) {
        echo $result->things_id . "    ";
        echo $result->things_name . "<br />";
    }
    ?>
    <div class="paging_field_section">
        <div class="paging_field_inset_text_section">
            Toplam <?php echo $page_number; ?> sayfada, <?php echo $total_records; ?> adet kayıt bulunmaktadır.
        </div>
        <div class="paging_field_inset_number_section">
            <?php
            if ($paging > 1) {
                echo "<span class='passive'><a href='index.php?page=1'> << </a></span>";
                $turn_back = $paging - 1;
                echo " <span class='passive'><a href='index.php?page=$turn_back'> < </a></span>";
            }
            for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                if ($page_index > 0 and $page_index <= $page_number) {
                    if ($paging == $page_index) {
                        echo "<span class='passive'> $page_index </span>";
                    } else {
                        echo "<span class='passive'><a href='index.php?page=$page_index'> $page_index </a></span>";
                    }
                }
            }
            if ($paging != $page_number) {
                $next = $paging + 1;
                echo "<span class='passive'><a href='index.php?page=$next'> > </a></span>";
                echo " <span class='passive'><a href='index.php?page=$page_number'> >> </a></span>";
            }
            ?>
        </div>
    </div>
</body>

</html>