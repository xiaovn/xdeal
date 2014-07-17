<?php
/**
 * Project: pcshop.
 * File: orderupdateModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 15:21 - 12/03/2014
 * Website: www.xiao.vn
 */

Class orderupdateModel extends baseModel
{
    public function updateorder($orderid,$shipping_name,$shipping_address,$billcomment,$status,$paymentdate)
    {
        global $db;
        $db->query("UPDATE billorder SET shipping_name = '".$shipping_name."', shipping_address = '".$shipping_address."', billcomment = '".$billcomment."',status = ".$status.", paymentdate = '".date("Y-m-d H:i:s",strtotime($paymentdate))."' WHERE orderid = '".$orderid."'");
    }
}