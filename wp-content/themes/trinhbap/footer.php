<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-3 footer-about-us">
                <h2 class="logo">
                    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                        <span class="sr-only"><?php echo get_option('general_company'); ?></span>
                        <img src="<?php echo get_option('general_logo'); ?>" alt="<?php echo get_option('general_company'); ?>" title="<?php echo get_option('general_company'); ?>"/>
                    </a>
                </h2>
                <div class="content">
                    <?php echo get_option('general_about'); ?>
                </div>
                <ul class="footer-social clearfix">
                    <li>
                        <a target="_blank" href="<?php echo get_option('fb_url'); ?>" title="Facebook: <?php echo get_option('general_company'); ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_option('tw_url'); ?>" title="Facebook: <?php echo get_option('general_company'); ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_option('google_url'); ?>" title="Facebook: <?php echo get_option('general_company'); ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_option('youtube_url'); ?>" title="Facebook: <?php echo get_option('general_company'); ?>"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 footer-menu">
                <h3><a href="#">Các dòng xe Chevrolet</a></h3>
                <ul>
                    <?php
                        query_posts(
                            array(
                                'post_type' => array('sanpham'),
                                'posts_per_page' => 5
                            )
                        );
                        if (have_posts()) {
                            while (have_posts()) : the_post();
                    ?>
                                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php
                            endwhile;
                        };
                    ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-2 footer-menu">
                <h3>Hỗ trợ - Tư vấn</h3>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer',
                        'container' => 'ul',
                        'menu_class' => 'bottom-links-agile',
                        'orderby' => 'menu_order',
                        'id' => 'menu-footer'
                    )
                );
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="footer-facebook">
                    <div class="fb-page" data-href="<?php echo get_option('fb_url'); ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo get_option('fb_url'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_option('fb_url'); ?>">Diễn Đàn Thuê Đồ Online</a></blockquote></div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <?php echo get_option('general_copyright'); ?>
        </div>
    </div>
</footer>
<a class="scroll-top" href="#"></a>
<div class="require-notice-price hidden-sm-up" data-toggle="modal" data-target="#modal-quotation-v2">
    Yêu cầu báo giá
    <a href="tel:<?php echo get_option('contact_hotline'); ?>">
        <i class="fa fa-phone"></i>Gọi ngay
    </a>
</div>
<div class="modal fade modal-utility" id="modal-subscribe">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Thông báo</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="d-overlay"></div>
<div class="modal fade modal-quotation-v2 modal-v2" id="modal-quotation-v2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">YÊU CẦU BÁO GIÁ</h4>
            </div>
            <p style="font-size: 0.875rem;  margin-bottom: 10px; padding: 10px 15px 0px 15px;">
                Chào anh chị, Để nhận được "BÁO GIÁ ĐẶC BIỆT" từ <?php echo get_option('contact_fullname'); ?>
                , anh chị hãy liên hệ ngay qua
                Hotline:
                <strong>
                    <a href="tel:<?php echo get_option('contact_hotline'); ?>" style="color: #f00; font-size: 1rem;">
                        <?php echo get_option('contact_hotline'); ?>
                    </a>
                </strong>
                hoặc điền form báo giá bên dưới. Xin cảm ơn!
            </p>
            <form action="<?php echo bloginfo('url'); ?>#wpcf7-f171-o1" method="post" role="form" id="frm-contact-v2">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="171">
                    <input type="hidden" name="_wpcf7_version" value="5.0.3">
                    <input type="hidden" name="_wpcf7_locale" value="vi">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f171-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Ho-Va-Ten" data-val="true" id="FullName" data-val-required="Bạn vui lòng nhập họ tên đầy đủ" id="FullName" placeholder="Họ và tên" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper material-select">
                            <input name="Description" type="hidden" value=""/>
                            <select name="San-Pham" class="material-select initialized" id="pop_car">
                                <option></option>
                                <option value="Chevrolet Spark Duo">Chevrolet Spark Duo</option>
                                <option value="Spark Van 2018">Spark Van 2018</option>
                            </select>
                        </div>
                        <label for="pop_car">Chọn dòng xe</label>
                    </div>
                    <div class="input-field col s6">
                        <div class="radio-group">
                            <p>Hình thức thanh toán</p>
                            <p>
                                <input name="Hinh-Thuc-Thanh-Toan" id="pay1" class="with-gap" value="Trả góp" type="radio" checked="">
                                <label for="pay1">Trả góp</label>
                                <input name="Hinh-Thuc-Thanh-Toan" id="pop_payall" class="with-gap" value="Trả hết" type="radio">
                                <label for="pop_payall">Trả hết</label>
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper material-select">
                            <select name="Khu-Vuc" class="material-select initialized" style="width: 100%;" id="drive_address">
                                <option></option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <label for="drive_address">Chọn khu vực</label>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập số điện thoại" name="So-Dien-Thoai" placeholder="Điện thoại" type="text" value="" id="Phone"/>
                        <span>
                            <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                        </span>
                    </div>
                    <div class="input-field col s12">
                        <input id="Email" data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$" data-val-required="Bạn vui lòng nhập email" name="Email" placeholder="Email" type="text" value=""/>
                        <span>
                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                        </span>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <a href="javascript:void(0)" onclick="return SendContact()" class="btn btn-primary">Gửi yêu cầu</a>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="contact-name" value="<?php echo get_option('contact_fullname'); ?>"/>
<script type="text/javascript">
    $('#modal-quotation-v2 #Phone').keydown(function (event) {
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
            return;
        } else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });

    function SendContact() {
        var payment = "";
        if ($('#modal-quotation-v2 #pop_payany').is(':checked')) {
            payment = "Trả góp";
        }
        if ($('#modal-quotation-v2 #pop_payall').is(':checked')) {
            payment = "Trả hết";
        }
        $("#modal-quotation-v2 #Description").val("Cần báo giá xe : " + $("#modal-quotation-v2 #pop_car").val() + ". Hình thức: " + payment + ". Tỉnh thành: " + $("#modal-quotation-v2 #drive_address").val());

        var result = $('#frm-contact-v2').valid();
        if (result) {
            $('#frm-contact-v2').submit();
            SendEmailContactSuccess(1);
        }
        return false;
    }

    function SendEmailContactSuccess(data) {
        if (data == 1) {
            alert("Cảm ơn Anh/Chị đã gửi yêu cầu báo giá, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
            $("#modal-quotation-v2 #FullName").val("");
            $("#modal-quotation-v2 #Address").val("");
            $("#modal-quotation-v2 #Description").val("");
            $("#modal-quotation-v2 #Email").val("");
            $("#modal-quotation-v2 #Phone").val("");
            $("#modal-quotation-v2 .modal-close").click();
        }
    }
</script>
<div class="modal fade modal-bank-v2 modal-v2" id="modal-bank-v2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">ƯỚC TÍNH TRẢ GÓP</h4>
            </div>
            <p style="font-size: 0.875rem;  margin-bottom: 10px; padding: 10px 15px 0px 15px;">
                Chào anh chị, Để nhận được "MỨC TRẢ GÓP TỐT NHẤT VÀ LÃI SUẤT THẤP" khi mua xe, hãy liên hệ ngay <?php echo get_option('contact_fullname'); ?>
                qua số:
                <strong>
                    <a href="tel:<?php echo get_option('contact_hotline'); ?>" style="color: #f00; font-size: 1rem;"><?php echo get_option('contact_hotline'); ?></a>
                </strong>
                hoặc điền form dưới đây.Xin cảm ơn!
            </p>
            <form method="post" role="form" id="frm-bank">
                <div class="row">
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập họ tên đầy đủ" id="FullName" name="FullName" placeholder="Họ và tên" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper material-select">
                            <input id="Description" name="Description" type="hidden" value=""/>
                            <select id="pop_car" name="car" class="material-select initialized">
                                <option></option>
                                <option value="Chevrolet Spark Duo">Chevrolet Spark Duo</option>
                                <option value="Spark Van 2018">Spark Van 2018</option>
                            </select>
                        </div>
                        <label for="pop_car">Chọn dòng xe</label>
                    </div>
                    <div class="input-field col s6">
                        <div class="radio-group">
                            <p>Hình thức thanh toán</p>
                            <p>
                                <input class="with-gap" name="pay" value="Trả góp" type="radio" id="pop_payany" checked="">
                                <label for="pop_payany">Trả góp</label>
                                <input class="with-gap" name="pay" value="Trả hết" type="radio" id="pop_payall">
                                <label for="pop_payall">Trả hết</label>
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper material-select">
                            <select id="drive_address" name="address" class="material-select initialized" style="width: 100%;">
                                <option></option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <label for="drive_address">Chọn khu vực</label>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập số điện thoại" id="Phone" name="Phone" placeholder="Điện thoại" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$" data-val-required="Bạn vui lòng nhập email" id="Email" name="Email" placeholder="Email" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <a href="javascript:void(0)" onclick="return SendContactBank()" class="btn btn-primary">Gửi yêu cầu</a>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="contact-name" value="<?php echo get_option('contact_fullname'); ?>"/>
<script type="text/javascript">
    $('#modal-bank-v2 #Phone').keydown(function (event) {
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
            return;
        } else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });

    function SendContactBank() {
        var payment = "";
        if ($('#modal-bank-v2 #pop_payany').is(':checked')) {
            payment = "Trả góp";
        }
        if ($('#modal-bank-v2 #pop_payall').is(':checked')) {
            payment = "Trả hết";
        }
        $("#modal-bank-v2 #Description").val("Cần báo giá ước tính trả góp : " + $("#modal-bank-v2 #pop_car").val() + ". Hình thức: " + payment + ". Tỉnh thành: " + $("#modal-bank-v2 #drive_address").val());

        var result = $('#frm-bank').valid();
        if (result) {
            var obj = {
                FullName: $('#modal-bank-v2 #FullName').val(),
                Address: $('#modal-bank-v2 #Address').val(),
                Description: $('#modal-bank-v2 #Description').val(),
                Email: $('#modal-bank-v2 #Email').val(),
                Phone: $('#modal-bank-v2 #Phone').val(),
                Type: 1
            };
            $.ajax({
                url: '/Desktop/Home/SendContact',
                type: 'POST',
                data: obj,
                success: function (data) {
                    SendEmailContactSuccess(data);
                },
                beforeSend: function () {
                    ShowLoading();
                },
                complete: function () {
                    HideLoading();
                }
            });
            return true;
        }
        return false;
    }

    function SendEmailContactSuccess(data) {
        if (data == 1) {
            alert("Cảm ơn Anh/Chị đã gửi yêu cầu ước tính trả góp, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
            $("#modal-bank-v2 #FullName").val("");
            $("#modal-bank-v2 #Address").val("");
            $("#modal-bank-v2 #Description").val("");
            $("#modal-bank-v2 #Email").val("");
            $("#modal-bank-v2 #Phone").val("");
            $("#modal-bank-v2 .modal-close").click();
        }
    }
</script>


<div class="modal fade modal-cost-v2 modal-v2" id="modal-cost-v2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">CHI PHÍ LĂN BÁNH</h4>
            </div>
            <p style="font-size: 0.875rem;  margin-bottom: 10px; padding: 10px 15px 0px 15px;">
                Chào anh chị, Để nhận được chi phí lăn bánh xe Chevrolet MIỄN PHÍ từ <?php echo get_option('contact_fullname'); ?>
                - Chevrolet Thăng Long, hãy liên hệ Ngay <?php echo get_option('contact_fullname'); ?>
                qua số:
                <strong>
                    <a href="tel:<?php echo get_option('contact_hotline'); ?>" style="color: #f00; font-size: 1rem;"><?php echo get_option('contact_hotline'); ?></a>
                </strong>
                hoặc điền form dưới đây. Xin cảm ơn!
            </p>
            <form method="post" role="form" id="frm-driver-v2">
                <div class="row">
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập họ tên đầy đủ" id="FullName" name="FullName" placeholder="Họ và tên" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper material-select">
                            <input id="Description" name="Description" type="hidden" value=""/>
                            <select id="pop_car" name="car" class="material-select initialized" style="width: 100%;">
                                <option></option>
                                <option value="Chevrolet Spark Duo">Chevrolet Spark Duo</option>
                                <option value="Spark Van 2018">Spark Van 2018</option>
                            </select>
                        </div>
                        <label for="pop_car">Chọn dòng xe</label>
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper material-select">
                            <select id="drive_address" name="address" class="material-select initialized"style="width: 100%;">
                                <option></option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <label for="drive_address">Chọn khu vực</label>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập số điện thoại" id="Phone" name="Phone" placeholder="Điện thoại" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$" data-val-required="Bạn vui lòng nhập email" id="Email" name="Email" placeholder="Email" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <a href="javascript:void(0)" onclick="return SendContactDriver()" class="btn btn-primary">Gửi yêu cầu</a>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="contact-name" value="<?php echo get_option('contact_fullname'); ?>"/>
<script type="text/javascript">
    $('#modal-cost-v2 #Phone').keydown(function (event) {
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
            return;
        } else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });

    function SendContactDriver() {
        $("#modal-cost-v2 #Description").val("Cần gửi chi phí lăn bánh cho xe : " + $("#modal-cost-v2 #pop_car").val() + ". Tỉnh thành: " + $("#modal-cost-v2 #drive_address").val());
        var result = $('#frm-driver-v2').valid();
        if (result) {
            var obj = {
                FullName: $('#modal-cost-v2 #FullName').val(),
                Address: $('#modal-cost-v2 #Address').val(),
                Description: $('#modal-cost-v2 #Description').val(),
                Email: $('#modal-cost-v2 #Email').val(),
                Phone: $('#modal-cost-v2 #Phone').val(),
                Type: 1
            };
            $.ajax({
                url: '/Desktop/Home/SendContact',
                type: 'POST',
                data: obj,
                success: function (data) {
                    SendEmailContactSuccess(data);
                },
                beforeSend: function () {
                    ShowLoading();
                },
                complete: function () {
                    HideLoading();
                }
            });
            return true;
        }
        return false;
    }

    function SendEmailContactSuccess(data) {
        if (data == 1) {
            alert("Cảm ơn Anh/Chị đã gửi yêu cầu lái xe thử, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
            $("#modal-cost-v2 #FullName").val("");
            $("#modal-cost-v2 #Address").val("");
            $("#modal-cost-v2 #Description").val("");
            $("#modal-cost-v2 #Email").val("");
            $("#modal-cost-v2 #Phone").val("");
            $("#modal-cost-v2 .modal-close").click();
        }
    }
</script>

<div class="modal fade modal-test-drive-v2 modal-v2" id="modal-test-drive-v2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">ĐĂNG KÝ LÁI THỬ</h4>
            </div>
            <p style="font-size: 0.875rem; margin-bottom: 10px; padding: 10px 15px 0px 15px;">
                Chào anh chị, Để trải nghiệm xe Chevrolet MIỄN PHÍ từ <?php echo get_option('contact_fullname'); ?>
                - Chevrolet Thăng Long, hãy liên hệ Ngay <?php echo get_option('contact_fullname'); ?>
                qua số:
                <strong>
                    <a href="tel:<?php echo get_option('contact_hotline'); ?>" style="color: #f00; font-size: 1rem;"><?php echo get_option('contact_hotline'); ?></a>
                </strong>
                hoặc điền form dưới đây. Xin cảm ơn!
            </p>
            <form method="post" role="form" id="frm-driver-v2">
                <div class="row">
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập họ tên đầy đủ" id="FullName" name="FullName" placeholder="Họ và tên" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper material-select">
                            <input id="Description" name="Description" type="hidden" value=""/>
                            <select id="pop_car" name="car" class="material-select initialized">
                                <option></option>
                                <option value="Chevrolet Spark Duo">Chevrolet Spark Duo</option>
                                <option value="Spark Van 2018">Spark Van 2018</option>
                            </select>
                        </div>
                        <label for="pop_car">Chọn dòng xe</label>
                    </div>
                    <div class="input-field col s6">
                        <div class="radio-group">
                            <p>Hình thức thanh toán</p>
                            <p>
                                <input class="with-gap" name="pay" value="Trả góp" type="radio" id="pop_payany" checked="">
                                <label for="pop_payany">Trả góp</label>
                                <input class="with-gap" name="pay" value="Trả hết" type="radio" id="pop_payall">
                                <label for="pop_payall">Trả hết</label>
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper material-select">
                            <select id="drive_address" name="address" class="material-select initialized" style="width: 100%;">
                                <option></option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <label for="drive_address">Chọn khu vực</label>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-required="Bạn vui lòng nhập số điện thoại" id="Phone" name="Phone" placeholder="Điện thoại" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-field col s12">
                        <input data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$" data-val-required="Bạn vui lòng nhập email" id="Email" name="Email" placeholder="Email" type="text" value=""/>
                        <span><span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <a href="javascript:void(0)" onclick="return SendContactDriver()" class="btn btn-primary">Gửi yêu cầu</a>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="contact-name" value="<?php echo get_option('contact_fullname'); ?>"/>
<script type="text/javascript">
    $('#modal-test-drive-v2 #Phone').keydown(function (event) {
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
            return;
        } else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });
    function SendContactDriver() {
        $("#modal-test-drive-v2 #Description").val("Cần lái thử xe : " + $("#modal-test-drive-v2 #pop_car").val() + ". Tỉnh thành: " + $("#modal-test-drive-v2 #drive_address").val());

        var result = $('#frm-driver-v2').valid();
        if (result) {
            var obj = {
                FullName: $('#modal-test-drive-v2 #FullName').val(),
                Address: $('#modal-test-drive-v2 #Address').val(),
                Description: $('#modal-test-drive-v2 #Description').val(),
                Email: $('#modal-test-drive-v2 #Email').val(),
                Phone: $('#modal-test-drive-v2 #Phone').val(),
                Type: 1
            };
            $.ajax({
                url: '/Desktop/Home/SendContact',
                type: 'POST',
                data: obj,
                success: function (data) {
                    SendEmailContactSuccess(data);
                },
                beforeSend: function () {
                    ShowLoading();
                },
                complete: function () {
                    HideLoading();
                }
            });
            return true;
        }
        return false;
    }
    function SendEmailContactSuccess(data) {
        if (data == 1) {
            alert("Cảm ơn Anh/Chị đã gửi yêu cầu lái xe thử, " + $('#contact-name').val() + " sẽ liên hệ lại trong thời gian sớm nhất!");
            $("#modal-test-drive-v2 #FullName").val("");
            $("#modal-test-drive-v2 #Address").val("");
            $("#modal-test-drive-v2 #Description").val("");
            $("#modal-test-drive-v2 #Email").val("");
            $("#modal-test-drive-v2 #Phone").val("");
            $("#modal-test-drive-v2 .modal-close").click();
        }
    }
</script>
<div class="modal fade modal-utility" id="modal-feng-shui">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Tư vấn chọn màu xe theo phong thủy</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="GET">
                    <div class="row form-group">
                        <label class="col-md-3 form-control-label">Chọn năm sinh</label>
                        <div class="col-md-9">
                            <select class="c-select auto">
                                <option value="">Chọn</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>

                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 form-control-label"></label>
                        <div class="col-md-9">
                            <button class="btn btn-primary">Tiếp tục</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="ThueTruocBaLoai12HN" value="<?php echo get_option('ThueTruocBaLoai12HN'); ?>"/>
<input type="hidden" id="ThueTruocBaLoai3" value="<?php echo get_option('ThueTruocBaLoai3'); ?>"/>
<input type="hidden" id="ThueTruocBaLoai12Tinh" value="<?php echo get_option('ThueTruocBaLoai12Tinh'); ?>"/>
<input type="hidden" id="TienBienLoai12HN" value="<?php echo get_option('TienBienLoai12HN'); ?>"/>
<input type="hidden" id="TienBienLoai3" value="<?php echo get_option('TienBienLoai3'); ?>"/>
<input type="hidden" id="TienBienLoai12Tinh" value="<?php echo get_option('TienBienLoai12Tinh'); ?>"/>
<input type="hidden" id="BaoHiemBatBuocLoai1" value="<?php echo get_option('BaoHiemBatBuocLoai1'); ?>"/>
<input type="hidden" id="BaoHiemBatBuocLoai2" value="<?php echo get_option('BaoHiemBatBuocLoai2'); ?>"/>
<input type="hidden" id="BaoHiemBatBuocLoai3" value="<?php echo get_option('BaoHiemBatBuocLoai3'); ?>"/>
<input type="hidden" id="BaoHiemThanVoLoai12" value="<?php echo get_option('BaoHiemThanVoLoai12'); ?>"/>
<input type="hidden" id="BaoHiemThanVoLoai3" value="<?php echo get_option('BaoHiemThanVoLoai3'); ?>"/>
<input type="hidden" id="BaoTriDuongBoLoai12" value="<?php echo get_option('BaoTriDuongBoLoai12'); ?>"/>
<input type="hidden" id="BaoTriDuongBoLoai3" value="<?php echo get_option('BaoTriDuongBoLoai3'); ?>"/>
<input type="hidden" id="PhiDangKiem" value="<?php echo get_option('PhiDangKiem'); ?>"/>
<script type="text/javascript">
    jQuery(function ($) {
        var sum = 0;
        $('#modal-cost .auto').on('change', function () {
            $('#modal-cost .price').val(formatPrice($(this).find('option:selected').data('price')));
        });
        $('#modal-loan .loan').on('change', function () {
            $('#modal-loan .loan').val(formatPrice($(this).val()));
        });
        $('#modal-cost .btn').on('click', function (e) {
            e.preventDefault();

            var price = $('#modal-cost .price').val().replace(/\./g, "");

            var auto = $('#modal-cost .auto').val();
            var place = $('#modal-cost .place').val();
            var ttb = 0;		// Thuế trước bạ
            var tb = 0; 		// Tiền biển
            var bhbb = 0; 		// Bảo hiểm bắt buộc
            var bhtv = 0; 		// Bảo hiểm thân vỏ
            var pbtdb = 0; 		// Phí bảo trì đường bộ
            var pdk = parseInt($('#PhiDangKiem').val());	// Phí đăng kiểm
            var $result = '<table class="table">';

            if (auto == 1 || auto == 2) {
                if (place == 1) {
                    ttb = (parseInt($('#ThueTruocBaLoai12HN').val()) * price) / 100;
                } else if (place == 2) {
                    ttb = (parseInt($('#ThueTruocBaLoai12Tinh').val()) * price) / 100;
                }
            } else if (auto == 3) {
                ttb = (parseInt($('#ThueTruocBaLoai3').val()) * price) / 100;
            }

            if (auto == 1 || auto == 2) {
                if (place == 1) {
                    tb = parseInt($('#TienBienLoai12HN').val());
                } else if (place == 2) {
                    tb = parseInt($('#TienBienLoai12Tinh').val());
                }
            } else if (auto == 3) {
                tb = parseInt($('#TienBienLoai3').val());
            }

            if (auto == 1) {
                bhbb = parseInt($('#BaoHiemBatBuocLoai1').val());
            } else if (auto == 2) {
                bhbb = parseInt($('#BaoHiemBatBuocLoai2').val());
            } else if (auto == 3) {
                bhbb = parseInt($('#BaoHiemBatBuocLoai3').val());
            }

            if (auto == 1 || auto == 2) {
                bhtv = (parseFloat($('#BaoHiemThanVoLoai12').val()) * price) / 100;
            } else if (auto == 3) {
                bhtv = (parseFloat($('#BaoHiemThanVoLoai3').val()) * price) / 100;
            }

            if (auto == 1 || auto == 2) {
                pbtdb = parseInt($('#BaoTriDuongBoLoai12').val());
            } else if (auto == 3) {
                pbtdb = parseInt($('#BaoTriDuongBoLoai3').val());
            }

            sum = ttb + tb + bhbb + bhtv + pbtdb + pdk;

            $result += '<tr><td><label class="c-input c-checkbox"><input type="checkbox" value="' + ttb + '" checked><span class="c-indicator"></span></label>Thuế trước bạ</td><th>' + formatPrice(Math.ceil(ttb)) + '</th></tr>';
            $result += '<tr><td><label class="c-input c-checkbox"><input type="checkbox" value="' + tb + '" checked><span class="c-indicator"></span></label>Tiền biển</td><th>' + formatPrice(Math.ceil(tb)) + '</th></tr>';
            $result += '<tr><td><label class="c-input c-checkbox"><input type="checkbox" value="' + bhbb + '" checked><span class="c-indicator"></span></label>Bảo hiểm bắt buộc</td><th>' + formatPrice(Math.ceil(bhbb)) + '</th></tr>';
            $result += '<tr><td><label class="c-input c-checkbox"><input type="checkbox" value="' + bhtv + '" checked><span class="c-indicator"></span></label>Bảo hiểm thân vỏ</td><th>' + formatPrice(Math.ceil(bhtv)) + '</th></tr>';
            $result += '<tr><td><label class="c-input c-checkbox"><input type="checkbox" value="' + pbtdb + '" checked><span class="c-indicator"></span></label>Phí bảo trì đường bộ</td><th>' + formatPrice(Math.ceil(pbtdb)) + '</th></tr>';
            $result += '<tr><td><label class="c-input c-checkbox"><input type="checkbox" value="' + pdk + '" checked><span class="c-indicator"></span></label>Phí đăng kiểm</td><th>' + formatPrice(Math.ceil(pdk)) + '</th></tr>';
            $result += '<tr><td>Tổng cộng</td><th class="total">' + formatPrice(Math.ceil(sum)) + ' VNĐ</th></tr>';
            $result += '</table>';

            $('#notice-cost').removeClass('hidden-xs-up').html($result);
        });
        $('body').on('click', '#modal-cost input', function () {
            if ($(this).is(':checked')) {
                sum += parseInt($(this).val());
                $('#modal-cost .total').html(formatPrice(Math.ceil(sum)) + ' VNĐ');
            } else {
                sum -= parseInt($(this).val());
                $('#modal-cost .total').html(formatPrice(Math.ceil(sum)) + ' VNĐ');
            }
        });

        $.ajax({
            url: '/Desktop/Home/GetListProduct',
            type: 'GET',
            success: function (data) {
                $('#modal-cost .auto').html(data);
            }
        });
    });
</script>
<script type="text/javascript">
    jQuery(function ($) {
        $('#modal-loan .btn').on('click', function (e) {
            e.preventDefault();
            var loan = $('#modal-loan .loan').val().replace(/\./g, "");
            var time = $('#modal-loan .time').val();
            var rent = $('#modal-loan .rent').val();
            var tgcl = loan;
            var tght = 0;
            var tlht = 0;
            var tglht = 0;
            var sum1 = 0;
            var sum2 = 0;
            var sum3 = 0;
            var $result = '<table class="table"><tr><th>Tháng</th><th>Dư nợ</th><th>Vốn phải trả</th><th>Lãi phải trả</th><th>Vốn và lãi</th></tr>';
            $result += '<tr><td>0</td><td>' + formatPrice(tgcl) + '</td><td>0</td><td>0</td><td>0</td></tr>';
            for (var i = 1; i <= time; i++) {
                tght = tgcl / (time - i + 1);
                tlht = (tgcl * rent) / 100;
                tglht = tght + tlht;
                tgcl = tgcl - tght;
                sum1 += tght;
                sum2 += tlht;
                sum3 += tglht;
                $result += '<tr><td>' + i + '</td><td>' + formatPrice(Math.ceil(tgcl)) + '</td><td>' + formatPrice(Math.ceil(tght)) + '</td><td>' + formatPrice(Math.ceil(tlht)) + '</td><td>' + formatPrice(Math.ceil(tglht)) + '</td></tr>';
            }

            $result += '<tr><th>Tổng</th><th></th><th>' + formatPrice(Math.ceil(loan)) + ' VNĐ</th><th>' + formatPrice(Math.ceil(sum2)) + ' VNĐ</th><th>' + formatPrice(Math.ceil(sum3)) + ' VNĐ</th></tr>';
            $result += '</table>';
            $('#notice-loan').removeClass('hidden-xs-up').html($result);
        });
    });
</script>
<link href="<?php echo get_template_directory_uri(); ?>/css/stylev2.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/iconfont/material-icons.css" rel="stylesheet"/>
<script src="<?php echo get_template_directory_uri(); ?>/iconfont/materialize.js"></script>
</body>
</html>