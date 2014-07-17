<?php
/**
 * Project: pcshop.
 * File: productdetailModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 17:10 - 12/03/2014
 * Website: www.xiao.vn
 */

Class productdetailModel extends baseModel
{
    public function productdetail($productid)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE productid = '".$productid."'");
        return $db->fetch_object($first_row = true);
    }
}