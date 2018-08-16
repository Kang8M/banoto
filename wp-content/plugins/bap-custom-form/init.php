<?php
/*
Plugin Name: Bắp - Form
Description:
Version: 1
Author: trinhbap.vn
Author URI: trinhbap.vn
*/
// function to create the DB / Options / Defaults					
include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/Exception.php";
include "PHPMailer-master/src/OAuth.php";
include "PHPMailer-master/src/POP3.php";
include "PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function sendEmail($title, $content) {
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'trinhcntt93@gmail.com';
    $mail->Password = 'xcpgkrulswaiuaum';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('trinhcntt93@gmail.com', 'Trinh Bap');
    $mail->addAddress('trinhngocntt@gmail.com', 'Trinh Ngo');

    //Content
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body    = $content;

    $mail->send();
}

function bap_custom_form_install()
{

    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    $sql = "
    	CREATE TABLE `bap_chi_phi_banh_lan` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `ho_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `san_pham` varchar(300) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
		  `link` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `khu_vuc` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `dien_thoai` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (ID)
		) $charset_collate;

		CREATE TABLE `bap_dang_ky_lai_thu` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `ho_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `san_pham` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `link` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `hinh_thuc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `khu_vuc` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `dien_thoai` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (ID)
		) $charset_collate;

		CREATE TABLE `bap_uoc_tinh_tra_gop` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `ho_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `san_pham` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `link` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `hinh_thuc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `khu_vuc` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `dien_thoai` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (ID)
		) $charset_collate;

		CREATE TABLE `bap_yeu_cau_bao_gia` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `ho_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `san_pham` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `link` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `hinh_thuc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `khu_vuc` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `dien_thoai` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
		  `thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (ID)
		) $charset_collate;
    ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'bap_custom_form_install');


add_action('admin_menu', 'add_friends_modifymenu');
function add_friends_modifymenu()
{
    add_menu_page(
        'Thông Tin Đăng Ký',
        'Thông Tin Đăng Ký',
        'manage_options',
        'chi_phi_banh_lan',
        'chi_phi_banh_lan',
        'dashicons-phone'
    );

    add_submenu_page(
        'chi_phi_banh_lan',
        'Chi Phí Bánh Lăn', //page title
        'Chi Phí Bánh Lăn', //menu title
        'manage_options', //capabilities
        'chi_phi_banh_lan', //menu slug
        'chi_phi_banh_lan' //function
    );

    add_submenu_page(
        'chi_phi_banh_lan',
        'Đăng Ký Lái Thử', //page title
        'Đăng Ký Lái Thử', //menu title
        'manage_options', //capabilities
        'dang_ky_lai_thu', //menu slug
        'dang_ky_lai_thu' //function
    );

    add_submenu_page(
        'chi_phi_banh_lan',
        'Ước Tính Vay Ngân Hàng', //page title
        'Ước Tính Vay Ngân Hàng', //menu title
        'manage_options', //capabilities
        'uoc_tinh_vay_ngan_hang', //menu slug
        'uoc_tinh_vay_ngan_hang' //function
    );

    add_submenu_page(
        'chi_phi_banh_lan',
        'Yêu Cầu Báo Giá', //page title
        'Yêu Cầu Báo Giá', //menu title
        'manage_options', //capabilities
        'yeu_cau_bao_gia', //menu slug
        'yeu_cau_bao_gia' //function
    );
}

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once('chi_phi_banh_lan.php');
require_once('dang_ky_lai_thu.php');
require_once('uoc_tinh_vay_ngan_hang.php');
require_once('yeu_cau_bao_gia.php');

require_once('ajax/chi_phi_banh_lan.php');
require_once('ajax/dang_ky_lai_thu.php');
require_once('ajax/uoc_tinh_vay_ngan_hang.php');
require_once('ajax/yeu_cau_bao_gia.php');

