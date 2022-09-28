<?php
if (isset($_SESSION["admin_user"])) {
    $query = $db_con->prepare("SELECT * FROM comments");
    $query->execute();
    $total_number_records = $query->rowCount();
    $limit = 10;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width: 750px;">
                <h3>&nbsp;YORUMLAR</h3>
            </td>
        </tr>
        <tr height="10">
            <td></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM comments ORDER BY comment_id DESC LIMIT $start, $limit");
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($comments as $comment) {
                if ($comment->comment_point == 1) {
                    $comment_point_img = "YildizBirDolu.png";
                } else if ($comment->comment_point == 2) {
                    $comment_point_img = "YildizIkiDolu.png";
                } else if ($comment->comment_point == 3) {
                    $comment_point_img = "YildizUcDolu.png";
                } else if ($comment->comment_point == 4) {
                    $comment_point_img = "YildizDortDolu.png";
                } else if ($comment->comment_point == 5) {
                    $comment_point_img = "YildizBesDolu.png";
                }
        ?>
                <tr style="height :85px;">
                    <td style="border-bottom:1px dashed #ccc;">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left: 1%;">
                            <tr height="25">
                                <td style="width: 685px;"><img src="../img/<?php echo  $comment_point_img; ?>" alt="<?php echo  $comment_point_img; ?>"></td>
                                <td style="width: 10px;">&nbsp;</td>
                                <td style="width: 55px;">
                                    <table>
                                        <tr height="25">
                                            <td width="20" colspan="1" style="text-align: right; padding-right: 1%; padding-top: 5px;">
                                                <a href="index.php?page_code_outside=0&page_code_inside=86&comment_id=<?php echo $comment->comment_id ?>">
                                                    <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                                </a>
                                            </td>
                                            <td width="25" colspan="8">
                                                <a href="index.php?page_code_outside=0&page_code_inside=86&comment_id=<?php echo $comment->comment_id ?>" style="color:#646464">
                                                    Sil
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr height="25">
                                <td colspan="3"><?php echo  $comment->comment_text; ?></td>
                                
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php
            }
            if ($total_page_number > 1) {
            ?>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr height="50">
                    <td style="text-align: center;">
                        <div class="paging_container">
                            <div class="paging_container_inside_text_container">
                                <?php echo "Toplam " . $total_page_number . " sayfada, " . $total_number_records . " adet kayıt bulunmaktadır."; ?>
                            </div>
                            <div class="paging_container_inside_number_container">
                                <?php
                                if ($paging > 1) {
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=85&paging=1"><<</a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=85&paging=' . ($paging - 1) . '"><</a></span>';
                                }
                                for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                    if ($page_index > 0 and $page_index <= $total_page_number) {
                                        if ($page_index == $paging) {
                                            echo '<span class="paging_active">' . $page_index . '</span>';
                                        } else {
                                            echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=85&paging=' . $page_index . '">' . $page_index . '</a></span>';
                                        }
                                    }
                                }
                                if ($paging != $total_page_number) {
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=85&paging=' . ($paging + 1) . '">></a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=85&paging=' . $total_page_number . '">>></a></span>';
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td>
                    <table style="border-collapse:collapse; text-align:left; width:750px;">
                        <tr>
                            <td>&nbsp;&nbsp;Kayıtlı Yorum Bulunmamaktadır.</td>
                        </tr>
                    </table>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>