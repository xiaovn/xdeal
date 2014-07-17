<?php
/**
 * Project: pcshop.
 * File: productModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:45 - 05/03/2014
 * Website: www.xiao.vn
 */
Class productModel extends baseModel
{
    public function productquery($sql,$fr)
    {
        global $db;
        $db->query($sql);
        return $db->fetch_object($first_row = $fr);
    }
}