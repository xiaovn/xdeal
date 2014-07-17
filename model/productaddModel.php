<?php
/**
 * Project: pcshop.
 * File: productaddModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 08:05 - 13/03/2014
 * Website: www.xiao.vn
 */
Class productaddModel extends baseModel
{
    public function add($product_title,$product_category,$product_manufaceturer,$product_onsale,$product_quantily,$product_price,$product_promoid,$product_description,$product_warranty,$images,$os,$language,$cpu,$cache,$ram,$hdd,$graphic,$screen,$usb,$audio,$hdmi,$memorystick,$sdstick,$wireless,$bluetooth,$camera,$speaker,$battery,$color,$origin)
    {
        global $db;
        $db->query("INSERT INTO product(product_title,product_category,product_manufaceturer,product_onsale,product_quantily,product_price,product_promoid,product_description,product_warranty) VALUES ('".$product_title."','".$product_category."','".$product_manufaceturer."','".$product_onsale."','".$product_quantily."','".$product_price."','".$product_promoid."','".$product_description."','".$product_warranty."')");
		$db->query("SELECT * FROM product ORDER BY productid DESC LIMIT 1");
        $productid = $db->fetch_object($first_row = true)->productid;
        $db->query("INSERT INTO product_images(productid,images,xtype)VALUES ('".$productid."','".$images."',1)");
        $db->query("INSERT INTO product_feature(productid,os,language,cpu,cache,ram,hdd,graphic,screen,usb,audio,hdmi,memorystick,sdstick,wireless,bluetooth,camera,speaker,battery,color,origin) VALUES ('".$productid."','".$os."','".$language."','".$cpu."','".$cache."','".$ram."','".$hdd."','".$graphic."','".$screen."','".$usb."','".$audio."','".$hdmi."','".$memorystick."','".$sdstick."','".$wireless."','".$bluetooth."','".$camera."','".$speaker."','".$battery."','".$color."','".$origin."')");
    }
}