<div class="wrapper-sticky" style="display: block; height: 731px; width: 25%; margin: auto; position: relative; float: left; left: auto; right: auto; top: auto; bottom: auto; vertical-align: top;">
    <div class="hidden-sm-down col-md-4 col-xl-3 sidebar" style="width: 285px; top: 0px; bottom: auto; left: 0px; right: auto; position: absolute;">
        <div class="section-consult section-consult-aside">
            <div class="consult">
                <div class="consult-media">
                    <img src="<?php echo get_option('contact_avatar'); ?>" alt="<?php echo get_option('contact_fullname'); ?>" title="<?php echo get_option('contact_fullname'); ?>"/>
                </div>
                <div class="consult-info">
                    <h6 class="consult-name" style="font-size: 0.8rem; text-align: center;"><?php echo get_option('contact_position'); ?></h6>
                    <h6 class="consult-name" style="font-size: 1.4rem;"><?php echo get_option('contact_fullname'); ?></h6>
                    <div class="consult-description">
                        <a class="consult-phone" href="tel:<?php echo get_option('contact_phone'); ?>"><i class="fa fa-phone"></i><?php echo get_option('contact_phone'); ?></a><br>
                        <a class="consult-email" href="mailto:<?php echo get_option('contact_email'); ?>"><i class="fa fa-envelope"></i><?php echo get_option('contact_email'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-utility section-utility-aside">
            <div class="utility clearfix quotation" data-toggle="modal" data-target="#modal-quotation-v2">
                <span class="icon"><i class="fa fa-tag"></i></span>
                <span class="text">Yêu cầu báo giá</span>
            </div>
            <div class="utility clearfix bank" data-toggle="modal" data-target="#modal-bank-v2">
                <span class="icon"><i class="fa fa-bank"></i></span>
                <span class="text">Ước tính vay ngân hàng</span>
            </div>
            <div class="utility clearfix cost" data-toggle="modal" data-target="#modal-cost-v2">
                <span class="icon"><i class="fa fa-dollar"></i></span>
                <span class="text">Chi phí lăn bánh</span>
            </div>
            <div class="utility clearfix test" data-toggle="modal" data-target="#modal-test-drive-v2">
                <span class="icon"><i class="fa fa-road"></i></span>
                <span class="text">Đăng ký lái thử</span>
            </div>
        </div>
    </div>
</div>