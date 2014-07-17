<?php
/**
 * Project: pcshop.
 * File: product.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 11:22 - 04/03/2014
 * Website: www.xiao.vn
 */
Class product{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new product();
        }
        return self::$instance;
    }

    public function get_product_list_by_supplier()
    {

    }
	public function get_product_feature($protype,$productid,$keys)
	{
		global $db;
		$db->query("SELECT * FROM camera_feature WHERE protype = '".$protype."' AND productid = '".$productid."' AND prokey = '".$keys."' LIMIT 1");
		return $db->fetch_object(true)->provalues;
	}
    public function get_manufacturer_info($manuid)
    {
        global $db;
        $db->query("SELECT * FROM manufaceturers WHERE manuid = '".$manuid."'");
        return $db->fetch_object($first_row = true)->manuname;
    }
    public function get_feature_info($fid)
    {
        global $db;
        $db->query("SELECT * FROM product_feature WHERE productid = '".$fid."'");
        return $db->fetch_object($first_row = true);
    }
    public function get_list_product_by_view($limit = 20)
    {
        global $db;
        $db->query("SELECT * FROM product ORDER BY product_view DESC LIMIT ".$limit);
        return $db->fetch_object();
    }
    public function get_list_product_by_manufaceturer($manuid,$limit = 20)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE product_manufaceturer = '".$manuid."' ORDER BY productid DESC LIMIT ".$limit);
        return $db->fetch_object();
    }
    public function productcount($w)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE ".$w);
        return $db->num_row();
    }
    public function productcountall()
    {
        global $db;
        $db->query("SELECT * FROM product");
        return $db->num_row();
    }
    public function get_list_product_by_price($price,$limit = 20)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE product_price > ".($price - 2000000)." and product_price < ".($price + 2000000)."  ORDER BY productid DESC LIMIT ".$limit);
        return $db->fetch_object();
    }
    public function get_product_feature_image($productid)
    {
        global $db;
        $db->query("SELECT * FROM product_images WHERE productid = '".$productid."' and xtype = 1");
        return $db->fetch_object($first_row = true)->images;
    }
    public function get_category($root)
    {
        global $db;
        if($root == "*")
        {
            $db->query("SELECT * FROM category");
        }
        else
        {
            $db->query("SELECT * FROM category WHERE catparent = '".$root."'");
        }
        return $db->fetch_object();
    }
    public function get_product_info($productid,$info)
    {
        global $db;
        $db->query("SELECT * FROM product WHERE productid = '".$productid."'");
        return $db->fetch_object($first_row = true)->$info;
    }
    public function get_product_images($productid)
    {
        global $db;
        $db->query("SELECT * FROM product_images WHERE productid = '".$productid."'");
        $listimages = $db->fetch_object();
        $strimage = '<ul class="list-item">';
        foreach($listimages as $image)
        {
            $strimage .= '<li><a class="clb-slide cboxElement" href="'.XC_URL.'/uploads/product/'.$image->images.'" title="'.$this->get_product_info($productid,"product_title").'">
                       <img class="zoom-tiny-image" src="'.XC_URL.'/uploads/product/'.$image->images.'" alt="" style="width:50px; height:50px;border:0;" title="'.$this->get_product_info($productid,"product_title").'">
                                            </a>
                                        </li>';
        }
        $strimage .= '</ul>';
        return $strimage;
    }
    public function get_category_info($catid)
    {
        global $db;
        $db->query("SELECT * FROM category WHERE catid = '".$catid."'");
        return $db->fetch_object($first_row = true)->catname;
    }
    public function get_cat_parent($catid)
    {
        global $db;
        $db->query("SELECT * FROM category WHERE catid = '".$catid."'");
        return $db->fetch_object($first_row = true)->catparent;
    }
    public function productupdate($type,$id,$value)
    {
        global $db;
        $db->query("UPDATE product SET ".$type." = ".$type." + ".$value." WHERE productid = '".$id."' LIMIT 1");
    }
    public function productrate($productid)
    {
        global $db;
        $db->query("SELECT * FROM rating WHERE productid = '".$productid."'");
        $sr = 0;
        foreach($db->fetch_object() as $rates)
        {
            $sr = $sr + $rates->rate;
        }
        if($db->num_row()){
            $rate_times = $db->num_row();
            $rate_value = $sr/$rate_times;
            $rate_bg = (($rate_value)/5)*100;
        }else{
            $rate_times = 0;
            $rate_value = 0;
            $rate_bg = 0;
        }
        $resultrate = '<div class="box-result-cnt">
            <hr>
            <h3>Số đánh giá: <strong>'.$rate_times.'</strong> lần.</h3>
            <hr>
            <div class="rate-result-cnt">
                <div class="rate-bg" style="width:'.$rate_bg.'%"></div>
                <div class="rate-stars"></div>
            </div>
            <hr>

        </div>';
        return $resultrate;
    }
    public function get_product_status($status)
    {
        if($status > 0)
        {
            return '<span class="badge blue dark">A</span>';
        }
        else
        {
            return '<span class="badge red dark">N</span>';
        }
    }
    public function get_list_product_manufaceturer()
    {
        global $db;
        $db->query("SELECT * FROM manufaceturers");
        return $db->fetch_object();
    }
    public function get_list_product_feature()
    {
        global $db;
        $db->query("SELECT * FROM product_feature");
        return $db->fetch_object();
    }
    public function get_desc_feature($productid)
    {
        global $db;
        $db->query("SELECT * FROM product_feature WHERE productid = '".$productid."'");
        return $db->fetch_object($first_row = true);
    }
    public function get_promo_detail($promoid)
    {
        global $db;
        $db->query("SELECT * FROM product_promo WHERE promoid = '".$promoid."'");
        return  $db->fetch_object($first_row = true)->promovalue;
    }
    public function get_promo_list()
    {
        global $db;
        $db->query("SELECT * FROM product_promo");
        return $db->fetch_object();
    }

}