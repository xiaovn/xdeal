<?php
/**
 * Project: pcshop.
 * File: adminController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:35 - 06/03/2014
 * Website: www.xiao.vn
 */
Class adminController extends baseController
{
    public function index()
    {
        $this->checklogin();
        $this->view->admintmp("dashboard");
    }
    public function checklogin()
    {
        if(!(isset($_SESSION['uID']) && $_SESSION['uID'] != "" && $_SESSION['uGroup'] == 7))
        {
            header("Location: ".XC_URL);
        }
    }
    public function newproduct()
    {
        $this->checklogin();
        if(isset($_POST['product_title']) && $_POST['product_title'] != "")
        {
            $listcolor = implode(",", $_POST['fcolor'] );
            $tempname = md5(time())."-".$_FILES['product_image']['name'];
            move_uploaded_file($_FILES['product_image']['tmp_name'],"./uploads/product/".$tempname);
            $this->model->get("productaddModel")->add($_POST['product_title'],$_POST['product_category'],$_POST['product_manufaceturer'],$_POST['product_onsale'],$_POST['product_quantily'],$_POST['product_price'],$_POST['product_promoid'],$_POST['product_description'],$_POST['product_warranty'],$tempname,$_POST['fos'],$_POST['flanguage'],$_POST['fcpu'],$_POST['fcache'],$_POST['fram'],$_POST['fhdd'],$_POST['fgraphic'],$_POST['fscreen'],$_POST['fusb'],$_POST['faudio'],$_POST['fhdmi'],$_POST['fmemorystick'],$_POST['fsdstick'],$_POST['fwireless'],$_POST['fbluetooth'],$_POST['fcamera'],$_POST['fspeaker'],$_POST['fbattery'],$listcolor,$_POST['forigin']);
            header("Location: ".XC_URL."/admin/product");
        }
        else
        {
            $this->view->admintmp("product_add");
        }
    }
    public function product($para)
    {
        $this->checklogin();
        if(isset($para[1]) && $para[1] != "")
        {
            $this->view->data['productid'] = $productid = $para[1];
            if(isset($_GET['action']) && $_GET['action'] == "edit")
            {
                $this->view->data['product'] = $this->model->get("productdetailModel")->productdetail($productid);
                $this->view->admintmp("product_edit");
            }
            elseif(isset($_GET['action']) && $_GET['action'] == "update")
            {
                $this->view->data['product'] = $productdetail = $this->model->get("productdetailModel")->productdetail($productid);
                if(!(isset($_POST['product_category']) && $_POST['product_category'] != "" ))
                {
                    $product_category = $productdetail->product_category;
                }
                else
                {
                    $product_category = $_POST['product_category'];
                }
                if(!(isset($_POST['product_manufaceturer']) && $_POST['product_category'] != "" ))
                {
                    $product_manufaceturer = $productdetail->product_manufaceturer;
                }
                else
                {
                    $product_manufaceturer = $_POST['product_manufaceturer'];
                }
				if($_FILES['product_image']['tmp_name'] != "")
				{
					global $db;
					$tempname = md5(time())."-".$_FILES['product_image']['name'];
					move_uploaded_file($_FILES['product_image']['tmp_name'],"./uploads/product/".$tempname);
					$db->query("SELECT * FROM product_images WHERE productid = '".$productid."'");
					if($db->num_row())
					{
						$db->query("UPDATE product_images SET images = '".$tempname."' WHERE productid = '".$productid."'");
					}
					else
					{
						$db->query("INSERT INTO product_images(productid,images,xtype)VALUES ('".$productid."','".$tempname."',1)");
					}
					
				}
                if(!(isset($_POST['product_promoid']) && $_POST['product_promoid'] != "" ))
                {
                    $product_promoid = $productdetail->product_promoid;
                }
                else
                {
                    $product_promoid = $_POST['product_promoid'];
                }
                $listcolor = implode(",", $_POST['fcolor'] );
                $this->model->get("productupdateModel")->productupdate($productid,$_POST['product_title'],$product_category,$product_manufaceturer,$_POST['product_onsale'],$_POST['product_quantily'],$_POST['product_price'],$product_promoid,$_POST['product_description'],$_POST['product_warranty'],$_POST['images'],$_POST['fos'],$_POST['flanguage'],$_POST['fcpu'],$_POST['fcache'],$_POST['fram'],$_POST['fhdd'],$_POST['fgraphic'],$_POST['fscreen'],$_POST['fusb'],$_POST['faudio'],$_POST['fhdmi'],$_POST['fmemorystick'],$_POST['fsdstick'],$_POST['fwireless'],$_POST['fbluetooth'],$_POST['fcamera'],$_POST['fspeaker'],$_POST['fbattery'],$listcolor,$_POST['forigin']);
                $this->view->admintmp("product_edit");
            }
            elseif(isset($_GET['action']) && $_GET['action'] == "delete")
            {
                $this->model->get("productdeleteModel")->productdelete($productid);
                header("Location: ".XC_URL."/admin/product");
            }
            else
            {
                $this->view->data['product'] = $this->model->get("productdetailModel")->productdetail($productid);
                $this->view->admintmp("product_edit");
            }

        }
        else
        {
            $spp = 20;
            $page = 1;
            if(isset($_GET['page']) && $_GET['page'] != "")
            {
                $page = $_GET['page'];
            }
            $cp = $page - 1;
            $this->view->data['sodulieu']= $sodu_lieu = product::getInstance()->productcountall();
            $sotrang = $sodu_lieu/$spp;
            $sql = "SELECT * FROM product ORDER BY productid DESC LIMIT ".$cp*$spp.",".$spp;
            $this->view->data['listproduct'] = $this->model->get('productModel')->productquery($sql,false);
            $this->view->data['count'] = $sodu_lieu;
            $this->view->data['sotrang'] = $sotrang;
            $this->view->admintmp("product");
        }

    }
    public function invoice($para)
    {
        $this->checklogin();
        if(isset($para[1]) && $para[1] != "")
        {
            $this->view->data['orderid'] = $orderid = $para[1];
            if(isset($_GET['action']) && $_GET['action'] == "edit")
            {
                $this->view->data['invoice'] = $this->model->get("invoiceModel")->get_invoice_detail($orderid);
                $this->view->admintmp("invoiceupdate");
            }
            elseif(isset($_GET['action']) && $_GET['action'] == "update")
            {
                $this->model->get("orderupdateModel")->updateorder($orderid,$_POST['shipping_name'],$_POST['shipping_address'],$_POST['billcomment'],$_POST['status'],$_POST['paymentdate']);
                $this->view->data['invoice'] = $this->model->get("invoiceModel")->get_invoice_detail($orderid);
                $this->view->admintmp("pages_invoice");
            }
            elseif(isset($_GET['action']) && $_GET['action'] == "delete")
            {
                $this->model->get("deleteorderModel")->deleteorder($orderid);
                header("Location: ".XC_URL."/admin/invoice");
            }
            else
            {
                $this->view->data['invoice'] = $this->model->get("invoiceModel")->get_invoice_detail($orderid);
                $this->view->admintmp("pages_invoice");
            }

        }
        else
        {
            $this->view->admintmp("invoice_list");
        }
    }
    public function promotion()
    {
        $this->checklogin();
        if(isset($_POST['promoadd']) && $_POST['promoadd'] != "")
        {
            $this->model->get("promotionModel")->add($_POST['promovalue']);
            header("Location: ".XC_URL."/admin/promotion");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "delete")
        {
            $this->model->get("promotionModel")->delete($_GET['promoid']);
            header("Location: ".XC_URL."/admin/promotion");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "edit")
        {
            if(isset($_POST['promoupdate']) && $_POST['promoupdate'] != "")
            {
                $this->model->get("promotionModel")->update($_POST['promoid'],$_POST['promovalue']);
                header("Location: ".XC_URL."/admin/promotion");
            }
            else
            {
                $this->view->data['promoid'] = $_GET['promoid'];
                $this->view->data['promovalue'] = product::getInstance()->get_promo_detail($_GET['promoid']);
                $this->view->admintmp("promotion");
            }
        }
        else
        {
            $this->view->data['listpromo'] = $this->model->get("promotionModel")->showall();
            $this->view->admintmp("promotion");
        }
    }
    public function manufaceturer()
    {
        $this->checklogin();
        if(isset($_POST['manuadd']) && $_POST['manuadd'] != "")
        {
            $this->model->get("manufaceturerModel")->add($_POST['manuname']);
            header("Location: ".XC_URL."/admin/manufaceturer");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "delete")
        {
            $this->model->get("manufaceturerModel")->delete($_GET['manuid']);
            header("Location: ".XC_URL."/admin/manufaceturer");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "edit")
        {
            if(isset($_POST['manuupdate']) && $_POST['manuupdate'] != "")
            {
                $this->model->get("manufaceturerModel")->update($_POST['manuid'],$_POST['manuname']);
                header("Location: ".XC_URL."/admin/manufaceturer");
            }
            else
            {
                $this->view->data['manuid'] = $_GET['manuid'];
                $this->view->data['manuname'] = product::getInstance()->get_manufacturer_info($_GET['manuid']);
                $this->view->admintmp("manufaceturer");
            }
        }
        else
        {
            $this->view->data['listmanu'] = $this->model->get("manufaceturerModel")->showall();
            $this->view->admintmp("manufaceturer");
        }
    }
    public function category()
    {
        $this->checklogin();
        if(isset($_POST['catadd']) && $_POST['catadd'] != "")
        {
            $this->model->get("categoryModel")->add($_POST['catname'],$_POST['catparent']);
            header("Location: ".XC_URL."/admin/category");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "delete")
        {
            $this->model->get("categoryModel")->delete($_GET['catid']);
            header("Location: ".XC_URL."/admin/category");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "edit")
        {
            if(isset($_POST['catupdate']) && $_POST['catupdate'] != "")
            {
                $this->model->get("categoryModel")->update($_POST['catid'],$_POST['catname'],$_POST['catparent2']);
                header("Location: ".XC_URL."/admin/category");
            }
            else
            {
                $this->view->data['catid'] = $_GET['catid'];
                $this->view->data['catname'] = product::getInstance()->get_category_info($_GET['catid']);
                $this->view->data['catparent'] = product::getInstance()->get_cat_parent($_GET['catid']);
                $this->view->admintmp("category");
            }
        }
        else
        {
            $this->view->data['listcat'] = $this->model->get("categoryModel")->showall();
            $this->view->admintmp("category");
        }
    }
    public function updateuser()
    {
        $this->checklogin();
        $userid = $_POST['userid'];
        if(isset($_POST['d3_role']) && $_POST['d3_role'] != "")
        {
            $role = $_POST['d3_role'];
        }
        else
        {
            $role = sitesystem::getInstance()->get_user_info($userid,"usergroup");
        }
        if(isset($_POST['d3_password']) && $_POST['d3_password'] != "")
        {
            $this->model->get("userModel")->updatepass($userid,md5($_POST['d3_password']));
        }
        $this->model->get("userModel")->update($userid,$_POST['d3_email'],$role,$_POST['d3_fullname'],$_POST['d3_address'],$_POST['d3_phone']);
    }
    public function user()
    {
        $this->checklogin();
        if(isset($_POST['useradd']) && $_POST['useradd'] != "")
        {
            $this->model->get("userModel")->add($_POST['d2_username'],md5($_POST['d2_password']),$_POST['d2_email'],$_POST['d2_role'],$_POST['d2_fullname'],$_POST['d2_address'],$_POST['d2_phone']);
            header("Location: ".XC_URL."/admin/user");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "delete")
        {
            $this->model->get("userModel")->delete($_GET['userid']);
            header("Location: ".XC_URL."/admin/user");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "edit")
        {
            if(isset($_POST['userupdate']) && $_POST['userupdate'] != "")
            {
                $userid = $_POST['d3userid'];
                if(isset($_POST['d3_role']) && $_POST['d3_role'] != "")
                {
                    $role = $_POST['d3_role'];
                }
                else
                {
                    $role = sitesystem::getInstance()->get_user_info($userid,"usergroup");
                }
                if(isset($_POST['d3_password']) && $_POST['d3_password'] != "")
                {
                    $this->model->get("userModel")->updatepass($userid,md5($_POST['d3_password']));
                }
                $this->model->get("userModel")->update($userid,$_POST['d3_email'],$role,$_POST['d3_fullname'],$_POST['d3_address'],$_POST['d3_phone']);
                header("Location: ".XC_URL."/admin/user");
            }
            else
            {
                $this->view->data['userid'] = $_GET['userid'];
                $this->view->admintmp("user");
            }
        }
        else
        {
            $this->view->data['listuser'] = $this->model->get("userModel")->showall();
            $this->view->admintmp("user");
        }
    }
    public function statistics()
    {
        $this->checklogin();
        $this->view->admintmp("statistics");
    }
    public function config()
    {
        $this->checklogin();
       if(isset($_POST['action']) && $_POST['action'] == "update")
       {
            sitesystem::getInstance()->metaupdate("baokim",$_POST['baokim']);
            sitesystem::getInstance()->metaupdate("nganluong",$_POST['nganluong']);
            sitesystem::getInstance()->metaupdate("paymentadd",$_POST['paymentadd']);
           header("Location: ".XC_URL."/admin/config");
       }
        else
        {
            $this->view->admintmp("config");
        }
    }
    public function addnews()
    {
        $this->checklogin();
        if(isset($_POST['newsadd']) && $_POST['newsadd'] != "")
        {
            $tempname = md5(time())."-".$_FILES['newsthumb']['name'];
            move_uploaded_file($_FILES['newsthumb']['tmp_name'],"./uploads/news/".$tempname);
            $this->model->get("newsModel")->add($_POST['newstitle'],$_POST['newscontent'],$_POST['newsauthor'],$tempname);
            header("Location: ".XC_URL."/admin/news");
        }
        else
        {
            $this->view->admintmp("addnews");
        }
    }
    public function news()
    {
        $this->checklogin();
        if(isset($_GET['action']) && $_GET['action'] == "delete")
        {
            $this->model->get("newsModel")->delete($_GET['newsid']);
            header("Location: ".XC_URL."/admin/news");
        }
        elseif(isset($_GET['action']) && $_GET['action'] == "edit")
        {
            if(isset($_POST['newsupdate']) && $_POST['newsupdate'] != "")
            {
                if(isset($_POST['newsauthor']) && $_POST['newsauthor'] != "")
                {
                    $this->model->get("newsModel")->update($_POST['newsid'],$_POST['newstitle'],$_POST['newscontent'],$_POST['newsauthor']);
                }
                else
                {
                    $this->model->get("newsModel")->update_without_author($_POST['newsid'],$_POST['newstitle'],$_POST['newscontent']);
                }
                header("Location: ".XC_URL."/admin/news");
            }
            else
            {
                $this->view->data['newsid'] = $_GET['newsid'];
                $this->view->data['news'] = $this->model->get("newsModel")->get_news($_GET['newsid']);
                $this->view->admintmp("newsedit");
            }
        }
        else
        {
            $this->view->data['listnews'] = sitesystem::getInstance()->get_list_news(0);
            $this->view->admintmp("news");
        }
    }
    public function logout()
    {
        unset($_SESSION['uID']);
        unset($_SESSION['uUsername']);
        unset($_SESSION['uEmail']);
        unset($_SESSION['uGroup']);
        unset($_SESSION['LoggedIn']);
        unset($_SESSION['isAdmin']);
        header("Location: ".XC_URL);
    }
    public function blank()
    {
        $this->checklogin();
        $this->view->admintmp("blank");
    }
}