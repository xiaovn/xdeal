<?php
Class camera_featureController extends baseController
{
	public function index()
	{
	}
	public function getproductid()
	{

			global $db;
			$db->query("SELECT * FROM camera_feature");
			$this->view->data['list'] = $db->fetch_array();
			//$this->view->data['a'] = count($list);
			$this->view->show("hthi");
	}
	public function checkvalue()
	{
	if(isset($_POST['check1']))
		{
			//$val = $_POST['check1'];
			echo $_POST['check1'];
			
		}
		$this->view->show("hthi");
	}
}