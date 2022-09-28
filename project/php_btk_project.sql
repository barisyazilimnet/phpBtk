-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Eyl 2022, 14:02:20
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `php_btk_project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name_surname` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `addresses`
--

INSERT INTO `addresses` (`address_id`, `user_id`, `name_surname`, `address`, `country`, `province`, `district`, `phone_number`) VALUES
(1, 1, 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4', 'Türkiye', 'Antalya', 'Alanya', '5324973873'),
(2, 1, 'Barış KURT', 'Hacet mah.', 'Türkiye', 'Antalya', 'Alanya', '5324973873'),
(3, 1, 'Barış KURT', 'Hacet mah.', 'Türkiye', 'Antalya', 'Alanya', '5324973873'),
(5, 2, 'Mehmet KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4', 'Türkiye', 'Antalya', 'Alanya', '5322036252');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_user_id` int(11) NOT NULL,
  `admin_user_name_surname` varchar(100) NOT NULL,
  `admin_user_phone_number` varchar(11) NOT NULL,
  `admin_user_username` varchar(100) NOT NULL,
  `admin_user_email` varchar(255) NOT NULL,
  `admin_user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin_users`
--

INSERT INTO `admin_users` (`admin_user_id`, `admin_user_name_surname`, `admin_user_phone_number`, `admin_user_username`, `admin_user_email`, `admin_user_password`) VALUES
(1, 'Barış KURT', '5324973873', 'barisyazilim.net', 'kurt-bar07@hotmail.com', '03f05869450ea1b4d18c3f5191f29050');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `bank_account_id` int(10) UNSIGNED NOT NULL,
  `bank_logo` varchar(250) NOT NULL,
  `bank_name` varchar(250) NOT NULL,
  `location_city` varchar(250) NOT NULL,
  `location_country` varchar(250) NOT NULL,
  `branch_name` varchar(250) NOT NULL,
  `branch_code` varchar(250) NOT NULL,
  `currency` varchar(250) NOT NULL,
  `account_holder` varchar(500) NOT NULL,
  `account_number` varchar(500) NOT NULL,
  `iban_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bank_accounts`
--

INSERT INTO `bank_accounts` (`bank_account_id`, `bank_logo`, `bank_name`, `location_city`, `location_country`, `branch_name`, `branch_code`, `currency`, `account_holder`, `account_number`, `iban_number`) VALUES
(3, 'akbank.png', 'Akbank', 'Antalya', 'Türkiye', 'Alanya', '55682', 'TL', 'Barış KURT', '65321568432', 'TR12 1568 5468 6548 9563 78'),
(4, 'akbank.png', 'Akbank', 'Antalya', 'Türkiye', 'Alanya', '55682', 'TL', 'Barış KURT', '65321568432', 'TR12 1568 5468 6548 9563 78');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_section` varchar(100) NOT NULL,
  `banner_name` varchar(100) NOT NULL,
  `banner_img` varchar(30) NOT NULL,
  `banner_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_section`, `banner_name`, `banner_img`, `banner_views_count`) VALUES
(1, 'menu_under', 'Örnek Reklam 1', '250x500Reklam-1.jpg', 48),
(2, 'menu_under', 'Örnek Reklam 2', '250x500Reklam-2.jpg', 48),
(3, 'menu_under', 'Örnek Reklam 3', '250x500Reklam-3.jpg', 48),
(4, 'product_detail', 'Ürün detay 1', '350x350Reklam-1.jpg', 229),
(5, 'product_detail', 'Ürün detay 2', '350x350Reklam-2.jpg', 228),
(7, 'homepage', 'Anasayfa 1', '1.jpg', 72),
(8, 'homepage', 'Anasayfa 2', '2.jpg', 72);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `shipping_company_id` int(11) NOT NULL,
  `payment_selection` varchar(50) NOT NULL,
  `installment_selection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_point` tinyint(1) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_date` int(11) NOT NULL,
  `comment_ip_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`comment_id`, `product_id`, `user_id`, `comment_point`, `comment_text`, `comment_date`, `comment_ip_address`) VALUES
(2, 4, 1, 4, 'süper bir ürün', 1656231953, '127.0.0.1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contracts_and_texts`
--

CREATE TABLE `contracts_and_texts` (
  `contracts_and_texts_id` int(10) UNSIGNED NOT NULL,
  `about_us_text` text NOT NULL,
  `membership_contract_text` text NOT NULL,
  `terms_of_use_text` text NOT NULL,
  `privacy_contract_text` text NOT NULL,
  `distance_selling_contract_text` text NOT NULL,
  `delivery_text` text NOT NULL,
  `cancel_and_return_and_change_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contracts_and_texts`
--

INSERT INTO `contracts_and_texts` (`contracts_and_texts_id`, `about_us_text`, `membership_contract_text`, `terms_of_use_text`, `privacy_contract_text`, `distance_selling_contract_text`, `delivery_text`, `cancel_and_return_and_change_text`) VALUES
(1, 'Burası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası HakkımızdaBurası Hakkımızda', 'Burası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesiBurası üyelik sözleşmesi', 'Burası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşullarıBurası kullanım koşulları', 'Burası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesiBurası gizlilik sözleşmesi', 'Burası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesiBurası mesafeli satış sözleşmesi', 'Burası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metniBurası teslimat metni', 'Burası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metniBurası iptal iade değişim metni');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `product_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 6, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_product_type` varchar(100) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_product_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_product_type`, `menu_name`, `menu_product_number`) VALUES
(1, 'Erkek Ayakkabısı', 'Günlük Ayakkabılar', 4),
(2, 'Erkek Ayakkabısı', 'Klasik Ayakkabılar', 2),
(3, 'Erkek Ayakkabısı', 'Spor Ayakkabılar', 0),
(4, 'Erkek Ayakkabısı', 'Botlar', 0),
(5, 'Kadın Ayakkabısı', 'Günlük Ayakkabılar', 0),
(6, 'Kadın Ayakkabısı', 'Klasik Ayakkabı', 0),
(7, 'Kadın Ayakkabısı', 'Spor Ayakkabı', 0),
(8, 'Kadın Ayakkabısı', 'Botlar', 0),
(9, 'Kadın Ayakkabısı', 'Topuklu Ayakkabılar', 0),
(10, 'Çocuk Ayakkabısı', 'Okul Ayakkabılar', 0),
(11, 'Çocuk Ayakkabısı', 'Günlük Ayakkabılar', 0),
(12, 'Çocuk Ayakkabısı', 'Spor Ayakkabılar', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_product_type` varchar(50) NOT NULL,
  `order_product_name` varchar(255) NOT NULL,
  `order_product_price` double NOT NULL,
  `price_currency` varchar(3) NOT NULL,
  `vat_rate` int(11) NOT NULL,
  `order_product_quantity` int(11) NOT NULL,
  `order_product_total_amount` double NOT NULL,
  `shipping_company` varchar(100) NOT NULL,
  `shipping_cost` double NOT NULL,
  `order_product_img` varchar(30) NOT NULL,
  `variant_header` varchar(100) NOT NULL,
  `variant_selection` varchar(100) NOT NULL,
  `address_name_surname` varchar(100) NOT NULL,
  `address_detail` varchar(255) NOT NULL,
  `address_phone_number` varchar(11) NOT NULL,
  `payment_selection` varchar(25) NOT NULL,
  `installment_selection` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `order_ip_address` varchar(20) NOT NULL,
  `approval_status` tinyint(1) NOT NULL,
  `order_shipping_status` tinyint(1) NOT NULL,
  `order_shipping_post_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_number`, `product_id`, `order_product_type`, `order_product_name`, `order_product_price`, `price_currency`, `vat_rate`, `order_product_quantity`, `order_product_total_amount`, `shipping_company`, `shipping_cost`, `order_product_img`, `variant_header`, `variant_selection`, `address_name_surname`, `address_detail`, `address_phone_number`, `payment_selection`, `installment_selection`, `order_date`, `order_ip_address`, `approval_status`, `order_shipping_status`, `order_shipping_post_code`) VALUES
(1, 1, 1, 1, 'Kadın Ayakkabısı', 'Mavi Kesikli Kadın Ayakkabısı', 300, '₺', 18, 1, 300, 'Yurtiçi Kargo', 24.99, '1-1.jpg', 'Numara', '37', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'bank_transfer', 0, 1660867200, '::1', 1, 1, '3161651632135'),
(2, 1, 5, 1, 'Kadın Ayakkabısı', 'Mavi Kesikli Kadın Ayakkabısı', 300, '₺', 18, 6, 1800, 'Yurtiçi Kargo', 149.94, '1-1.jpg', 'Numara', '38', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'bank_transfer', 0, 1660867200, '::1', 0, 0, ''),
(3, 1, 5, 3, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 3687.6, '₺', 18, 3, 11062.8, 'Yurtiçi Kargo', 29.97, '1-1.jpg', 'Numara', '44', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'bank_transfer', 0, 1660867200, '::1', 0, 0, ''),
(4, 1, 5, 3, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 3687.6, '₺', 18, 14, 51626.4, 'Yurtiçi Kargo', 139.86, '1-1.jpg', 'Numara', '40', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'bank_transfer', 0, 1660867200, '::1', 0, 0, ''),
(5, 1, 5, 1, 'Kadın Ayakkabısı', 'Mavi Kesikli Kadın Ayakkabısı', 300, '₺', 18, 8, 2400, 'Yurtiçi Kargo', 199.92, '1-1.jpg', 'Numara', '37', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'bank_transfer', 0, 1660867200, '::1', 0, 0, ''),
(6, 1, 6, 1, 'Kadın Ayakkabısı', 'Mavi Kesikli Kadın Ayakkabısı', 300, '₺', 18, 2, 600, 'Yurtiçi Kargo', 49.98, '1-1.jpg', 'Numara', '39', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'credit_card', 6, 1660867200, '::1', 0, 0, ''),
(7, 1, 7, 3, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 3687.6, '₺', 18, 10, 36876, 'Yurtiçi Kargo', 99.9, '1-1.jpg', 'Numara', '44', 'Barış KURT', 'Hacet mah. Berk sok. miray apt. no:2 kat:3/4 - Alanya / Antalya / Türkiye', '5324973873', 'credit_card', 9, 1660867200, '::1', 0, 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `payment_notifications`
--

CREATE TABLE `payment_notifications` (
  `payment_notification_id` int(10) UNSIGNED NOT NULL,
  `bank_id` int(10) UNSIGNED NOT NULL,
  `payment_notification_name_surname` varchar(200) NOT NULL,
  `payment_notification_email` varchar(250) NOT NULL,
  `payment_notification_phone_number` varchar(20) NOT NULL,
  `payment_notification_description` text NOT NULL,
  `payment_notification_date` int(10) UNSIGNED NOT NULL,
  `payment_notification_status` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `payment_notifications`
--

INSERT INTO `payment_notifications` (`payment_notification_id`, `bank_id`, `payment_notification_name_surname`, `payment_notification_email`, `payment_notification_phone_number`, `payment_notification_description`, `payment_notification_date`, `payment_notification_status`) VALUES
(2, 3, 'Barış KURT', 'kurt-bar07@hotmail.com', '5324973873', 'açıklama', 123134645, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `product_type` varchar(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_price_currency` char(3) NOT NULL,
  `vat_rate` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_img` varchar(30) NOT NULL,
  `product_img_1` varchar(30) NOT NULL,
  `product_img_2` varchar(30) NOT NULL,
  `product_img_3` varchar(30) NOT NULL,
  `product_variant_header` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `product_total_sale_number` int(11) NOT NULL,
  `product_comment_number` int(11) NOT NULL,
  `product_total_comment_point` int(11) NOT NULL,
  `product_views_number` int(11) NOT NULL,
  `product_shipping_company` varchar(100) NOT NULL,
  `product_shipping_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`product_id`, `menu_id`, `product_type`, `product_name`, `product_price`, `product_price_currency`, `vat_rate`, `product_description`, `product_img`, `product_img_1`, `product_img_2`, `product_img_3`, `product_variant_header`, `product_status`, `product_total_sale_number`, `product_comment_number`, `product_total_comment_point`, `product_views_number`, `product_shipping_company`, `product_shipping_price`) VALUES
(1, 5, 'Kadın Ayakkabısı', 'Mavi Kesikli Kadın Ayakkabısı', 300, '₺', 18, 'Mavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklamasıMavi Kesikli Kadın Ayakkabısı ürününün açıklaması', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 1, 17, 99, 394, 320, 'Yurtiçi Kargo', 24.99),
(2, 1, 'Kadın Ayakkabısı', 'Tokalı Bordo Kadın Ayakkabısı', 120, '$', 18, 'Tokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metniTokalı Bordo Kadın Ayakkabısı açıklama metni', '2.jpg', '', '', '', 'Numara', 1, 26, 83, 265, 34, 'Aras Kargo', 14.99),
(3, 4, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 210, '€', 18, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklaması', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 1, 27, 12, 55, 79, 'Yurtiçi Kargo', 9.99),
(4, 2, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 210, '€', 18, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklaması', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 1, 0, 14, 70, 98, 'Aras Kargo', 18.99),
(5, 3, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 210, '€', 18, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklaması', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 1, 25, 1, 3, 47, 'Mng Kargo', 12.99),
(6, 2, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 210, '€', 18, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklamasıSiyah Kuşaklı Makosen Erkek Ayakkabısı ürününün açıklaması', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 1, 0, 5, 5, 53, 'Yurtiçi Kargo', 11.99);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_variants`
--

CREATE TABLE `product_variants` (
  `product_variant_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_variant_name` varchar(100) NOT NULL,
  `product_variant_stock_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `product_variants`
--

INSERT INTO `product_variants` (`product_variant_id`, `product_id`, `product_variant_name`, `product_variant_stock_quantity`) VALUES
(1, 1, '35', 100),
(2, 1, '36', 100),
(3, 1, '37', 91),
(4, 1, '38', 94),
(6, 2, '35', 100),
(7, 2, '36', 100),
(8, 2, '37', 100),
(9, 2, '38', 100),
(10, 2, '39', 100),
(11, 3, '39', 100),
(12, 3, '40', 86),
(13, 3, '41', 100),
(14, 3, '42', 100),
(15, 3, '43', 100),
(16, 3, '44', 87);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(10) UNSIGNED NOT NULL,
  `website_URL` varchar(2000) NOT NULL,
  `website_title` varchar(50) NOT NULL,
  `website_description` text NOT NULL,
  `website_keywords` text NOT NULL,
  `website_copyright` varchar(250) NOT NULL,
  `website_logo` varchar(500) NOT NULL,
  `website_email` varchar(100) NOT NULL,
  `website_email_password` varchar(100) NOT NULL,
  `website_host_name` varchar(500) NOT NULL,
  `website_facebook` varchar(500) NOT NULL,
  `website_twitter` varchar(500) NOT NULL,
  `website_instagram` varchar(500) NOT NULL,
  `website_pinterest` varchar(500) NOT NULL,
  `website_linkedin` varchar(500) NOT NULL,
  `website_youtube` varchar(500) NOT NULL,
  `usd` double NOT NULL,
  `eur` double NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `store_key` varchar(100) NOT NULL,
  `api_user` varchar(100) NOT NULL,
  `api_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `website_URL`, `website_title`, `website_description`, `website_keywords`, `website_copyright`, `website_logo`, `website_email`, `website_email_password`, `website_host_name`, `website_facebook`, `website_twitter`, `website_instagram`, `website_pinterest`, `website_linkedin`, `website_youtube`, `usd`, `eur`, `client_id`, `store_key`, `api_user`, `api_password`) VALUES
(1, 'http://www.barisyazilim.net', 'BARIŞ YAZILIM | AYAKKABI', 'Türkiye&#039;nin en büyük ayakkabıcısı.', 'yazılım,ayakkabı', 'Barış Yazılım Tüm hakları saklıdır', 'logo.png', 'kurt-bar07@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', 18.12, 18.15, '156', '1264', '3Dkullanici', '3Dsifre');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shipping_companies`
--

CREATE TABLE `shipping_companies` (
  `shipping_company_id` int(11) NOT NULL,
  `shipping_company_logo` varchar(30) NOT NULL,
  `shipping_company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `shipping_companies`
--

INSERT INTO `shipping_companies` (`shipping_company_id`, `shipping_company_logo`, `shipping_company_name`) VALUES
(1, 'aras.png', 'Aras Kargo'),
(2, 'MNGKargo156x30.png', 'Mng Kargo'),
(3, 'Yurtiçi.png', 'Yurtiçi Kargo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `SSS_id` int(10) UNSIGNED NOT NULL,
  `SSS_question` varchar(2000) NOT NULL,
  `SSS_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`SSS_id`, `SSS_question`, `SSS_answer`) VALUES
(1, 'SSS 1. Soru', 'SSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru CevapSSS 1. Soru Cevap'),
(2, 'SSS 2. Soru', 'SSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. SoruSSS 2. Soru'),
(3, 'SSS 3. Soru', 'SSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. SoruSSS 3. Soru'),
(4, 'SSS 4. Soru', 'SSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. SoruSSS 4. Soru'),
(5, 'SSS 5. Soru', 'SSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. SoruSSS 5. Soru');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_name_surname` varchar(250) NOT NULL,
  `user_phone_number` varchar(20) NOT NULL,
  `user_gender` tinyint(3) UNSIGNED NOT NULL,
  `user_status` tinyint(3) UNSIGNED NOT NULL,
  `user_registration_date` int(10) UNSIGNED NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `user_activation_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_name_surname`, `user_phone_number`, `user_gender`, `user_status`, `user_registration_date`, `user_ip`, `user_activation_code`) VALUES
(1, 'kurt-bar07@hotmail.com', '03f05869450ea1b4d18c3f5191f29050', 'Barış KURT', '5324973873', 1, 1, 1635499705, '::1', '60057-43917-24600'),
(2, 'mekurt07@hotmail.com', '03f05869450ea1b4d18c3f5191f29050', 'Mehmet KURT', '5322036252', 1, 1, 1635499705, '::1', '61158-43955-23200');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Tablo için indeksler `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_user_id`);

--
-- Tablo için indeksler `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`bank_account_id`);

--
-- Tablo için indeksler `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Tablo için indeksler `contracts_and_texts`
--
ALTER TABLE `contracts_and_texts`
  ADD PRIMARY KEY (`contracts_and_texts_id`);

--
-- Tablo için indeksler `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`);

--
-- Tablo için indeksler `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Tablo için indeksler `payment_notifications`
--
ALTER TABLE `payment_notifications`
  ADD PRIMARY KEY (`payment_notification_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Tablo için indeksler `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`product_variant_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `shipping_companies`
--
ALTER TABLE `shipping_companies`
  ADD PRIMARY KEY (`shipping_company_id`);

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`SSS_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `bank_account_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `contracts_and_texts`
--
ALTER TABLE `contracts_and_texts`
  MODIFY `contracts_and_texts_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `payment_notifications`
--
ALTER TABLE `payment_notifications`
  MODIFY `payment_notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `product_variant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `shipping_companies`
--
ALTER TABLE `shipping_companies`
  MODIFY `shipping_company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `SSS_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
