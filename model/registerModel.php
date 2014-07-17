<?php
/**
 * Project: pcshop.
 * File: registerModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 20:28 - 08/03/2014
 * Website: www.xiao.vn
 */
Class registerModel extends baseModel
{
    public function register($username,$password,$email)
    {
        global $db;
        $db->query("INSERT INTO users(username,password,email,usergroup) VALUES ('".$username."','".$password."','".$email."','1')");
    }
}