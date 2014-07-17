<?php
/**
 * Project: pcshop.
 * File: sanphamkhuyenmaiModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 13:20 - 04/03/2014
 * Website: www.xiao.vn
 */
Class sanphamkhuyenmaiModel extends baseModel
{
    public function get_list_promo_product($limit = 20)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE product_promoid != 0 ORDER BY productid DESC LIMIT ".$limit);
        return $db->fetch_object();
    }
}