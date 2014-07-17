<?php
/**
 * Project: pcshop.
 * File: cartController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 13:01 - 05/03/2014
 * Website: www.xiao.vn
 */
Class cartController extends baseController
{
    public function index()
    {
        if(!isset($_SESSION['orderid']))
        {
            $_SESSION['orderid'] = order::getInstance()->generator_order_id();
        }
        $this->view->show("cart");
    }
	public function get_pro_fea($productid,$featurekey,$featuevalues)
	{
		global $db;
		$db->query("SELECT productid FROM camera_feature WHERE productid = '".$productid."' and prokey = '".$featurekey."' and provalues = '".$featuevalues."'");
		$db->fetch_object(true);
		if($db->num_row())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function testcart()
	{
		global $db;
		$db->query("SELECT productid FROM product");
		$result = $db->fetch_array(false);
		for($i = 0;$i< count($result);$i++)
		{
			echo $i." - ".$result[$i]['productid']."<br>";
		}
		echo "<hr><br>";
		/*
		$a = array();
		for($i = 0;$i <count($result);$i++)
		{
			echo "Check ".$result[$i]['productid']." => result: ".$this->get_pro_fea($result[$i]['productid'],"resolution","700")."<br>";
			if($this->get_pro_fea($result[$i]['productid'],"resolution","700") == true)
			{
				array_push($a,$result[$i]);
			}
		}
		for($i = 0;$i< count($a);$i++)
		{
			echo $i." - ".$a[$i]['productid']."<br>";
		}
		*/
		//echo "<hr><br>";
		//$b = $this->loopcheck($a,"ir","36");
		$b= $this->loopcheck($this->loopcheck($result,"resolution","700"),"ir","36");
		for($i = 0;$i< count($b);$i++)
		{
			echo $i." - ".$b[$i]['productid']."<br>";
		}
		
	}
	public function loopcheck($a,$key,$value)
	{
		$b = array();
		for($i = 0;$i <count($a);$i++)
		{
			//echo "Check ".$a[$i]['productid']." => result: ".$this->get_pro_fea($a[$i]['productid'],"ir","36")."<br>";
			if($this->get_pro_fea($a[$i]['productid'],$key,$value) == true)
			{
				array_push($b,$a[$i]);
			}
		}
		return $b;
	}
    public function cartempty()
    {
        $_SESSION['cart'] = null;
        $_SESSION['total'] = 0;
        $_SESSION['spcount'] = 0;
        header("Location: ".XC_URL."/cart");
    }
	public function delete()
	{
		if(isset($_GET['pid']) && $_GET['pid']!=null)
		{
			$pid = $_GET['pid'];
			$listcart = $_SESSION['cart'];
			$listnew = array();
			for($i = 0;$i<count($listcart);$i++)
			{
				if($listcart[$i]['productid'] != $pid)
				{
					array_push($listnew,$listcart[$i]);
				}
			}
			$_SESSION['cart'] = $listnew;
			$this->sum_money();
			header("Location: ".XC_URL."/cart");
		}
		
	}
	public function showcart()
	{
		$data = $_SESSION['cart'];
		for($i = 0;$i < count($data);$i++)
		{
			echo $data[$i]['productid'].": ".$data[$i]['productqty']."<br>";
		}
		$data[1]=NULL;
		echo "<br>";
		for($i = 0;$i < count($data);$i++)
		{
			echo $data[$i]['productid'].": ".$data[$i]['productqty']."<br>";
		}
	}
    public function checkout()
    {
        if(isset($_SESSION['uID']) && $_SESSION['uID'] != "")
        {
            if(isset($_POST['dathang']))
            {
                $productlist = $_SESSION['cart'];
                $orderid = $_SESSION['orderid'];
                $total = $_SESSION['total'];
                $userid = $_SESSION['uID'];
                $shippingname = $_POST['shippingname'];
                $shippingaddress = $_POST['shippingaddress'];
                $shippingphone = $_POST['shippingphone'];
                $ordercomment = $_POST['ordercomment'];
                $this->model->get("checkoutModel")->checkout($orderid,$userid,$shippingname,$shippingaddress,$shippingphone,$ordercomment,$productlist);
                unset($_SESSION['orderid']);
                $_SESSION['cart'] = null;
                $_SESSION['total'] = 0;
                $_SESSION['spcount'] = 0;
                $this->view->data['status'] = "Chúc mừng bạn đã đặt hàng thành công, ABC Computer sẽ liên hệ với bạn trong thời gian sớm nhất!";
                $this->view->show("notifi");
            }
            elseif(isset($_POST['checkout']))
            {

                $this->view->show("checkout");
            }
            else
            {
                $this->view->show("checkout");
            }
        }
        else
        {
            header("Location: ".XC_URL."/account/login");
        }

    }
    public function update()
    {
        if(isset($_POST['cartadd']) && $_POST['productid'] != "")
        {
            $productid 	= filter_var($_POST["productid"], FILTER_SANITIZE_NUMBER_INT);
            $productqty =  filter_var($_POST["productqty"], FILTER_SANITIZE_NUMBER_INT);
            global $db;
            $db->query("SELECT * FROM product WHERE productid = '".$productid."'");
            if($db->num_row())
            {
                $listcart = $_SESSION['cart'];
				$found =0;
				for($i = 0;$i<count($listcart) && $found == 0;$i++)
				{
					if($listcart[$i]['productid'] == $productid)
					{
						$found = 1;
						$listcart[$i]['productqty'] += $productqty;
					}
					else
					{
						$found = 0;
						
					}
				}
				if($found == 0)
				{
					$product = array('productid' => $productid,'productqty' => $productqty);
					array_push($listcart,$product);
				}
                $_SESSION['cart'] = $listcart;
                $_SESSION['spcount'] = $_SESSION['spcount'] + $productqty;
                $_SESSION['total'] = $_SESSION['total'] + $db->fetch_object($first_row = true)->product_price;
            }
            header("Location: ".XC_URL."/cart");
        }
		elseif(isset($_POST['cartupdate']) && $_POST['cartupdate'] != "")
		{
			if ( !empty($_POST['quantity']) ) 
			{				
				$listcart = $_SESSION['cart'];
				for($i =0;$i<count($listcart);$i++)
				{
					$id = $listcart[$i]['productid'];
					$tity =$_POST['quantity'][$id];
					$listcart[$i]['productqty'] = $tity;
				}
				$_SESSION['cart'] = $listcart;	
				$this->sum_money();
			}			
		}
		else
		{
				echo "None";
		}
		header("Location: ".XC_URL."/cart");
    }
	public function sum_money()
	{	
			$listcart=$_SESSION['cart'];
			$_SESSION['total'] = 0;
			global $db;
			$sum = 0;
			$sumqty;
			for($i =0;$i<count($listcart);$i++)
			{
				$proid = $listcart[$i]['productid'];
				$qutity = $listcart[$i]['productqty'];
				$db->query("SELECT * FROM product WHERE productid = '".$proid."'");
				$price = $db->fetch_object($first_row = true)->product_price;
				$sum_total = $price * $qutity ;
				$sum += $sum_total;				
				$sumqty ++;
			}
		$_SESSION['total'] = $sum;
		$_SESSION['spcount'] = $sumqty;
		header("Location: ".XC_URL."/cart");
	}
}