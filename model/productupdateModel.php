<?php
/**
 * Project: pcshop.
 * File: productupdateModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 20:02 - 12/03/2014
 * Website: www.xiao.vn
 */
Class productupdateModel extends baseModel
{
    public function productupdate($productid,$product_title,$product_category,$product_manufaceturer,$product_onsale,$product_quantily,$product_price,$product_promoid,$product_description,$product_warranty,$images,$os,$language,$cpu,$cache,$ram,$hdd,$graphic,$screen,$usb,$audio,$hdmi,$memorystick,$sdstick,$wireless,$bluetooth,$camera,$speaker,$battery,$color,$origin)
    {
        global $db;
        $db->query("UPDATE product SET product_title = '".$product_title."', product_category = '".$product_category."', product_manufaceturer = '".$product_manufaceturer."', product_onsale = '".$product_onsale."', product_quantily = ".$product_quantily.", product_price = ".$product_price.", product_promoid = '".$product_promoid."', product_description = '".$product_description."', product_warranty = '".$product_warranty."' WHERE productid = '".$productid."'");
        $db->query("UPDATE product_feature SET os = '".$os."', language= '".$language."', cpu = '".$cpu."', cache= '".$cache."',ram = '".$ram."', hdd= '".$hdd."',graphic = '".$graphic."', screen = '".$screen."',usb = '".$usb."',audio = '".$audio."',hdmi = '".$hdmi."',memorystick = '".$memorystick."',sdstick = '".$sdstick."',wireless = '".$wireless."', bluetooth= '".$bluetooth."',camera= '".$camera."',speaker= '".$speaker."',battery= '".$battery."',color= '".$color."',origin= '".$origin."' WHERE productid = '".$productid."'");
    }
}