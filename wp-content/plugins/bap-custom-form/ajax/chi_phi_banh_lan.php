<?php
add_action('wp_ajax_chi_phi_banh_lan', 'chi_phi_banh_lan_init');
add_action('wp_ajax_nopriv_chi_phi_banh_lan', 'chi_phi_banh_lan_init');
function chi_phi_banh_lan_init()
{
    $data = "NOT_OK";
    global $wpdb;
    if (isset($_POST['ho_ten'])) {
        $hoten = $_POST['ho_ten'];
        $sanpham = $_POST['san_pham'];
        $link = $_POST['link'];
        $khuvuc = $_POST['khu_vuc'];
        $dienthoai = $_POST['dien_thoai'];
        $email = $_POST['email'];
        if (!empty($hoten) && !empty($sanpham) && !empty($link) && !empty($khuvuc) && !empty($dienthoai) && !empty($email)) {
            $table = 'bap_chi_phi_banh_lan';
            $sql = sprintf("INSERT INTO $table (`ho_ten`, `san_pham`, `link`, `khu_vuc`, `dien_thoai`, `email`, `thoi_gian`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')", $hoten, $sanpham, $link, $khuvuc, $dienthoai, $email, date('Y-m-d H:m:s'));

            if ($wpdb->query($sql)) {
                $data = 'OK';

                $html = '';
                $html = $html . '<h3>Có dữ liệu đăng ký chi phí lăn bánh mới</h3>';
                $html = $html . '<table>';
                $html = $html . '   <tr>';
                $html = $html . '       <th>Họ Và Tên</th>';
                $html = $html . '       <td>' . $hoten . '</td>';
                $html = $html . '   </tr>';
                $html = $html . '   <tr>';
                $html = $html . '       <th>Sản Phẩm</th>';
                $html = $html . '       <td><a href="' . $link . '" target="_blank">' . $sanpham . '</a></td>';
                $html = $html . '   </tr>';
                $html = $html . '   <tr>';
                $html = $html . '       <th>Khu Vực</th>';
                $html = $html . '       <td>' . $khuvuc . '</td>';
                $html = $html . '   </tr>';
                $html = $html . '   <tr>';
                $html = $html . '       <th>Điện Thoại</th>';
                $html = $html . '       <td>' . $dienthoai . '</td>';
                $html = $html . '   </tr>';
                $html = $html . '   <tr>';
                $html = $html . '       <th>Email</th>';
                $html = $html . '       <td>' . $email . '</td>';
                $html = $html . '   </tr>';
                $html = $html . '   <tr>';
                $html = $html . '       <th>Thời Gian</th>';
                $html = $html . '       <td>' . date('H:m:s d/m/Y') . '</td>';
                $html = $html . '   </tr>';
                $html = $html . '</table>';

                sendEmail('Dang Ky: Chi Phi Lan Banh', $html);
            }
        }
    }

    wp_send_json_success($data);
    exit();
}