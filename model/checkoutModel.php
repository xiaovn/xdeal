<?php
/**
 * Project: pcshop.
 * File: checkoutModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 15:45 - 05/03/2014
 * Website: www.xiao.vn
 */

Class checkoutModel extends baseModel
{
    public function checkout($orderid,$uid,$shippingname,$shippingaddress,$shippingphone,$billcomment,$productlist)
    {

        global $db;
        $now = date('Y-m-d H:i:s');
        $db->query("INSERT INTO billorder(orderid,uid,shipping_name,shipping_address,shipping_phone,status,billcomment,orderaddtime) VALUES ('".$orderid."','".$uid."','".$shippingname."','".$shippingaddress."','".$shippingphone."',2,'".$billcomment."','".$now."')");
        for($i = 0;$i < count($productlist);$i++)
        {
            $db->query("SELECT product_price FROM product WHERE productid = '".$productlist[$i]['productid']."'");
            $product_price = $db->fetch_object($first_row = true)->product_price;
            $db->query("INSERT INTO invoice(orderid,productid,productqty,productprice) VALUES('".$orderid."','".$productlist[$i]['productid']."',".$productlist[$i]['productqty'].",'".$product_price*$productlist[$i]['productqty']."')");
        }
    }
}