<?php
// variant güncelleme işlemleri yapılmadı
use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    $product_id = $_GET["product_id"];
    if ($_POST) {
        $menu_id = security($_POST["menu_id"]);
        $name = security($_POST["name"]);
        $price = security($_POST["price"]);
        $shipping_price = security($_POST["shipping_price"]);
        $currency = security($_POST["currency"]);
        $vat_rate = security($_POST["vat_rate"]);
        $description = security($_POST["description"]);
        $variant_header = security($_POST["variant_header"]);
        $variant_name_1 = security($_POST["variant_name_1"]);
        $variant_stock_quantity_1 = security($_POST["variant_stock_quantity_1"]);
        $variant_name_2 = security($_POST["variant_name_2"]);
        $variant_stock_quantity_2 = security($_POST["variant_stock_quantity_2"]);
        $variant_name_3 = security($_POST["variant_name_3"]);
        $variant_stock_quantity_3 = security($_POST["variant_stock_quantity_3"]);
        $variant_name_4 = security($_POST["variant_name_4"]);
        $variant_stock_quantity_4 = security($_POST["variant_stock_quantity_4"]);
        $variant_name_5 = security($_POST["variant_name_5"]);
        $variant_stock_quantity_5 = security($_POST["variant_stock_quantity_5"]);
        $img_1 = $_FILES["img_1"];
        $img_2 = $_FILES["img_2"];
        $img_3 = $_FILES["img_3"];
        $img_4 = $_FILES["img_4"];
        $img_1_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $img_2_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $img_3_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $img_4_new_name = substr(md5(uniqid(time())), 0, 25) . ".png";
        $query = $db_con->prepare("SELECT menu_product_type FROM menus WHERE menu_id=?");
        $query->execute([$menu_id]);
        $mpt = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("UPDATE products SET menu_id=?, product_name=?, product_price=?, product_shipping_price=?, product_currency=?, product_vat_rate=?, product_description=?, product_variant_header=?, product_img=?, product_img_1=?, product_img_2=?, product_img_3=?, product_type=?, product_status=? WHERE product_id=?");
        $query->execute([$menu_id, $name, $price, $shipping_price, $currency, $vat_rate, $description, $variant_header, $img_1_new_name, $img_2_new_name, $img_3_new_name, $img_4_new_name, $mpt->menu_product_type, 1, $product_id]);
        // $query = $db_con->prepare("UPDATE product_variants SET product_id=?, product_variant_name=?, product_variant_stock_quantity=?");
        // $query->execute([$added_product_id, $variant_name_1, $variant_stock_quantity_1]);
        if (is_uploaded_file($img_1["tmp_name"])) {
            $upload_img_1 = new Upload($img_1, "tr-TR");
            if ($upload_img_1->uploaded) {
                $upload_img_1->mime_check = true; //? dosyalarım türü allowed da belirtilen türle aynı mı
                $upload_img_1->allowed = array("image/*"); //? image türünde bütun uzantıları kabul eder
                $upload_img_1->file_overwrite = true; //? öncesinde aynı dosya varsa üzerine yazar
                // $upload_img_1->image_convert = 'png';
                // $upload_img_1->image_background_color = null;
                $upload_img_1->image_resize = true;
                // $upload_img_1->image_convert = 'gif';
                // $upload_img_1->image_x = 192;
                $upload_img_1->image_y = 800;
                $upload_img_1->image_x = 600;
                // $upload_img_1->image_ratio = true;
                // $upload_img_1->image_ratio_y = true;
                $upload_img_1->file_new_name_body = $img_1_new_name;
                switch ($mpt->menu_product_type) {
                    case 'Erkek Ayakkabısı':
                        $img_path = "man/";
                        break;
                    case 'Kadın Ayakkabısı':
                        $img_path = "woman/";
                        break;
                    default:
                        $img_path = "child/";
                        break;
                }
                $upload_img_1->process($_SERVER["DOCUMENT_ROOT"] . '/php/project/img/products/' . $img_path);
                if ($upload_img_1->processed) {
                    $upload_img_1->clean();
                } else {
                    header("Location:index.php?page_code_outside=0&page_code_inside=93");
                }
            }
        }
        $query = $db_con->prepare("UPDATE menus SET menu_product_number=menu_product_number+1 WHERE menu_id = ?");
        $query->execute([$menu_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=96");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=97");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
