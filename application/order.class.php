<?php
/**
 * Project: pcshop.
 * File: order.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 12:00 - 12/03/2014
 * Website: www.xiao.vn
 */
Class order{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new order();
        }
        return self::$instance;
    }
    public function get_order_list($date = 0)
    {
        global $db;
        if($date == 0)
        {
            $db->query("SELECT * FROM billorder ORDER BY id DESC");
            return $db->fetch_object();
        }
        else
        {

        }
    }
    public function sumarybill($billid)
    {
        global $db;
        $db->query("SELECT sum(productprice) as total FROM invoice WHERE orderid = '".$billid."'");
        return $db->fetch_object($first_row = true)->total;
    }
    public function orderstatus($status)
    {
        if($status == 1)
        {
            return "Chờ thanh toán";
        }
        elseif($status == 2)
        {
            return "Đang vận chuyển";
        }
        elseif($status == 3)
        {
            return "Hoàn thành";
        }
        else
        {
            return "Đã hủy";
        }
    }
    public function orderstatus2($status)
    {
        if($status == 1)
        {
            return '<span class="badge blue light">Chờ thanh toán</span>';
        }
        elseif($status == 2)
        {
            return '<span class="badge blue dark">Đang vận chuyển</span>';
        }
        elseif($status == 3)
        {
            return '<span class="badge green">Hoàn thành</span>';
        }
        else
        {
            return '<span class="badge red">Đã hủy</span>';
        }
    }
    public function createid()
    {
        $id = "MTC";
        $rdc = rand(1000000,9999999);
        $id = $id."".$rdc;
        return $id;
    }
    public function checkorderid($id)
    {
        global $db;
        $db->query("SELECT * FROM billorder WHERE orderid = '".$id."'");
        if($db->num_row())
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function generator_order_id()
    {
        do
        {
            $id = $this->createid();
        }
        while(!$this->checkorderid($id));
        return $id;
    }
    public function get_product_in_invoice($orderid)
    {
        global $db;
        $db->query("SELECT * FROM invoice WHERE orderid = '".$orderid."'");
        return $db->fetch_object();
    }
    public function ordercounter($type)
    {
        if($type == "*")
        {
            global $db;
            $db->query("SELECT * FROM billorder");
            return $db->num_row();
        }
        else
        {
            global $db;
            $db->query("SELECT * FROM billorder WHERE status = ".$type."");
            return $db->num_row();
        }
    }
    public function sumarypaid($type)
    {
        if($type == "*")
        {
            global $db;
            $db->query("SELECT sum(productprice) as total FROM invoice");
            return $db->fetch_object($first_row = true)->total;
        }
        else
        {
            global $db;
            $db->query("SELECT * FROM billorder WHERE status = '".$type."'");
            $listorder = $db->fetch_object();
            $sumary = 0;
            foreach($listorder as $order)
            {
                $sumary = $sumary + $this->sumarybill($order->orderid);
            }
            return $sumary;
        }
    }
}