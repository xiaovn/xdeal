<?php
/**
 * Project: pcshop.
 * File: productdeleteModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 17:01 - 12/03/2014
 * Website: www.xiao.vn
 */
Class productdeleteModel extends baseModel
{
    public function productdelete($productid)
    {
        global $db;
        $db->query("DELETE FROM product WHERE productid = '".$productid."'");
        $db->query("DELETE FROM product_images WHERE productid = '".$productid."'");
        $db->query("DELETE FROM product_feature WHERE productid = '".$productid."'");
    }
}