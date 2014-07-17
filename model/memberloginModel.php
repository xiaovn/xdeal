<?php
/**
 * Project: pcshop.
 * File: memberloginModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 11:11 - 05/03/2014
 * Website: www.xiao.vn
 */
Class memberloginModel extends baseModel
{
    public function check_login($user,$pass)
    {
        global $db;
        $cl = $db->query("SELECT * FROM users WHERE (username = '".$user."' OR email = '".$user."') AND password = '".$pass."'");
        if(mysql_num_rows($cl) == 1)
        {
            $row = $db->fetch_object($first_row = true);
            $_SESSION['uID'] = $row->userid;
            $_SESSION['uUsername'] = $row->username;
            $_SESSION['uEmail'] = $row->email;
            $_SESSION['uGroup'] = $row->usergroup;
            $_SESSION['LoggedIn'] = 1;
            if($row->group == 7)
            {
                $_SESSION['isAdmin'] = 1;
            }
            else{$_SESSION['isAdmin'] = 0;}
            return true;
        }
        else
        {
            return false;
        }

    }
}