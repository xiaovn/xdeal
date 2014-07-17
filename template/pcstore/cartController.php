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
    public function cartempty()
    {
        $_SESSION['cart'] = null;
        $_SESSION['total'] = 0;
        $_SESSION['spcount'] = 0;
        header("Location: ".XC_URL."/cart");
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
	        //$productid 	= filter_var($_POST["productid"], FILTER_SANITIZE_NUMBER_INT);
            //$productqty =  filter_var($_POST["productqty"], FILTER_SANITIZE_NUMBER_INT);
			    $sl = filter_var($_POST["quantity"], FILTER_SANITIZE_NUMBER_INT);
				for($i =0;$i<count($listcart);i++)
				{
					$id = $listcart[$i]['productid'];
					$tity =$_POST['quantity'][$id];
					$listcart[$i]['productqty'] = $tity;
					$_SESSION['cart'] = $listcart;
					header("Location: ".XC_URL."/cart");
				}
			}
		}
		else
		{
				echo "None";
		}

    }
}