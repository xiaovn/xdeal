<?php
/**
 * Project: pcshop.
 * File: system.config.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 13:21 - 04/03/2014
 * Website: www.xiao.vn
 */
Class sitesystem{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new sitesystem();
        }
        return self::$instance;
    }
    public function get_meta($key)
    {
        global $db;
        $db->query("SELECT * FROM metadata WHERE metakey = '".$key."'");
        if($db->num_row())
        {
            return $db->fetch_object($first_row = true)->metavalue;
        }
        else
        {
            return null;
        }
    }
    public function metaupdate($metakey,$metavalue)
    {
        global $db;
        $db->query("UPDATE metadata SET metavalue = '".$metavalue."' WHERE metakey = '".$metakey."'");
    }
    public function getid($strings)
    {
        $ids = explode("-", $strings);
        $id = $ids[0];
        return $id;
    }
    public function checkid($id,$table,$idfield)
    {
        global $db;
        $db->query("SELECT * FROM ".$table." WHERE ".$idfield." = '".$id."'");
        if($db->num_row())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_usergroup($group)
    {
        if($group == 4)
        {
            return "Nhân viên";
        }
        elseif($group == 7)
        {
            return "Quản trị";
        }
        elseif($group == 5)
        {
            return "Cộng tác viên";
        }
        else
        {
            return "Khách hàng";
        }
    }
    public function get_promo($promoid)
    {
        global $db;
        $db->query("SELECT * FROM product_promo WHERE promoid = ".$promoid);
        return $db->fetch_object($first_row = true)->promovalue;
    }
    public function bodau($title) {
        $title = preg_replace('/(")/','',$title);
        $url_pattern = array('` &(amp;|"| |"|#)?[a-z0-9]+;`i', '`[^a-z0-9]`i');

        $title = htmlentities($title, ENT_COMPAT, 'utf-8');
        $title = preg_replace( '`&([a-z]+)(acute|uml|circ|quot|grave|ring|cedil|slash|tilde|caron|lig);`i', "\\1", $title );
        $title = preg_replace('`\[.*\]`U','',$title);
        $title = strtolower(trim($title, '-'));

        $title = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ả|Ã|Ạ|Ằ|Ắ|Ẳ|Ẵ|Ặ|Ầ|Ấ|Ẩ|Ẫ|Ậ)/", 'a', $title);
        $title = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ể|Ễ|Ệ)/", 'e', $title);
        $title = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $title);
        $title = preg_replace("/(-)/", '', $title);
        $title = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ồ|Ố|Ổ|Ỗ|Ộ|Ờ|Ớ|Ở|Ỡ|Ợ)/", 'o', $title);
        $title = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ủ|Ũ|Ụ|Ừ|Ứ|Ử|Ữ|Ự)/", 'u', $title);
        $title = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỷ|Ỹ|Ỵ)/", 'y', $title);
        $title = preg_replace("/(đ)/", 'd', $title);
        $title = preg_replace("/(Đ)/", 'd', $title);
        $title = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $title);
        $title = preg_replace($url_pattern , '-', $title);
        $title = preg_replace("/(--)/",'-',$title);
        return $title;
    }

    public function permalink($id,$type)
    {
        global $db;
        $fs = "";
        switch($type)
        {
            case "product":
            {
                $db->query("SELECT * FROM product WHERE productid = ".$id."");
                $bl = $db->fetch_object($first_row = true);
                $fs = XC_URL."/product/".$id."-".$this->bodau($bl->product_title).".html";
                break;
            }
            case "category":
            {
                $db->query("SELECT * FROM category WHERE catid = ".$id."");
                $bl = $db->fetch_object($first_row = true);
                $fs = XC_URL."/category/product/".$id."-".$this->bodau($bl->catname).".html";
                break;
            }
            default:
                break;
        }
        return $fs;
    }
    public function get_menu($root)
    {
        global $db;
        $db->query("SELECT * FROM category WHERE catparent = '".$root."'");
        $listmenu = $db->fetch_object();
        $lsmenu = '<ul class="menu">';
        $cc = 1;
        foreach($listmenu as $menu)
        {
            if($cc == 1)
            {
                $lsmenu .= '<li class="first leaf">
                <a href="'.$this->permalink($menu->catid,"category").'" title="'.$menu->catname.'">'.$menu->catname.'</a></li>';
            }
            else
            {
                $lsmenu .= '<li class="leaf">
                <a href="'.$this->permalink($menu->catid,"category").'" title="'.$menu->catname.'">'.$menu->catname.'</a></li>';
            }
            $cc++;
        }
        $lsmenu .= '</ul>';
        return $lsmenu;
    }
    public function get_adv($postion)
    {
        global $db;
        $db->query("SELECT * FROM advbanner WHERE bannerpostion = '".$postion."' AND bannerexp > 0");
        if($db->num_row())
        {
            $adv = $db->fetch_object($first_row = true);
            if($adv->bannertype == 1)
            {
                return $adv->bannercode;
            }
            else
            {
                return '<a href="'.$adv->bannerlink.'" title="'.$adv->bannertitle.'" target="_blank"><img src="'.$adv->bannerimage.'"></a>';
            }
        }
        else
        {
            return '<a href="#" title="Liên hệ quảng cáo" target="_blank"><img src="'.XC_URL."/uploads/adv/".$postion.'.jpg"></a>';
        }
    }
    public function get_user_info($userid,$info)
    {
        global $db;
        $db->query("SELECT * FROM users WHERE userid = '".$userid."'");
        return $db->fetch_object($first_row = true)->$info;
    }
    public function get_list_news($limit = 10)
    {
        global $db;
        if($limit == 0)
        {
            $db->query("SELECT * FROM news ORDER BY newsid DESC");
            return $db->fetch_object();
        }
        else
        {
            $db->query("SELECT * FROM news ORDER BY newsid DESC LIMIT ".$limit);
            return $db->fetch_object();
        }

    }
    public function checkaccount($type,$value)
    {
        global $db;
        $db->query("SELECT * FROM users WHERE ".$type."= '".$value."'");
        if($db->num_row())
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function userlist()
    {
        global $db;
        $db->query("SELECT * FROM users");
        return $db->fetch_object();
    }
    public function counterupdate()
    {
        $time_now = time();
        $time_out = 60; //
        $ip_address = $_SERVER['REMOTE_ADDR'];
        global $db;
        $db->query("SELECT `ip_address` FROM `visitcounter` WHERE UNIX_TIMESTAMP(`last_visit`) + $time_out > $time_now AND `ip_address` = '".$ip_address."'");
        if (!$db->num_row())
        {
            mysql_query("INSERT INTO `visitcounter`(`ip_address`,`last_visit`) VALUES ('".$ip_address."', NOW())");
        }
    }
    public function visitby($type,$value)
    {
        $time_now = time();
        $time_out = 60; //
        global $db;
        if($type == "day")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE DAYOFYEAR(`last_visit`) = " . ($value + 1) . " AND YEAR(`last_visit`) = " . date('Y'));
            return $db->num_row();
        }
        elseif($type == "month")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE MONTH(`last_visit`) = " . $value . " AND YEAR(`last_visit`) = " . date('Y'));
            return $db->num_row();
        }
        elseif($type == "year")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE YEAR(`last_visit`) = " . $value);
            return $db->num_row();
        }
        elseif($type == "total")
        {
            $db->query("SELECT * FROM visitcounter");
            return $db->num_row();
        }
        else
        {}
    }
    public function visit($type)
    {
        $time_now = time();
        $time_out = 60; //
        global $db;
        if($type == "online")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE UNIX_TIMESTAMP(`last_visit`) + $time_out > $time_now");
            return $db->num_row();
        }
        elseif($type == "day")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE DAYOFYEAR(`last_visit`) = " . (date('z') + 1) . " AND YEAR(`last_visit`) = " . date('Y'));
            return $db->num_row();
        }
        elseif($type == "month")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE MONTH(`last_visit`) = " . date('n') . " AND YEAR(`last_visit`) = " . date('Y'));
            return $db->num_row();
        }
        elseif($type == "year")
        {
            $db->query("SELECT `ip_address` FROM `visitcounter` WHERE YEAR(`last_visit`) = " . date('Y'));
            return $db->num_row();
        }
        elseif($type == "total")
        {
            $db->query("SELECT * FROM visitcounter");
            return $db->num_row();
        }
        else
        {}
    }
    public function usercount($type)
    {
        if($type == "*")
        {
            global $db;
            $db->query("SELECT * FROM users");
            return $db->num_row();
        }
        else
        {
            global $db;
            $db->query("SELECT * FROM users WHERE usergroup = ".$type."");
            return $db->num_row();
        }
    }
    public function get_config($type)
    {
        global $db;
        switch($type)
        {
            case "title":
            {
                break;
            }
            default:
            {
                break;
            }
        }
    }
}