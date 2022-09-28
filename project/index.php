<?php
require_once "system/system.php";
$page_code = (isset($_REQUEST["page_code"])) ? preg_replace("/[^0-9]/", "", security($_REQUEST["page_code"])) : 0;
$paging = (isset($_REQUEST["paging"])) ? preg_replace("/[^0-9]/", "", security($_REQUEST["paging"])) : 1;

?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta name="Robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days"> <!-- arama motorların sitey ziyaret etme süresi -->
    <meta name="description" content="<?php echo decode($settings->website_description) ?>">
    <meta name="keywords" content="<?php echo decode($settings->website_keywords) ?>">
    <title><?php echo decode($settings->website_title) ?></title>
    <base href="/php/project/"> <!-- htaccess kulalndıgı zaman css, js, ve resim gibi dosyalarda dosya yolunda sıkıntı olur base ile sabit kök belirtilerek düzeltilir -->
    <link type="text/css" rel="stylesheet" href="system/css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>

<body>
    <table width="1065" height="100%" style="margin: 0 auto; border-collapse:collapse">
        <tr height="40" style="background-color: #353745;">
            <td><img src="img/header.png" alt="header"></td>
        </tr>
        <tr height="110">
            <td>
                <table width="1065" height="30" style="margin: 0 auto; border-collapse:collapse">
                    <tr style="background-color: #08C;">
                        <td>&nbsp;</td>
                        <?php if (isset($_SESSION["user"])) { ?>
                            <td width="20"><a href="index.php?page_code=50"><img style="margin-top: 5;" src="img/KullaniciBeyaz16x16.png" alt="KullaniciBeyaz16x16"></a></td>
                            <td width="70"><a href="index.php?page_code=50">Hesabım</a></td>
                            <td width="20"><a href="index.php?page_code=49"><img style="margin-top: 5;" src="img/CikisBeyaz16x16.png" alt="CikisBeyaz16x16"></a></td>
                            <td width="85"><a href="index.php?page_code=49">Çıkış Yap</a></td>
                            <td width="20"><a href="index.php?page_code=93"><img style="margin-top: 5;" src="img/cart16x16.png" alt="cart16x16"></a></td>
                            <td width="103"><a href="index.php?page_code=93">Alışveriş Sepeti</a></td>
                        <?php } else { ?>
                            <td width="20"><a href="uye-giris"><img style="margin-top: 5;" src="img/sign_in16x16.png" alt="sign_in16x16"></a></td>
                            <td width="70"><a href="uye-giris">Giriş Yap</a></td>
                            <td width="20"><a href="uye-ol"><img style="margin-top: 5;" src="img/sign_up16x16.png" alt="sign_up16x16"></a></td>
                            <td width="85"><a href="uye-ol">Yeni Üye Ol</a></td>
                        <?php } ?>

                    </tr>
                </table>
                <table width="1065" height="80" style="margin: 0 auto; border-collapse:collapse">
                    <tr>
                        <td width="192"><a href="index.php"><img src="img/<?php echo $settings->website_logo; ?>" alt="logo"></a></td>
                        <td>
                            <table width="873" height="30" style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="306">&nbsp;</td>
                                    <td width="107"><a href="index.php?page_code=0" style="color:#646464; font-weight:bold">Anasayfa</a></td>
                                    <td width="160"><a href="index.php?page_code=83" style="color:#646464; font-weight:bold">Erkek Ayakkabıları</a></td>
                                    <td width="160"><a href="index.php?page_code=84" style="color:#646464; font-weight:bold">Kadın Ayakkabıları</a></td>
                                    <td width="140"><a href="index.php?page_code=85" style="color:#646464; font-weight:bold">Çocuk Ayakkabıları</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if (!$page_code or $page_code == "" or $page_code == 0) {
                    include $page["client"][0];
                } else {
                    include $page["client"][$page_code];
                }
                ?>
                <br />
            </td>
        </tr>
        <tr height="210">
            <td>
                <table width="1065" style="margin: 0 auto; border-collapse:collapse; background-color:#f9f9f9">
                    <tr height="30">
                        <td width="250" style="border-bottom: 1px dashed #ccc; font-weight:bold;">&nbsp;Kurumsal</td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #ccc; font-weight:bold;">Üyelik & Hizmetler</td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #ccc; font-weight:bold;">Sözleşmeler</td>
                        <td width="21">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #ccc; font-weight:bold;">Bizi Takip Edin</td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;<a href="index.php?page_code=1" style="color:#646464;">Hakkımızda</a></td>
                        <td>&nbsp;</td>
                        <?php if (isset($_SESSION["user"])) { ?>
                            <td><a href="index.php?page_code=50" style="color:#646464;">Hesabım</a></td>
                        <?php } else { ?>
                            <td><a href="uye-ol" style="color:#646464;">Üye ol</a></td>
                        <?php } ?>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=2" style="color:#646464;">Üyelik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="20"><a target="_blank" href="<?php echo decode($settings->website_facebook); ?>"><img src="img/Facebook16x16.png" alt="Facebook16x16" style="margin-top: 5px;"></a></td>
                                    <td width="230"><a target="_blank" href="<?php echo decode($settings->website_facebook); ?>" style="color:#646464;">Facebook</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;<a href="index.php?page_code=8" style="color:#646464;">Banka Hesaplarımız</a></td>
                        <td>&nbsp;</td>
                        <?php if (isset($_SESSION["user"])) { ?>
                            <td><a href="index.php?page_code=49" style="color:#646464;">Çıkış Yap</a></td>
                        <?php } else { ?>
                            <td><a href="uye-giris" style="color:#646464;">Giriş Yap</a></td>
                        <?php } ?>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=3" style="color:#646464;">Kullanım Koşulları</a></td>
                        <td>&nbsp;</td0>
                        <td>
                            <table style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="20"><a target="_blank" href="<?php echo decode($settings->website_twitter); ?>"><img src="img/Twitter16x16.png" alt="Twitter16x16" style="margin-top: 5px;"></a></td>
                                    <td width="230"><a target="_blank" href="<?php echo decode($settings->website_twitter); ?>" style="color:#646464;">Twitter</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;<a href="index.php?page_code=9" style="color:#646464;">Ödeme Bildirim Formu</a></td>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=20" style="color:#646464;">SSS</a></td>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=4" style="color:#646464;">Gizlilik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="20"><a target="_blank" href="<?php echo decode($settings->website_linkedin); ?>"><img src="img/LinkedIn16x16.png" alt="LinkedIn16x16" style="margin-top: 5px;"></a></td>
                                    <td width="230"><a target="_blank" href="<?php echo decode($settings->website_linkedin); ?>" style="color:#646464;">Linkedin</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;<a href="index.php?page_code=14" style="color:#646464;">Kargom Nerede ?</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=5" style="color:#646464;">Mesafeli Satış Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="20"><a target="_blank" href="<?php echo decode($settings->website_instagram); ?>"><img src="img/Instagram16x16.png" alt="Instagram16x16" style="margin-top: 5px;"></a></td>
                                    <td width="230"><a target="_blank" href="<?php echo decode($settings->website_instagram); ?>" style="color:#646464;">Instagram</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;<a href="index.php?page_code=15" style="color:#646464;">İletişim</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=6" style="color:#646464;">Teslimat</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="20"><a target="_blank" href="<?php echo decode($settings->website_youtube); ?>"><img src="img/YouTube16x16.png" alt="YouTube16x16" style="margin-top: 5px;"></a></td>
                                    <td width="230"><a target="_blank" href="<?php echo decode($settings->website_youtube); ?>" style="color:#646464;">Youtube</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td><a href="index.php?page_code=7" style="color:#646464;">İptal & İade & Değişim</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table style="margin: 0 auto; border-collapse:collapse;">
                                <tr>
                                    <td width="20"><a target="_blank" href="<?php echo decode($settings->website_pinterest); ?>"><img src="img/Pinterest16x16.png" alt="Pinterest16x16" style="margin-top: 5px;"></a></td>
                                    <td width="230"><a target="_blank" href="<?php echo decode($settings->website_pinterest); ?>" style="color:#646464;">Pinterest</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="30">
            <td>
                <table width="1065" style="margin: 0 auto; border-collapse:collapse; text-align:center;">
                    <tr>
                        <td><?php echo decode($settings->website_copyright); ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="30">
            <td>
                <table width="1065" style="margin: 0 auto; border-collapse:collapse; text-align:center;">
                    <tr>
                        <td>
                            <img src="img/RapidSSL32x12.png" alt="RapidSSL32x12">&nbsp;
                            <img src="img/InternetteGuvenliAlisveris28x12.png" alt="InternetteGuvenliAlisveris28x12">&nbsp;
                            <img src="img/3DSecure14x12.png" alt="3DSecure14x12">&nbsp;
                            <img src="img/BonusCard41x12.png" alt="BonusCard41x12">&nbsp;
                            <img src="img/MaximumCard46x12.png" alt="MaximumCard46x12">&nbsp;
                            <img src="img/CardFinans78x12.png" alt="CardFinans78x12">&nbsp;
                            <img src="img/AxessCard46x12.png" alt="AxessCard46x12">&nbsp;
                            <img src="img/ParafCard19x12.png" alt="ParafCard19x12">&nbsp;
                            <img src="img/VisaCard37x12.png" alt="VisaCard37x12">&nbsp;
                            <img src="img/MasterCard21x12.png" alt="MasterCard21x12">&nbsp;
                            <img src="img/AmericanExpiress20x12.png" alt="AmericanExpiress20x12">&nbsp;
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <script type="text/javascript" language="javascript" src="system/script.js"></script>
    <script type="text/javascript" src="frameworks/jquery-3.6.0.min.js" language="javascript"></script>
</body>

</html>
<?php
$db_con = null;
ob_end_flush();
?>