<?php
Class sitemapController extends baseController
{
	public function index()
	{
		global $db;
		$db->query("SELECT * FROM product ORDER BY productid DESC");
		$this->view->data['list'] = $db->fetch_object(false);
		$this->view->show("sitemap");
	}
}
?>
