<?php
/**
 * Project: pcshop.
 * File: newsController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 09:21 - 06/03/2014
 * Website: www.xiao.vn
 */
Class newsController extends baseController
{
    public function index()
    {
        $newsid = $_GET['post'];
        if(sitesystem::getInstance()->checkid($newsid,"news","newsid"))
        {
            $this->view->data['news2'] = $this->model->get("newsModel")->get_news($newsid);
            $this->view->show("news");
        }
        else
            {
                $this->view->data['status'] = "Xin lỗi, không tồn tại tin tức này!";
                $this->view->show('notifi');
            }
    }
}