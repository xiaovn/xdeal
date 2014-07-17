<?php
/**
 * Project: pcshop.
 * File: searchController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 09:11 - 06/03/2014
 * Website: www.xiao.vn
 */
Class searchController extends baseController
{
    public function index()
    {
        $keyword = $_POST['keyword'];
        $catid = $_POST['catid'];
        global $db;
        $db->query("SELECT * FROM product WHERE product_title like '%".$keyword."%' or product_description like '%".$keyword."%' and product_category = '".$catid."' ORDER BY productid DESC");
        if($db->num_row())
        {
            $spp = 10;
            $page = 1;
            if(isset($_GET['page']) && $_GET['page'] != "")
            {
                $page = $_GET['page'];
            }
            $cp = $page - 1;
            $this->view->data['sodulieu']= $sodu_lieu = $db->num_row();
            $sotrang = $sodu_lieu/$spp;
            $this->view->data['listproduct'] = $db->fetch_object();
            $this->view->data['catid'] = $catid;
            $this->view->data['count'] = $sodu_lieu;
            $this->view->data['sotrang'] = $sotrang;
            $this->view->show("search");
        }
        else
        {
            $this->view->data['status'] = "Xin lỗi, không có sản phẩm nào phù hợp!";
            $this->view->show('notifi');
        }
    }
}