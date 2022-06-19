<?php if (isset($_SESSION["user"])) { ?>
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
                        <td colspan="5">
                            <h3>Hesabım > Adreslerim</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="5" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Aşağıdan Adreslerini Güncelleyebilirsin.</td>
                    </tr>
                    <tr height="50">
                        <td style="background: #ccc; color:#000; font-weight:bold;">&nbsp;Adresler</td>
                        <td colspan="4" style="background: #ccc;"><a href="index.php?page_code=70" style="color:#000; font-weight:bold;">+ Yeni Adres Ekle</a></td>
                    </tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM addresses WHERE user_id = ?");
                    $query->execute([$user->user_id]);
                    $addresses = $query->fetchAll(PDO::FETCH_OBJ);
                    $number = 1;
                    if ($query->rowCount()) {
                        foreach ($addresses as $address) {
                            $bgcolor = ($number % 2) ? "#f1f1f1" : "fff";
                    ?>
                            <tr height="50" style="background-color: <?php echo $bgcolor ?>;">
                                <td><?php echo $address->name_surname . " - " . $address->address . " " . $address->district . "/" . $address->province . "/" . $address->country . " - " . $address->phone_number; ?></td>
                                <td width="25" style="margin-top: 5;"><a href="index.php?page_code=62&id=<?php echo $address->address_id; ?>"><img src="img/Guncelleme20x20.png" alt="Guncelleme20x20"></a></td>
                                <td width="70"><a href="index.php?page_code=62&id=<?php echo $address->address_id; ?>" style="color:#000">Güncelle</a></td>
                                <td width="25" style="margin-top: 5;"><a href="index.php?page_code=67&id=<?php echo $address->address_id; ?>"><img src="img/Sil20x20.png" alt="Sil20x20"></a></td>
                                <td width="25"><a href="index.php?page_code=67&id=<?php echo $address->address_id; ?>" style="color:#000">Sil</a></td>
                            </tr>
                        <?php
                            $number++;
                        }
                    } else { ?>
                        <tr height="50">
                            <td colspan="5" style="vertical-align:bottom;">Sisteme Kayıtlı Adresiniz Bulunmamaktadır</td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    </table>
<?php } else {
    echo header("Location: index.php");
} ?>