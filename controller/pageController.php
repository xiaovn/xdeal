<?php
/**
 * Project: pcshop.
 * File: pageController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 11:07 - 04/03/2014
 * Website: www.xiao.vn
 */

Class pageController extends baseController
{
    public function index()
    {
        $this->view->show("blank");
    }
    public function cat()
    {
        $this->view->show("cat");
    }
    public function detail()
    {
        $this->view->show("detail");
    }
    public function cart()
    {
        $this->view->show("cart");
    }
}