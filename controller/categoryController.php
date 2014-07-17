<?php
/**
 * Project: pcshop.
 * File: categoryController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:16 - 05/03/2014
 * Website: www.xiao.vn
 */
Class categoryController extends baseController
{
    public function index()
    {

    }
    public function product($para)
    {
        $catid = sitesystem::getInstance()->getid($para[1]);
        if(sitesystem::getInstance()->checkid($catid,"category","catid"))
        {
            $spp = 10;
            $page = 1;
            if(isset($_GET['page']) && $_GET['page'] != "")
            {
                $page = $_GET['page'];
            }
            $cp = $page - 1;
            $this->view->data['sodulieu']= $sodu_lieu = product::getInstance()->productcount("product_category = ".$catid);
            $sotrang = $sodu_lieu/$spp;
            $sql = "SELECT * FROM product WHERE product_category = '".$catid."' ORDER BY productid DESC LIMIT ".$cp*$spp.",".$spp;
            $this->view->data['listproduct'] = $this->model->get('productModel')->productquery($sql,false);
            $this->view->data['catid'] = $catid;
            $this->view->data['count'] = $sodu_lieu;
            $this->view->data['sotrang'] = $sotrang;
            $this->view->show("category");
        }
        else
        {
            $this->view->data['status'] = "Xin lỗi, không tồn tại môn này!";
            $this->view->show('notifi');
        }
    }
}