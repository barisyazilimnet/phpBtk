<?php
if (isset($_SESSION["admin_user"])) {
    //? orders
    $query = $db_con->prepare("SELECT * FROM orders WHERE approval_status = ? AND order_shipping_status = ?  GROUP BY order_number");
    $query->execute([0, 0]);
    $wait_o_count = $query->rowCount();
    $query = $db_con->prepare("SELECT * FROM orders WHERE approval_status = ? AND order_shipping_status = ?  GROUP BY order_number");
    $query->execute([1, 1]);
    $completed_o_count = $query->rowCount();
    //TODO iptal edilen siparişler eklenmesi gerekli
    //? payment_notifications
    $query = $db_con->prepare("SELECT * FROM payment_notifications WHERE payment_notification_status = ?");
    $query->execute([0]);
    $disapproved_pn_count = $query->rowCount();
    $query = $db_con->prepare("SELECT * FROM payment_notifications WHERE payment_notification_status = ?");
    $query->execute([1]);
    $approved_pn_count = $query->rowCount();
    // TODO iptal edilen havale bildirimleri eklenmesi gerekli
    //? products
    $query = $db_con->prepare("SELECT * FROM products WHERE product_status = ?");
    $query->execute([0]);
    $not_active_p_count = $query->rowCount();
    $query = $db_con->prepare("SELECT * FROM products WHERE product_status = ?");
    $query->execute([1]);
    $active_p_count = $query->rowCount();
    //? admin_users
    $query = $db_con->prepare("SELECT * FROM admin_users");
    $query->execute();
    $as_count = $query->rowCount();
    // TODO aktif pasif yöneticiler yapılması sisteme girmesi yasaklı kullanıcı yapılmalı
    // TODO yasaklılar listesinde kullanıcı email, kullanıcı adı, telefon numarası, doğum tarihi gibi şeyler kontrol edilmeli
    //? users
    $query = $db_con->prepare("SELECT * FROM users WHERE user_status = ?");
    $query->execute([0]);
    $not_active_u_count = $query->rowCount();
    $query = $db_con->prepare("SELECT * FROM users WHERE user_status = ?");
    $query->execute([1]);
    $active_u_count = $query->rowCount();
    // TODO sisteme girmesi yasaklı kullanıcılar yapılmalı
    //? bank_accounts
    $query = $db_con->prepare("SELECT * FROM bank_accounts");
    $query->execute();
    $ba_count = $query->rowCount();
    //? banners
    $query = $db_con->prepare("SELECT * FROM banners");
    $query->execute();
    $b_count = $query->rowCount();
    // TODO aktif pasif bannerler yapılmalı
    // TODO Gösterilen bölüme göre ayrılmalı
    //? comments
    $query = $db_con->prepare("SELECT * FROM comments");
    $query->execute();
    $c_count = $query->rowCount();
    // TODO silinmiş yorumlar yapılmalı
    //? sss
    $query = $db_con->prepare("SELECT * FROM sss");
    $query->execute();
    $sss_count = $query->rowCount();
?>
    <table width="760" style="border-collapse:collapse;">
        <tr>
            <td>
                <table style="border-collapse:collapse; text-align:left; width:750px; margin:5px 0px 0px 5px;">
                    <tr height="130">
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Bekleyen Siparişler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $wait_o_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Tamamlanan Siparişler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $completed_o_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Tüm Siparişler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $wait_o_count + $completed_o_count; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="130">
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Onaylanmayan Havale Bildirimleri</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $disapproved_pn_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Onaylanan Havale Bildirimleri</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $approved_pn_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Tüm Havale Bildirimleri</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $disapproved_pn_count + $approved_pn_count; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="130">
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Aktif Ürünler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $active_p_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Pasif Ürünler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $not_active_p_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Tüm Ürünler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $active_p_count + $not_active_p_count; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="130">
                        <td width="245">
                             <!-- <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Aktif Yöneticiler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold">3</td>
                                </tr>
                            </table> -->
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <!-- <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Pasif Yöneticiler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold">3</td>
                                </tr>
                            </table> -->
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Tüm Yöneticiler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $as_count ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="130">
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Aktif Üyeler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $active_u_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Pasif Üyeler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $not_active_u_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Tüm Üyeler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $active_u_count + $not_active_u_count; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="130">
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Bankalar</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $ba_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Bannerler</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $b_count; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="5">&nbsp;</td>
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Yorumlar</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $c_count; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="130">
                        <td width="245">
                            <table style="border-collapse:collapse; text-align:center; width:243px; border:1px solid #ccc;">
                                <tr height="75">
                                    <td style="font-size: 20px;">Destek İçerikleri</td>
                                </tr>
                                <tr height="50">
                                    <td style="font-size: 30px; font-weight:bold"><?php echo $sss_count; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php
} else {
    header("Location:index.php?page_code_outside=1");
} ?>