<?php
/**
 * Project: pcshop.
 * File: userModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:17 - 13/03/2014
 * Website: www.xiao.vn
 */
Class userModel extends baseModel
{
    public function add($username,$password,$email,$usergroup,$fullname,$address,$phone)
    {
        global $db;
        $db->query("INSERT INTO users(username,password,email,usergroup,fullname,address,phone) VALUES ('".$username."','".$password."','".$email."',".$usergroup.",'".$fullname."','".$address."','".$phone."')");
    }
    public function showall()
    {
        global $db;
        $db->query("SELECT * FROM users");
        return $db->fetch_object();
    }
    public function delete($userid)
    {
        global $db;
        $db->query("DELETE FROM users WHERE userid = '".$userid."'");
    }

    public function update($userid,$email,$usergroup,$fullname,$address,$phone)
    {
        global $db;
        $db->query("UPDATE users SET email = '".$email."',usergroup = ".$usergroup.", fullname = '".$fullname."', address = '".$address."', phone = '".$phone."' WHERE userid = '".$userid."'");
    }
    public function updatepass($userid,$password)
    {
        global $db;
        $db->query("UPDATE users SET password = '".$password."' WHERE userid = '".$userid."'");
    }
}