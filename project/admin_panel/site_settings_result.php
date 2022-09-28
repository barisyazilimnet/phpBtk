<?php

use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $website_title = security($_POST["website_title"]);
        $website_description = security($_POST["website_description"]);
        $website_keywords = security($_POST["website_keywords"]);
        $website_copyright = security($_POST["website_copyright"]);
        $website_email = security($_POST["website_email"]);
        $website_email_password = md5(security($_POST["website_email_password"]));
        $website_host_name = security($_POST["website_host_name"]);
        $website_facebook = security($_POST["website_facebook"]);
        $website_twitter = security($_POST["website_twitter"]);
        $website_instagram = security($_POST["website_instagram"]);
        $website_pinterest = security($_POST["website_pinterest"]);
        $website_linkedin = security($_POST["website_linkedin"]);
        $website_youtube = security($_POST["website_youtube"]);
        $usd = security($_POST["usd"]);
        $eur = security($_POST["eur"]);
        $client_id = security($_POST["client_id"]);
        $store_key = security($_POST["store_key"]);
        $api_user = security($_POST["api_user"]);
        $api_password = security($_POST["api_password"]);
        $website_logo = $_FILES["website_logo"];
        $query = $db_con->prepare("UPDATE settings SET website_title=?, website_description=?, website_keywords=?, website_copyright=?, website_email=?, website_email_password=?, website_host_name=?, website_facebook=?, website_twitter=?, website_instagram=?, website_pinterest=?, website_linkedin=?, website_youtube=?, usd=?, eur=?, client_id=?, store_key=?, api_user=?, api_password=?");
        $query->execute([$website_title, $website_description, $website_keywords, $website_copyright, $website_email, $website_email_password, $website_host_name, $website_facebook, $website_twitter, $website_instagram, $website_pinterest, $website_linkedin, $website_youtube, $usd, $eur, $client_id, $store_key, $api_user, $api_password]);
        if (is_uploaded_file($website_logo["tmp_name"])) {
            $upload_website_logo = new Upload($website_logo, "tr-TR");
            if ($upload_website_logo->uploaded) {
                $upload_website_logo->mime_check = true; //? dosyalarım türü allowed da belirtilen türle aynı mı
                $upload_website_logo->allowed = array("image/*"); //? image türünde bütun uzantıları kabul eder
                $upload_website_logo->file_overwrite = true; //? öncesinde aynı dosya varsa üzerine yazar
                $upload_website_logo->image_convert = 'png';
                $upload_website_logo->image_background_color = null;
                $upload_website_logo->image_resize = true;
                // $upload_website_logo->image_convert = 'gif';
                $upload_website_logo->image_x = 192;
                $upload_website_logo->image_y = 35;
                // $upload_website_logo->image_x = 100;
                // $upload_website_logo->image_ratio_y = true;
                $upload_website_logo->file_new_name_body = 'Logo';
                $upload_website_logo->process($_SERVER["DOCUMENT_ROOT"].'/php/project/img/');
                if ($upload_website_logo->processed) {;
                    $upload_website_logo->clean();
                  } else {
                    header("Location:index.php?page_code_outside=0&page_code_inside=4");
                  } 
            }
        }
        header("Location:index.php?page_code_outside=0&page_code_inside=3");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=4");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
