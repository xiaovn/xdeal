<?php
/**
 * Project: pcshop.
 * File: accountController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 11:09 - 05/03/2014
 * Website: www.xiao.vn
 */
Class accountController extends baseController
{
    public function index()
    {

    }
    public function login()
    {
        if(isset($_POST['username']) && $_POST['username'] != "")
        {
            $username = mysql_real_escape_string($_POST["username"]);
            $password = md5(mysql_real_escape_string($_POST["password"]));
            $member_login = $this->model->get('memberloginModel')->check_login($username,$password);
            if($member_login)
            {
                $this->view->data['member_heading'] = 'This is the member Login with'.$_SESSION['xID'];
                header("Location: ".XC_URL);
            }
            else
            {
                $this->view->data['member_heading'] = 'Khong thanh cong';
                header("Location: ".XC_URL);
            }
            $this->view->show('test');
        }
        else
        {
            $this->view->show("login");
        }
    }
    public function register()
    {
        if(isset($_POST['username']) && $_POST['username'] != "")
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $email = $_POST['email'];
            if(!sitesystem::getInstance()->checkaccount("username",$username))
            {
                $this->view->data['status'] = "Xin lỗi, tài khoản này đã tồn tại, nhấn <a href='".XC_URL."/account/register'>vào đây</a> để nhập lại thông tin";
                $this->view->show("notifi");
            }
            elseif(!sitesystem::getInstance()->checkaccount("email",$email))
            {
                $this->view->data['status'] = "Xin lỗi, email này đã tồn tại, nhấn <a href='".XC_URL."/account/register'>vào đây</a> để nhập lại thông tin";
                $this->view->show("notifi");
            }
            else
            {
                $this->model->get("registerModel")->register($username,$password,$email);
                $this->view->data['status'] = "Đăng ký thành công!";
                $this->view->show("notifi");
            }
        }
        else
        {
            $this->view->show("register");
        }

    }
    public function forgot()
    {
        $this->view->show("forgotpass");
    }
    public function logout()
    {
        unset($_SESSION['uID']);
        unset($_SESSION['uUsername']);
        unset($_SESSION['uEmail']);
        unset($_SESSION['uGroup']);
        unset($_SESSION['LoggedIn']);
        unset($_SESSION['isAdmin']);
        header("Location: ".XC_URL);
    }
}