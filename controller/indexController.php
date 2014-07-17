<?php
/**
 * Project: Xira PHP Framework.
 * File: indexController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class indexController Extends baseController {
	public function index() {
        $this->view->data['listpromo'] = $this->model->get("sanphamkhuyenmaiModel")->get_list_promo_product(20);
        $this->view->data['listnewproduct'] = $this->model->get("sanphammoiModel")->get_list_new_product(20);
        $this->view->show('index');
	}

}

?>
