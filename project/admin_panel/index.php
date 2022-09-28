<?php
require_once "../system/system.php";
require_once "../frameworks/verot/src/class.upload.php";
$page_code_outside = (isset($_REQUEST["page_code_outside"])) ? preg_replace("/[^0-9]/", "", security($_REQUEST["page_code_outside"])) : 0;
$page_code_inside = (isset($_REQUEST["page_code_inside"])) ? preg_replace("/[^0-9]/", "", security($_REQUEST["page_code_inside"])) : 0;
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
    <meta name="Robots" content="noindex, nofollow, noarchive">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days"> <!-- arama motorların sitey ziyaret etme süresi -->
    <title><?php echo decode($settings->website_title) ?></title>
    <link type="text/css" rel="stylesheet" href="../system/css/adminpanel.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/png">
</head>

<body>
    <table width="1065" height="100%" style="margin: 0 auto; border-collapse:collapse">
        <tr>
            <td>
                <?php
                if (empty($_SESSION["admin_user"])) {
                    if (!$page_code_outside or $page_code_outside == "" or $page_code_outside == 0) {
                        include $page["admin_panel_outside"][1];
                    } else {
                        include $page["admin_panel_outside"][$page_code_outside];
                    }
                } else {
                    if (!$page_code_outside or $page_code_outside == "" or $page_code_outside == 0) {
                        include $page["admin_panel_outside"][0];
                    } else {
                        include $page["admin_panel_outside"][$page_code_outside];
                    }
                }

                ?>
            </td>
        </tr>
    </table>
    <script type="text/javascript" language="javascript" src="../system/script.js"></script>
    <script type="text/javascript" src="../frameworks/jquery-3.6.0.min.js" language="javascript"></script>
</body>

</html>
<?php
$db_con = null;
ob_end_flush();
?>