<?php
/**
 * Project: pcshop.
 * File: manufaceturerModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 09:40 - 13/03/2014
 * Website: www.xiao.vn
 */
Class manufaceturerModel extends baseModel
{
    public function add($manuname)
    {
        global $db;
        $db->query("INSERT INTO manufaceturers(manuname) VALUES ('".$manuname."')");
    }
    public function showall()
    {
        global $db;
        $db->query("SELECT * FROM manufaceturers");
        return $db->fetch_object();
    }
    public function delete($manuid)
    {
        global $db;
        $db->query("DELETE FROM manufaceturers WHERE manuid = '".$manuid."'");
    }
    public function update($manuid,$manuname)
    {
        global $db;
        $db->query("UPDATE manufaceturers SET manuname = '".$manuname."' WHERE manuid = '".$manuid."'");
    }
}