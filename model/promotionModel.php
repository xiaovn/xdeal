<?php
/**
 * Project: pcshop.
 * File: promotionModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 08:59 - 13/03/2014
 * Website: www.xiao.vn
 */
Class promotionModel extends baseModel
{
    public function add($promovalue)
    {
        global $db;
        $db->query("INSERT INTO product_promo(promovalue) VALUES ('".$promovalue."')");
    }
    public function showall()
    {
        global $db;
        $db->query("SELECT * FROM product_promo");
        return $db->fetch_object();
    }
    public function delete($promoid)
    {
        global $db;
        $db->query("DELETE FROM product_promo WHERE promoid = '".$promoid."'");
    }
    public function update($promoid,$promovalue)
    {
        global $db;
        $db->query("UPDATE product_promo SET promovalue = '".$promovalue."' WHERE promoid = '".$promoid."'");
    }
}