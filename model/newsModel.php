<?php
/**
 * Project: pcshop.
 * File: newsModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 09:26 - 06/03/2014
 * Website: www.xiao.vn
 */
Class newsModel extends baseModel
{
    public function get_news($newsid)
    {
        global $db;
        $db->query("SELECT * FROM news WHERE newsid = '".$newsid."'");
        return $db->fetch_object($first_row = true);
    }
    public function delete($newsid)
    {
        global $db;
        $db->query("DELETE FROM news WHERE newsid = '".$newsid."'");
    }
    public function add($newstitle,$newscontent,$newsauthor,$newsthumb)
    {
        global $db;
        $db->query("INSERT INTO news(newstitle,newscontent,newsauthor,newsthumbimages) VALUES ('".$newstitle."','".$newscontent."','".$newsauthor."','".$newsthumb."')");
    }
    public function update($newsid,$newstitle,$newscontent,$newsauthor)
    {
        global $db;
        $db->query("UPDATE news SET newstitle = '".$newstitle."',newscontent = '".$newscontent."',newsauthor = '".$newsauthor."' WHERE newsid = '".$newsid."'");
    }
    public function update_without_author($newsid,$newstitle,$newscontent)
    {
        global $db;
        $db->query("UPDATE news SET newstitle = '".$newstitle."',newscontent = '".$newscontent."' WHERE newsid = '".$newsid."'");
    }
}