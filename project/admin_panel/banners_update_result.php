<?php

use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    $banner_id = $_GET["banner_id"];
    if ($_POST) {
        $banner_name = security($_POST["banner_name"]);
        $banner_section = security($_POST["banner_section"]);
        $banner_img = $_FILES["banner_img"];
        $banner_img_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $query = $db_con->prepare("UPDATE shipping_companies SET banner_img=?, banner_name=?, banner_section=? WHERE banner_id=?");
        $query->execute([$banner_img_new_name, $banner_name, $banner_section, $banner_id]);
        switch ($banner_section) {
            case 'menu_under':
                $image_x = 250;
                $image_y = 500;
                break;
            case 'product_detail':
                $image_x = 350;
                $image_y = 350;
                break;
            default: #ANASAYFA
                $image_x = 1065;
                $image_y = 186;
                break;
        }
        if (is_uploaded_file($banner_img["tmp_name"])) {
            $upload_banner_img = new Upload($banner_img, "tr-TR");
            if ($upload_banner_img->uploaded) {
                $upload_banner_img->mime_check = true; //? dosyalarım türü allowed da belirtilen türle aynı mı
                $upload_banner_img->allowed = array("image/*"); //? image türünde bütun uzantıları kabul eder
                $upload_banner_img->file_overwrite = true; //? öncesinde aynı dosya varsa üzerine yazar
                $upload_banner_img->image_convert = 'png';
                $upload_banner_img->image_background_color = null;
                $upload_banner_img->image_resize = true;
                // $upload_banner_img->image_convert = 'gif';
                // $upload_banner_img->image_x = 192;
                $upload_banner_img->image_y = $image_y;
                $upload_banner_img->image_x = $image_x;
                $upload_banner_img->image_ratio = true;
                // $upload_banner_img->image_ratio_y = true;
                $upload_banner_img->file_new_name_body = $banner_img_new_name;
                $upload_banner_img->process($_SERVER["DOCUMENT_ROOT"] . '/php/project/img/banners/');
                if ($upload_banner_img->processed) {
                    $upload_banner_img->clean();
                } else {
                    header("Location:index.php?page_code_outside=0&page_code_inside=41");
                }
            }
        }
        header("Location:index.php?page_code_outside=0&page_code_inside=40");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=41");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
