<?php
/**
 * Project: pcshop.
 * File: sanphammoiModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 13:15 - 04/03/2014
 * Website: www.xiao.vn
 */
Class sanphammoiModel extends baseModel
{
    public function get_list_new_product($limit = 20)
    {
        global $db;
        $db->query("SELECT * FROM product ORDER BY productid DESC LIMIT ".$limit);
        return $db->fetch_object();
    }
}