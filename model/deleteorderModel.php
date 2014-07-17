<?php
/**
 * Project: pcshop.
 * File: deleteorderModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 16:24 - 12/03/2014
 * Website: www.xiao.vn
 */
Class deleteorderModel extends baseModel
{
    public function deleteorder($orderid)
    {
        global $db;
        $db->query("DELETE FROM billorder WHERE orderid = '".$orderid."'");
        $db->query("DELETE FROM invoice WHERE orderid = '".$orderid."'");
    }
}