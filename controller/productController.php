<?php
/**
 * Project: pcshop.
 * File: productController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 14:45 - 04/03/2014
 * Website: www.xiao.vn
 */
Class productController extends baseController
{
    public function index()
    {

    }	
    public function view($para)
    {
        if(sitesystem::getInstance()->checkid($pid = sitesystem::getInstance()->getid($para[1]),"product","productid"))
        {
            product::getInstance()->productupdate("product_view",$pid,1);
            $this->view->data['productinfo'] = $this->model->get("chitietsanphamModel")->get_product_info($pid);
            $this->view->show("product_detail");
        }
        else
        {
            $this->view->data['notifi'] = "Sản phẩm không tồn tại!";
            $this->view->show("error404");
        }
    }
    public function ajaxrate()
    {
        if($_POST['act'] == 'rate'){
            $ip = $_SERVER["REMOTE_ADDR"];
            $therate = $_POST['rate'];
            $thepost = $_POST['post_id'];
            global $db;
            $db->query("SELECT * FROM rating where ip= '$ip' and productid = '".$thepost."'");
            if($db->num_row())
            {
                $db->query("UPDATE rating SET rate= '$therate' WHERE ip = '$ip' and productid = '".$thepost."'");
            }
            else
            {
                $db->query("INSERT INTO rating (productid, ip, rate)VALUES('$thepost', '$ip', '$therate')");
            }
        }
    }
}