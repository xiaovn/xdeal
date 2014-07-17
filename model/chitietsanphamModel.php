<?php
/**
 * Project: pcshop.
 * File: chitietsanphamModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 15:33 - 04/03/2014
 * Website: www.xiao.vn
 */
Class chitietsanphamModel extends baseModel
{
    public function get_product_info($productid)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE productid = '".$productid."'");
        return $db->fetch_object($first_row = true);
    }
}