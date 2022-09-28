<?php
require "settings.php";
$ip_address = $_SERVER["REMOTE_ADDR"];
$time = time();
$date = date("d.m.Y H:i:s", $time);

function security($param)
{
    return htmlspecialchars(strip_tags(trim($param)), ENT_QUOTES);
}

function decode($param)
{
    return htmlspecialchars_decode($param, ENT_QUOTES);
}

function activation_code()
{
    return rand(10000, 99999) . "-" . rand(10000, 99999) . "-" . rand(10000, 99999);
}

$query = $db_con->prepare("SELECT * FROM contracts_and_texts");
$query->execute();
$contracts_and_texts = $query->fetch(PDO::FETCH_OBJ);

if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT * FROM users WHERE user_email = ?");
    $query->execute([$_SESSION["user"]]);
    $user = $query->fetch(PDO::FETCH_OBJ);
}

if (isset($_SESSION["admin_user"])) {
    $query = $db_con->prepare("SELECT * FROM admin_users WHERE admin_user_username = ?");
    $query->execute([$_SESSION["admin_user"]]);
    $admin_user = $query->fetch(PDO::FETCH_OBJ);
}

$page = [
    "client" => array(
        "homepage.php", //0
        "about_us.php", //1
        "contracts/membership_contract.php",
        "contracts/terms_of_use.php",
        "contracts/privacy_contract.php",
        "contracts/distance_selling_contract.php",
        "contracts/delivery.php",
        "contracts/cancel_and_return_and_change.php",
        "bank_accounts.php",
        "payment_notification_form.php",
        "payment_notification_form_result.php", //10
        "payment_notification_form_OK.php",
        "payment_notification_form_ERROR.php",
        "payment_notification_form_MISSING_AREA.php",
        "where_is_my_cargo.php",
        "contact.php",
        "contact_result.php",
        "contact_OK.php",
        "contact_ERROR.php",
        "contact_MISSING_AREA.php",
        "SSS.php", //20
        "sign_up.php",
        "sign_up_result.php",
        "sign_up_OK.php",
        "sign_up_ERROR.php",
        "sign_up_MISSING_AREA.php",
        "sign_up_REPEATED_INFORMATION.php",
        "sign_up_ERROR_PASSWORD.php",
        "sign_up_ERROR_CONTRACT.php",
        "sign_up_ACTIVATION_OK.php",
        "sign_in.php", //30
        "sign_in_result.php",
        "sign_in_OK.php",
        "sign_in_ERROR.php",
        "sign_in_MISSING_AREA.php",
        "sign_in_ERROR_INFORMATION.php",
        "sign_in_NOT_ACTIVATION.php",
        "forgot_password.php",
        "forgot_password_result.php",
        "forgot_password_OK.php",
        "forgot_password_ERROR.php", //40
        "forgot_password_MISSING_AREA.php",
        "forgot_password_ERROR_INFORMATION.php",
        "create_new_password.php",
        "create_new_password_result.php",
        "create_new_password_OK.php",
        "create_new_password_ERROR.php",
        "create_new_password_ERROR_PASSWORD.php",
        "create_new_password_MISSING_AREA.php",
        "sign_out.php",
        "my_account_membership_information.php", //50
        "my_account_membership_information_update.php",
        "my_account_membership_information_update_result.php",
        "my_account_membership_information_update_OK.php",
        "my_account_membership_information_update_ERROR.php",
        "my_account_membership_information_update_MISSING_AREA.php",
        "my_account_membership_information_update_REPEATED_INFORMATION.php",
        "my_account_membership_information_update_ERROR_PASSWORD.php",
        "my_account_addresses.php",
        "my_account_favorites.php",
        "my_account_comments.php", //60
        "my_account_orders.php",
        "my_account_addresses_update.php",
        "my_account_addresses_update_result.php",
        "my_account_addresses_update_OK.php",
        "my_account_addresses_update_ERROR.php",
        "my_account_addresses_update_MISSING_AREA.php",
        "my_account_addresses_delete.php",
        "my_account_addresses_delete_OK.php",
        "my_account_addresses_delete_ERROR.php",
        "my_account_addresses_add.php", //70
        "my_account_addresses_add_result.php",
        "my_account_addresses_add_OK.php",
        "my_account_addresses_add_ERROR.php",
        "my_account_addresses_add_MISSING_AREA.php",
        "my_account_orders_add_comment.php",
        "my_account_orders_add_comment_result.php",
        "my_account_orders_add_comment_OK.php",
        "my_account_orders_add_comment_ERROR.php",
        "my_account_orders_add_comment_MISSING_AREA.php",
        "my_account_favorites_delete.php", //80
        "my_account_favorites_delete_ERROR.php",
        "product_detail.php",
        "man_shoes.php",
        "woman_shoes.php",
        "child_shoes.php",
        "my_favorite_add.php",
        "my_favorite_add_OK.php",
        "my_favorite_add_ERROR.php",
        "my_favorite_add_REPEATED_INFORMATION.php",
        "add_to_cart.php", //90
        "add_to_cart_ERROR.php",
        "add_to_cart_NOT_LOGIN.php",
        "cart.php",
        "cart_delete_product.php",
        "cart_decrease_product_qunatity.php",
        "cart_increase_product_qunatity.php",
        "cart_choose_address_and_shipping_selection.php",
        "cart_choose_payment_selection.php",
        "cart_choose_payment_selection_result.php",
        "cart_complete_with_bank_transfer.php", //100
        "cart_not_complete_with_bank_transfer.php",
        "cart_credit_cart_payment.php",
        "cart_credit_cart_payment_result.php",
        "cart_credit_cart_payment_OK.php",
        "cart_credit_cart_payment_ERROR.php"
    ),
    "admin_panel_outside" => array(
        "homepage.php",
        "administrator_login.php",
        "administrator_login_result.php",
        "administrator_login_result_ERROR.php",
        "administrator_sign_out.php"
    ),
    "admin_panel_inside" => array(
        "panel.php", //0
        "site_settings.php",
        "site_settings_result.php",
        "site_settings_result_OK.php",
        "site_settings_result_ERROR.php",
        "contracts_and_texts.php", //5
        "contracts_and_texts_result.php",
        "contracts_and_texts_result_OK.php",
        "contracts_and_texts_result_ERROR.php",
        "bank_accounts.php", 
        "bank_accounts_add.php", //10
        "bank_accounts_add_result.php",
        "bank_accounts_add_result_OK.php",
        "bank_accounts_add_result_ERROR.php",
        "bank_accounts_update.php",
        "bank_accounts_update_result.php", //15
        "bank_accounts_update_result_OK.php",
        "bank_accounts_update_result_ERROR.php",
        "bank_accounts_delete_result.php",
        "bank_accounts_delete_result_OK.php",
        "bank_accounts_delete_result_ERROR.php", //20
        "shipping_companies.php", 
        "shipping_companies_add.php",
        "shipping_companies_add_result.php",
        "shipping_companies_add_result_OK.php",
        "shipping_companies_add_result_ERROR.php", //25
        "shipping_companies_update.php",
        "shipping_companies_update_result.php",
        "shipping_companies_update_result_OK.php",
        "shipping_companies_update_result_ERROR.php",
        "shipping_companies_delete_result.php", //30
        "shipping_companies_delete_result_OK.php",
        "shipping_companies_delete_result_ERROR.php",
        "banners.php", 
        "banners_add.php",
        "banners_add_result.php", //35
        "banners_add_result_OK.php",
        "banners_add_result_ERROR.php",
        "banners_update.php",
        "banners_update_result.php",
        "banners_update_result_OK.php", //40
        "banners_update_result_ERROR.php",
        "banners_delete_result.php", 
        "banners_delete_result_OK.php",
        "banners_delete_result_ERROR.php",
        "support.php", //45
        "support_add.php",
        "support_add_result.php", 
        "support_add_result_OK.php",
        "support_add_result_ERROR.php",
        "support_update.php", //50
        "support_update_result.php",
        "support_update_result_OK.php",
        "support_update_result_ERROR.php",
        "support_delete_result.php", 
        "support_delete_result_OK.php", //55
        "support_delete_result_ERROR.php",
        "menus.php",
        "menus_add.php",
        "menus_add_result.php", 
        "menus_add_result_OK.php", //60
        "menus_add_result_ERROR.php",
        "menus_update.php",
        "menus_update_result.php",
        "menus_update_result_OK.php",
        "menus_update_result_ERROR.php", //65
        "menus_delete_result.php", 
        "menus_delete_result_OK.php",
        "menus_delete_result_ERROR.php",
    )
];
