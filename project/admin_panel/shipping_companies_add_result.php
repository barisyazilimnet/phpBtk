<?php

use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $shipping_company_name = security($_POST["shipping_company_name"]);
        $shipping_company_logo = $_FILES["shipping_company_logo"];
        $shipping_company_logo_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $query = $db_con->prepare("INSERT INTO shipping_companies SET shipping_company_logo=?, shipping_company_name=?");
        $query->execute([$shipping_company_logo_new_name, $shipping_company_name]);
        if (is_uploaded_file($shipping_company_logo["tmp_name"])) {
            $upload_shipping_company_logo = new Upload($shipping_company_logo, "tr-TR");
            if ($upload_shipping_company_logo->uploaded) {
                $upload_shipping_company_logo->mime_check = true; //? dosyalarım türü allowed da belirtilen türle aynı mı
                $upload_shipping_company_logo->allowed = array("image/*"); //? image türünde bütun uzantıları kabul eder
                $upload_shipping_company_logo->file_overwrite = true; //? öncesinde aynı dosya varsa üzerine yazar
                $upload_shipping_company_logo->image_convert = 'png';
                $upload_shipping_company_logo->image_background_color = null;
                $upload_shipping_company_logo->image_resize = true;
                // $upload_shipping_company_logo->image_convert = 'gif';
                // $upload_shipping_company_logo->image_x = 192;
                $upload_shipping_company_logo->image_y = 30;
                // $upload_shipping_company_logo->image_x = 100;
                $upload_shipping_company_logo->image_ratio = true;
                // $upload_shipping_company_logo->image_ratio_y = true;
                $upload_shipping_company_logo->file_new_name_body = $shipping_company_logo_new_name;
                $upload_shipping_company_logo->process($_SERVER["DOCUMENT_ROOT"] . '/php/project/img/');
                if ($upload_shipping_company_logo->processed) {
                    echo 'image renamed, resized x=100
                          and converted to GIF';
                    $upload_shipping_company_logo->clean();
                } else {
                    header("Location:index.php?page_code_outside=0&page_code_inside=25");
                }
            }
        }
        header("Location:index.php?page_code_outside=0&page_code_inside=24");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=25");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
