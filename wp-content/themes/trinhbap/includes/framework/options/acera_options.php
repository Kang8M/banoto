<?php
    $options = array(
        array("type" => "section","icon" => "acera-icon-home","title" => __( "Website", "trinhbap" ),"id" => "general","expanded" => "true"),
        array("section" => "general", "type" => "heading","title" => __( "Thông Tin Website", "trinhbap" ),"id" => "general-config"),
        array("section" => "general", "type" => "heading","title" => __( "Thông Tin Liên Hệ", "trinhbap" ),"id" => "contact-config"),
		array("section" => "general", "type" => "heading","title" => __( "Banner", "trinhbap" ),"id" => "banner-config"),
		array("section" => "general", "type" => "heading","title" => __( "Mạng Xã Hội", "trinhbap" ),"id" => "social-config"),
		array("section" => "general", "type" => "heading","title" => __( "Thông Tin Khuyến Mãi", "trinhbap" ),"id" => "promotion-config"),
        array("section" => "general", "type" => "heading","title" => __( "Thông Số Tính Toán", "trinhbap" ),"id" => "calculator-config"),

        //Bắt đầu Thông Tin Website
        array(
            "under_section" => "general-config",
            "type" => "image", //Required
            "name" => __("Logo","trinhbap"), //Required
            "id" => "general_logo", //Required
        ),
        array(
            "under_section" => "general-config",
            "type" => "image", //Required
            "name" => __("Favicon","trinhbap"), //Required
            "id" => "general_favicon", //Required
        ),
        array(
            "under_section" => "general-config", //Required
            "type" => "text", //Required
            "name" => __( "Tên Đại Lý", "trinhbap" ), //Required
            "id" => "general_company", //Required
        ),
		array(
            "under_section" => "general-config", //Required
            "type" => "textarea", //Required
            "name" => __( "Copyright Footer", "trinhbap" ), //Required
            "id" => "general_copyright", //Required
        ),
        array(
            "under_section" => "general-config", //Required
            "type" => "textarea", //Required
            "name" => __( "Giới Thiệu Cửa Hàng", "trinhbap" ), //Required
            "id" => "general_about", //Required
        ),
        //Kết Thúc Thông Tin Website

        //Bắt Đầu Thông Tin Liên Hệ
        array(
            "under_section" => "contact-config", //Required
            "type" => "text", //Required
            "name" => __( "Họ Tên", "trinhbap" ), //Required
            "id" => "contact_fullname", //Required
        ),
        array(
            "under_section" => "contact-config",
            "type" => "image", //Required
            "name" => __("Ảnh Đại Diện","trinhbap"), //Required
            "id" => "contact_avatar", //Required
        ),
        array(
            "under_section" => "contact-config",
            "type" => "image", //Required
            "name" => __("Ảnh Bìa","trinhbap"), //Required
            "id" => "contact_cover", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "text", //Required
            "name" => __( "Chức Danh", "trinhbap" ), //Required
            "id" => "contact_position", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "textarea", //Required
            "name" => __( "Giới Thiệu Bản Thân", "trinhbap" ), //Required
            "id" => "contact_about", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "text", //Required
            "name" => __( "Số Điện Thoại", "trinhbap" ), //Required
            "id" => "contact_phone", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "text", //Required
            "name" => __( "Email", "trinhbap" ), //Required
            "id" => "contact_email", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "text", //Required
            "name" => __( "Hotline", "trinhbap" ), //Required
            "id" => "contact_hotline", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "textarea", //Required
            "name" => __( "Địa Chỉ", "trinhbap" ), //Required
            "id" => "contact_address", //Required
        ),
        array(
            "under_section" => "contact-config", //Required
            "type" => "textarea", //Required
            "name" => __( "Giờ Làm Việc", "trinhbap" ), //Required
            "id" => "contact_giolamviec", //Required
        ),
        //Kết Thúc Thông Tin Liên Hệ

        //Bắt đầu mạng xã hội
        array(
            "under_section" => "social-config", //Required
            "type" => "text", //Required
            "name" => __( "Facebook URL", "trinhbap" ), //Required
            "display_checkbox_id" => "toggle_checkbox_id",
            "id" => "fb_url", //Required
        ),
        array(
            "under_section" => "social-config", //Required
            "type" => "text", //Required
            "name" => __( "Twitter URL", "trinhbap" ), //Required
            "display_checkbox_id" => "toggle_checkbox_id",
            "id" => "tw_url", //Required
        ),
        array(
            "under_section" => "social-config", //Required
            "type" => "text", //Required
            "name" => __( "Youtube URL", "trinhbap" ), //Required
            "id" => "youtube_url", //Required
        ),
        array(
            "under_section" => "social-config", //Required
            "type" => "text", //Required
            "name" => __( "LinkedIn URL", "trinhbap" ), //Required
            "id" => "in_url", //Required
        ),
        array(
            "under_section" => "social-config", //Required
            "type" => "text", //Required
            "name" => __( "Google+ URL", "trinhbap" ), //Required
            "id" => "google_url", //Required
        ),
		//Kết thúc mạng xã hội


        //Bắt đầu Banner - Slideshow
		array(
            "under_section" => "banner-config", //Required
            "type" => "image", //Required
            "name" => __("Ảnh Banner 1","trinhbap"), //Required
            "id" => "banner-1", //Required
        ),
		array(
            "under_section" => "banner-config", //Required
            "type" => "image", //Required
            "name" => __("Ảnh Banner 2","trinhbap"), //Required
            "id" => "banner-2", //Required
        ),
		array(
            "under_section" => "banner-config", //Required
            "type" => "image", //Required
            "name" => __("Ảnh Banner 3","trinhbap"), //Required
            "id" => "banner-3", //Required
        ),
		array(
            "under_section" => "banner-config", //Required
            "type" => "image", //Required
            "name" => __("Ảnh Banner 4","trinhbap"), //Required
            "id" => "banner-4", //Required
        ),
		array(
            "under_section" => "banner-config", //Required
            "type" => "image", //Required
            "name" => __("Ảnh Banner 5","trinhbap"), //Required
            "id" => "banner-5", //Required
        ),
        //Kết thúc Banner - Slideshow


        //Bắt đầu Thông Tin Khuyến mãi
        array(
            "under_section" => "promotion-config", //Required
            "type" => "textarea", //Required
            "name" => __( "Nội Dung Khuyến Mãi", "trinhbap" ), //Required
            "id" => "content_promotion", //Required
        ),
		//Kết thúc Thông Tin Khuyến mãi


        //Bắt đầu Thông số tính toán
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Thuế Trước Bạ Loại 1, 2 HN", "trinhbap" ), //Required
            "id" => "ThueTruocBaLoai12HN", //Required,
            "default" => 12
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Thuế Trước Bạ Loại 3", "trinhbap" ), //Required
            "id" => "ThueTruocBaLoai3", //Required
            "default" => 2
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Thuế Trước Bạ Loại 1, 2 Tỉnh", "trinhbap" ), //Required
            "id" => "ThueTruocBaLoai12Tinh", //Required
            "default" => 10
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Tiền Biển Loại 1, 2 HN", "trinhbap" ), //Required
            "id" => "TienBienLoai12HN", //Required
            "default" => 20000000
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Tiền Biển Loại 3", "trinhbap" ), //Required
            "id" => "TienBienLoai3", //Required
            "default" => 2000000
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Tiền Biển Loại 1, 2 Tỉnh", "trinhbap" ), //Required
            "id" => "TienBienLoai12Tinh", //Required
            "default" => 500000
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Hiểm Bắt Buộc Loại 1", "trinhbap" ), //Required
            "id" => "BaoHiemBatBuocLoai1", //Required
            "default" => 480700
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Hiểm Bắt Buộc Loại 2", "trinhbap" ), //Required
            "id" => "BaoHiemBatBuocLoai2", //Required
            "default" => 831600
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Hiểm Bắt Buộc Loại 3", "trinhbap" ), //Required
            "id" => "BaoHiemBatBuocLoai3", //Required
            "default" => 1026300
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Hiểm Thân Vỏ Loại 1, 2", "trinhbap" ), //Required
            "id" => "BaoHiemThanVoLoai12", //Required
            "default" => 2.015
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Hiểm Thân Vỏ Loại 3", "trinhbap" ), //Required
            "id" => "BaoHiemThanVoLoai3", //Required
            "default" => 1.65
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Trì Đường Bộ Loại 1, 2", "trinhbap" ), //Required
            "id" => "BaoTriDuongBoLoai12", //Required
            "default" => 1560000
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Bảo Trì Đường Bộ Loại 3", "trinhbap" ), //Required
            "id" => "BaoTriDuongBoLoai3", //Required
            "default" => 2160000
        ),
        array(
            "under_section" => "calculator-config", //Required
            "type" => "text", //Required
            "name" => __( "Phí Đăng Kiểm", "trinhbap" ), //Required
            "id" => "PhiDangKiem", //Required
            "default" => 340000
        ),
        //Kết thúc Thông số tính toán
    );
?>