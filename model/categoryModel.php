<?php
/**
 * Project: pcshop.
 * File: categoryModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 09:55 - 13/03/2014
 * Website: www.xiao.vn
 */

Class categoryModel extends baseModel
{
    public function add($catname,$catparent)
    {
        global $db;
        $db->query("INSERT INTO category(catname,catparent) VALUES ('".$catname."','".$catparent."')");
    }
    public function showall()
    {
        global $db;
        $db->query("SELECT * FROM category");
        return $db->fetch_object();
    }
    public function delete($catid)
    {
        global $db;
        $db->query("DELETE FROM category WHERE catid = '".$catid."'");
    }
    public function update($catid,$catname,$catparent)
    {
        global $db;
        $db->query("UPDATE category SET catname = '".$catname."',catparent = '".$catparent."' WHERE catid = '".$catid."'");
    }
}