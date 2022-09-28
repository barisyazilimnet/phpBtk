<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;ADMİN ÜYELERİ</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=70" style="color:#fff; text-decoration:none">+ Yeni Admin Üyesi Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM admin_users");
        $query->execute();
        $admin_users = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($admin_users as $admin_user) {
        ?>
                <tr>
                    <td colspan="2" style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:5px;">
                            <tr style="height:30px;">
                                <td style="text-align: left; font-weight: bold; width:125px"><?php echo $admin_user->admin_user_username ?></td>
                                <td style="text-align: left; width:125px"><?php echo $admin_user->admin_user_name_surname ?></td>
                                <td style="text-align: left; width:200px"><?php echo $admin_user->admin_user_email ?></td>
                                <td style="text-align: left; width:150px"><?php echo $admin_user->admin_user_phone_number ?></td>
                                <td width="25">
                                    <a href="index.php?page_code_outside=0&page_code_inside=74&admin_user_id=<?php echo $admin_user->admin_user_id  ?>">
                                        <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                    </a>
                                </td>
                                <td width="70">
                                    <a href="index.php?page_code_outside=0&page_code_inside=74&admin_user_id=<?php echo $admin_user->admin_user_id ?>" style="color:#646464">
                                        Güncelle
                                    </a>
                                </td>
                                <td width="25">
                                    <a href="index.php?page_code_outside=0&page_code_inside=78&admin_user_id=<?php echo $admin_user->admin_user_id ?>">
                                        <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                    </a>
                                </td>
                                <td width="30">
                                    <a href="index.php?page_code_outside=0&page_code_inside=78&admin_user_id=<?php echo $admin_user->admin_user_id ?>" style="color:#646464">
                                        Sil
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="2">
                    <table style="border-collapse:collapse; text-align:left; width:750px;">
                        <tr>
                            <td>&nbsp;&nbsp;Kayıtlı Admin Üyesi Bulunmamaktadır.</td>
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