<?php

use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $bank_name = security($_POST["bank_name"]);
        $bank_branch_name = security($_POST["bank_branch_name"]);
        $bank_branch_code = security($_POST["bank_branch_code"]);
        $bank_location_city = security($_POST["bank_location_city"]);
        $bank_location_country = security($_POST["bank_location_country"]);
        $bank_currency = security($_POST["bank_currency"]);
        $account_holder = security($_POST["account_holder"]);
        $account_number = security($_POST["account_number"]);
        $iban_number = security($_POST["iban_number"]);
        $bank_logo = $_FILES["bank_logo"];
        $bank_logo_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $query = $db_con->prepare("INSERT INTO bank_accounts SET bank_logo=?, bank_name=?, location_city=?, location_country=?, branch_name=?, branch_code=?, currency=?, account_holder=?, account_number=?, iban_number=?");
        $query->execute([$bank_logo_new_name, $bank_name, $bank_branch_name, $bank_branch_code, $bank_location_city, $bank_location_country, $bank_currency, $account_holder, $account_number, $iban_number]);
        if (is_uploaded_file($bank_logo["tmp_name"])) {
            $upload_bank_logo = new Upload($bank_logo, "tr-TR");
            if ($upload_bank_logo->uploaded) {
                $upload_bank_logo->mime_check = true; //? dosyalarım türü allowed da belirtilen türle aynı mı
                $upload_bank_logo->allowed = array("image/*"); //? image türünde bütun uzantıları kabul eder
                $upload_bank_logo->file_overwrite = true; //? öncesinde aynı dosya varsa üzerine yazar
                $upload_bank_logo->image_convert = 'png';
                $upload_bank_logo->image_background_color = null;
                $upload_bank_logo->image_resize = true;
                // $upload_bank_logo->image_convert = 'gif';
                // $upload_bank_logo->image_x = 192;
                $upload_bank_logo->image_y = 30;
                // $upload_bank_logo->image_x = 100;
                $upload_bank_logo->image_ratio = true;
                // $upload_bank_logo->image_ratio_y = true;
                $upload_bank_logo->file_new_name_body = $bank_logo_new_name;
                $upload_bank_logo->process($_SERVER["DOCUMENT_ROOT"] . '/php/project/img/');
                if ($upload_bank_logo->processed) {
                    echo 'image renamed, resized x=100
                          and converted to GIF';
                    $upload_bank_logo->clean();
                } else {
                    header("Location:index.php?page_code_outside=0&page_code_inside=13");
                }
            }
        }
        header("Location:index.php?page_code_outside=0&page_code_inside=12");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=13");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
