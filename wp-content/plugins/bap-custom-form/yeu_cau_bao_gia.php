<?php
    function yeu_cau_bao_gia() {
        global $wpdb;
        $table_name = "bap_yeu_cau_bao_gia";
        $where = ' 1 = 1 ';
        $limit = 20;
        if(isset($_GET['limit']) && (int)$_GET['limit'] > 0){
            $limit = (int)$_GET['limit'];
        }
        $page = 1;
        if(isset($_GET['page-load']) && $_GET['page-load'] > 0){
            $page = (int)$_GET['page-load'];
        }
        $offset = ($page -1) * $limit;

        $rows = $wpdb->get_results("SELECT * FROM $table_name WHERE $where ORDER BY `id` desc LIMIT $offset, $limit");
        $countRows = $wpdb->get_var("SELECT count(`id`) FROM $table_name WHERE $where");
?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/bap-custom-form/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2 class="titel-friends" style="float: left; width: calc(100% -  100px);"><?php echo __('Đăng Ký: Yêu Cầu Báo Giá'); ?></h2>
        <div class="box-filter-friends" style="float: right; width: 100px; border: none; margin-top: 5px;">
            <form id="form-filter">
                <input type="hidden" name="page" value="yeu_cau_bao_gia">
                <div class="box-show-record">
                    <label class="label-show"><?php echo __('Show: '); ?></label>
                    <select class="show-record" name="limit">
                        <option <?php if(isset($_GET['limit']) && (int)$_GET['limit'] == 20): echo 'selected'; endif; ?> value="20">20</option>
                        <option <?php if(isset($_GET['limit']) && (int)$_GET['limit'] == 30): echo 'selected'; endif; ?> value="30">30</option>
                        <option <?php if(isset($_GET['limit']) && (int)$_GET['limit'] == 40): echo 'selected'; endif; ?> value="40">40</option>
                        <option <?php if(isset($_GET['limit']) && (int)$_GET['limit'] == 50): echo 'selected'; endif; ?> value="50">50</option>
                        <option <?php if(isset($_GET['limit']) && (int)$_GET['limit'] == 100): echo 'selected'; endif; ?> value="100">100</option>
                    </select>
                </div>                
            </form>                        
        </div>
        <div class="box-list-friends">
            <div id="table-friends">
                <table border="1" id="dvData">
                    <tr class="tr-title">
                        <th width="30"><?php echo __('ID'); ?></th>
                        <th width="100"><?php echo __('Họ Và Tên'); ?></th>
                        <th width="100"><?php echo __('Sản Phẩm'); ?></th>
                        <th width="100"><?php echo __('Hình Thức'); ?></th>
                        <th width="100"><?php echo __('Khu Vực'); ?></th>
                        <th width="100"><?php echo __('Điện Thoại'); ?></th>
                        <th width="100"><?php echo __('Email'); ?></th>
                        <th width="100"><?php echo __('Ngày Gửi'); ?></th>
                    </tr>
                    <?php $i = 0; ?>
                    <?php if(count($rows) >0 ) : ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->ho_ten; ?></td>
                                <td><a href="<?php echo $row->link; ?>" title="<?php echo $row->san_pham; ?>" target="_blank"><?php echo $row->san_pham; ?></a></td>
                                <td><?php echo $row->hinh_thuc; ?></td>
                                <td><?php echo $row->khu_vuc; ?></td>
                                <td><?php echo $row->dien_thoai; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->thoi_gian; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr class="data-null">
                            <td colspan="8"><?php echo __('Chưa có dữ liệu nào!'); ?></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>    
            <?php 
                $adjacents = "2";                
                 
                $prev = $page - 1;
                $next = $page + 1;
                $lastpage = ceil($countRows/$limit);
                $lpm1 = $lastpage - 1;   
                $pagination = "";
                if($lastpage > 1){   
                    $pagination .= "<div class='pagination'>";
                    if ($page > 1)
                        $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$prev."'>" . __('&laquo; Previous&nbsp;&nbsp;') . "</a>";
                    else
                        $pagination.= "<span class='disabled'>&laquo; Previous&nbsp;&nbsp;</span>";   
                    if ($lastpage < 7 + ($adjacents * 2))
                    {   
                        for ($counter = 1; $counter <= $lastpage; $counter++)
                        {
                            if ($counter == $page)
                                $pagination.= "<span class='current'>$counter</span>";
                            else
                                $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$counter."'>$counter</a>";     
             
                        }
                    }   
             
                    elseif($lastpage > 5 + ($adjacents * 2))
                    {
                        if($page < 1 + ($adjacents * 2))
                        {
                            for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                            {
                                if($counter == $page)
                                    $pagination.= "<span class='current'>$counter</span>";
                                else
                                    $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$counter."'>$counter</a>";     
                            }
                            $pagination.= "...";
                            $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$lpm1."'>$lpm1</a>";
                            $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$lastpage."'>$lastpage</a>";   
             
                       }
                       elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                       {
                           $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=1'>1</a>";
                           $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=2'>2</a>";
                           $pagination.= "...";
                           for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                           {
                               if($counter == $page)
                                   $pagination.= "<span class='current'>$counter</span>";
                               else
                                   $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$counter."'>$counter</a>";     
                           }
                           $pagination.= "..";
                           $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$lpm1."'>$lpm1</a>";
                           $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$lastpage."'>$lastpage</a>";   
                       }
                       else
                       {
                           $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=1'>1</a>";
                           $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=2'>2</a>";
                           $pagination.= "..";
                           for($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                           {
                               if($counter == $page)
                                    $pagination.= "<span class='current'>$counter</span>";
                               else
                                    $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$counter."'>$counter</a>";     
                           }
                       }
                    }
                    if($page < $counter - 1)
                        $pagination.= "<a href='admin.php?page=yeu_cau_bao_gia&limit=".$limit."&page-load=".$next."'>Next &raquo;</a>";
                    else
                        $pagination.= "<span class='disabled'>" . __('Next &raquo;') . "</span>";
             
                    $pagination.= "</div>";       
                }
                echo $pagination;
            ?>
        </div>    
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('.show-record').change(function(){
                $('#form-filter').submit();
            });
        });
    </script>
<?php        
    }