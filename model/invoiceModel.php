<?php
/**
 * Project: pcshop.
 * File: invoiceModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 13:52 - 12/03/2014
 * Website: www.xiao.vn
 */
Class invoiceModel extends baseModel
{
    public function get_invoice_detail($orderid)
    {
        global $db;
        $db->query("SELECT * FROM billorder WHERE orderid = '".$orderid."'");
        return $db->fetch_object($first_row = true);
    }
}