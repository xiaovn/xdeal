<?php
Class chonsanphamController extends baseController
{
	public function index()
	{
		if(!isset($_SESSION['av']))
		{	
			$_SESSION['av'] = array();
		}
		global $db;
		$db->query("SELECT * FROM product");
		$_SESSION['av'] = $db->fetch_array(false);
		$this->view->show("filter");
		
	}
	public function get_child_cat($catid)
	{
		global $db;
		$db->query("SELECT catid FROM category WHERE catparent = '".$catid."' OR catid = '".$catid."'");
		$listcats = $db->fetch_object();
		$listcat = array();
		foreach($listcats as $ats)
		{
			array_push($listcat,$ats->catid);
		}
		$cat2 = implode(",",$listcat);
		return $cat2;
	}
	public function camera()
	{
		if(!isset($_SESSION['av']))
		{	
			$_SESSION['av'] = array();
		}
		if(isset($_POST['search']) && $_POST['search'] != "")
		{
			$a = $_SESSION['av'];
			$a = $this->showdata($a,"44","price",$_POST['price']);
			$a = $this->showdata($a,"44","resolution",$_POST['resolution']);
			$a = $this->showdata($a,"44","ir",$_POST['ir']);
			$_SESSION['av'] = $a;
			$this->view->show("filter");
		}
		else
		{
			global $db;
			$db->query("SELECT * FROM product WHERE product_category IN(".$this->get_child_cat(44).")");
			$_SESSION['av'] = $db->fetch_array(false);
			$this->view->show("filter");	
		}
	}
	public function testpost()
	{
		echo $_POST['price'];
	}
	public function showdata($a,$protype,$keys,$values)
	{
		if(isset($a))
		{
			$b = array();
			for($i = 0;$i<count($a);$i++)
			{
				if($keys == "price")
				{
				
					if(product::getInstance()->get_product_info($a[$i]['productid'],"product_price") >= $values)
					{
						array_push($b,$a[$i]);
					}
				}
				else
				{
					if(product::getInstance()->get_product_feature($protype,$a[$i]['productid'],$keys) >= $values)
					{
						array_push($b,$a[$i]);
					}
				}
			}
			return $b;
		}
		else
		{
			return null;
		}
	}
	public function ajax()
	{
		  $select = 'SELECT id,productid';
		  $sel = 'SELECT *';
		  $from = ' FROM camera_feature';
		  $where = ' WHERE TRUE';
		  $opts = isset($_POST['filterOpts'])? $_POST['filterOpts'] : array('');
		  $a = array();
		 
		 
		 
		  if (in_array('700TVL', $opts)){
			$where .= " AND prokey = 'resolution' and provalues = 700 and unit = 'TVL' ";
		  }
		 
		  if (in_array('800TVL', $opts)){
			$where .= " AND prokey = 'resolution' and provalues = 800 and unit = 'TVL' ";
		  }
		 
		 //WHERE (prokey ='res' and provalues = '700' and unit = 'tvl') and prokey = 'ir' and provalues = '36'....
			if (in_array('480TVL', $opts)){
			$where .= " AND prokey = 'resolution' and provalues = 480 and unit = 'TVL'";
		  }
		  if (in_array('36IR', $opts)){
			$where .= " AND prokey = 'ir' and provalues = 36 and unit = 'c'";
		  }
		 
		  $sql = $select . $from . $where;
		  global $db;
		  $db->query($sql);
		  $results = $db->fetch_object(false);
		  $json = json_encode($results);
		  echo($json);
	}
}

?>