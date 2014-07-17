<?php

Class testviewController extends baseController
{
	public function index()
	{
	}
	public function test() {
        //$this->view->data['list'] = $this->model->get("testModel")->showall();
        $this->view->show('testview');
	}

}