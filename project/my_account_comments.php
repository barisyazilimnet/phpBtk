<?php
if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT * FROM comments WHERE user_id = ? ORDER BY comment_date DESC");
    $query->execute([$user->user_id]);
    $total_number_records = $query->rowCount();
    $limit = 10;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);
?>
    <table style="width: 1065px">
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 1065px; margin: 0 auto;">
                    <tr>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=50" style="color:#000; font-weight:bold;">Üyelik Bilgiler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=58" style="color:#000; font-weight:bold;">Adresler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=59" style="color:#000; font-weight:bold;">Favoriler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=60" style="color:#000; font-weight:bold;">Yorumlar</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=61" style="color:#000; font-weight:bold;">Şiparişler</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td width="1065" style="vertical-align: top;">
                <table style="width: 1065px; border-collapse:collapse">
                    <tr style="height: 40px; color:#f90">
                        <td colspan="2">
                            <h3>Hesabım > Yorumlar</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Tüm Yorumlarınızı Bu Alandan Görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="50">
                        <td style="background: #ccc; color:#000; width: 125px;">&nbsp;Puan</td>
                        <td style="background: #ccc; color:#000; width: 75px;">&nbsp;Yorum</td>
                    </tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM comments WHERE user_id = ? ORDER BY comment_date DESC LIMIT $start, $limit");
                    $query->execute([$user->user_id]);
                    $comments = $query->fetchAll(PDO::FETCH_OBJ);
                    if ($query->rowCount()) {
                        foreach ($comments as $comment) {
                            if ($comment->comment_point == 1) {
                                $point = "YildizBirDolu.png";
                            } else if ($comment->comment_point == 2) {
                                $point = "YildizIkiDolu.png";
                            } else if ($comment->comment_point == 3) {
                                $point = "YildizUcDolu.png";
                            } else if ($comment->comment_point == 4) {
                                $point = "YildizDortDolu.png";
                            } else if ($comment->comment_point == 5) {
                                $point = "YildizBesDolu.png";
                            }
                    ?>
                            <tr height="50">
                                <td style="width: 85px; text-align:left; border-bottom:1px dashed #ccc; padding:15px 0px;">
                                    <img src="img/<?php echo $point ; ?>" alt="<?php echo $comment->comment_point; ?>" />
                                </td>
                                <td style="width: 980px; text-align:left; border-bottom:1px dashed #ccc; padding:15px 0px;"><?php echo $comment->comment_text; ?></td>
                            </tr>
                        <?php
                        }
                        if ($total_page_number > 1) {
                        ?>
                            <tr height="50">
                                <td colspan="2" style="text-align: center;">
                                    <div class="paging_container">
                                        <div class="paging_container_inside_text_container">
                                            <?php echo "Toplam " . $total_page_number . " sayfada, " . $total_number_records . " adet kayıt bulunmaktadır."; ?>
                                        </div>
                                        <div class="paging_container_inside_number_container">
                                            <?php
                                            if ($paging > 1) {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=60&paging=1"><<</a></span>';
                                                echo '<span class="paging_passive"><a href="index.php?page_code=60&paging=' . ($paging - 1) . '"><</a></span>';
                                            }
                                            for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                                if ($page_index > 0 and $page_index <= $total_page_number) {
                                                    if ($page_index == $paging) {
                                                        echo '<span class="paging_active">' . $page_index . '</span>';
                                                    } else {
                                                        echo '<span class="paging_passive"><a href="index.php?page_code=60&paging=' . $page_index . '">' . $page_index . '</a></span>';
                                                    }
                                                }
                                            }
                                            if ($paging != $total_page_number) {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=60&paging=' . ($paging + 1) . '">></a></span>';
                                                echo '<span class="paging_passive"><a href="index.php?page_code=60&paging=' . $total_page_number . '">>></a></span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else { ?>
                        <tr height="50">
                            <td colspan="2" style="vertical-align:bottom;">Sisteme Kayıtlı Yorumunuz Bulunmamaktadır</td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    </table>
<?php } else {
    echo header("Location: index.php");
} ?>