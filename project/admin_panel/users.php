<?php
if (isset($_SESSION["admin_user"])) {
    @$search = $_REQUEST["search"];
    $search_sql = ($search) ? " WHERE user_email LIKE '%" . $_REQUEST["search"] . "%'" : "";
    $search_paging = ($search) ? "&search=$search" : "";
    $query = $db_con->prepare("SELECT * FROM users $search_sql");
    $query->execute();
    $total_number_records = $query->rowCount();
    $limit = 10;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width: 750px;">
                <h3>&nbsp;ÜYELER</h3>
            </td>
        </tr>
        <tr height="10">
            <td></td>
        </tr>
        <tr>
            <td>
                <div class="search_section">
                    <form action="index.php?page_code_outside=0&page_code_inside=81" method="POST">
                        <div class="search_section_button_container"><input type="submit" value="" class="search_section_button"></div>
                        <div class="search_section_input_container"><input type="text" name="search" class="search_section_input"></div>
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM users $search_sql LIMIT $start, $limit");
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($users as $user) {
        ?>
                <tr style="height :85px;">
                    <td style="border-bottom:1px dashed #ccc;">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left: 1%;">
                            <tr height="25">
                                <td style="width: 75px; font-weight: bold;">Adı Soyadı</td>
                                <td style="width: 10px; font-weight: bold;">:</td>
                                <td style="width: 150px;"><?php echo $user->user_name_surname; ?></td>
                                <td style="width: 50px; font-weight: bold;">E-mail</td>
                                <td style="width: 10px; font-weight: bold;">:</td>
                                <td style="width: 200px;"><?php echo $user->user_email; ?></td>
                                <td style="width: 50px; font-weight: bold;">Telefon</td>
                                <td style="width: 10px; font-weight: bold;">:</td>
                                <td style="width: 75px;"><?php echo $user->user_phone_number; ?></td>
                            </tr>
                            <tr height="25">
                                <td style="width: 75px; font-weight: bold;">Cinsiyet</td>
                                <td style="width: 10x; font-weight: bold;">:</td>
                                <td style="width: 75px;"><?php echo ($user->user_gender) ? "Erkek" : "Kadın"; ?></td>
                                <td style="width: 75px; font-weight: bold;">Kayıt Tarihi</td>
                                <td style="width: 10x; font-weight: bold;">:</td>
                                <td style="width: 75px;"><?php echo date("d.m.Y H:i", $user->user_registration_date); ?></td>
                                <td style="width: 125px; font-weight: bold;">Kayıt Ip Adresi</td>
                                <td style="width: 10x; font-weight: bold;">:</td>
                                <td style="width: 75px; ;"><?php echo $user->user_ip; ?></td>
                            </tr>
                            <tr height="25">
                                <td width="20" colspan="1" style="text-align: right; padding-right: 1%; padding-top: 5px;">
                                    <a href="index.php?page_code_outside=0&page_code_inside=82&user_id=<?php echo $user->user_id ?>">
                                        <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                    </a>
                                </td>
                                <td width="25" colspan="8">
                                    <a href="index.php?page_code_outside=0&page_code_inside=82&user_id=<?php echo $user->user_id ?>" style="color:#646464">
                                        Sil
                                    </a>
                                </td>
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
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=81&paging=1' . $search_paging . '"><<</a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=81&paging=' . ($paging - 1) . $search_paging . '"><</a></span>';
                                }
                                for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                    if ($page_index > 0 and $page_index <= $total_page_number) {
                                        if ($page_index == $paging) {
                                            echo '<span class="paging_active">' . $page_index . '</span>';
                                        } else {
                                            echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=81&paging=' . $page_index . $search_paging . '">' . $page_index . '</a></span>';
                                        }
                                    }
                                }
                                if ($paging != $total_page_number) {
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=81&paging=' . ($paging + 1) . $search_paging . '">></a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=81&paging=' . $total_page_number . $search_paging . '">>></a></span>';
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
                            <td>&nbsp;&nbsp;Kayıtlı Üye Bulunmamaktadır.</td>
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