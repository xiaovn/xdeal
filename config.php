<?php
/**
 * Project: Xira PHP Framework.
 * File: config.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
session_start();
//=============== Custom configuration ==================//
define('DB_NAME', 'admin_camera'); //database name
define('DB_USER', 'admin_camera'); //database user
define('DB_PASSWORD', 'Lo3NJcMU'); //database password
define('DB_HOST', 'localhost'); //sql server

/*** define mailer ***/
define('MAIL_PROTOCOL', 'SMTP'); //Mail Protocol
define('MAIL_HOST', ''); //Mail host
define('MAIL_ACC', ''); //Account email
define('MAIL_PASS', ''); //Password
define('MAIL_PORT', 465); //Mail Server Port
define('MAIL_AUTH', true); //Security on/off
define('MAIL_SECURE', 'ssl'); //Security method

/*** define Theme ***/
define('ThemeMaster', 'pcstore'); //Replace xpanel by your theme's name
define('AdminThemeMaster', 'adminpc'); //Replace xpanel by your admin theme's name

/*** define site path ***/
define('XC_URL','http://gialaicamera.com');
//Replace http://localhost/pcshop by your site URL on server
// Note: url start with http:// and not end with /

/*** template path ***/
$template_path = XC_URL.'/template/'.ThemeMaster; //Warning: Don't change here
$upload_path = XC_URL.'/uploads'; //Warning: Don't change here
$admintemplate_path = XC_URL.'/template/'.AdminThemeMaster; //Warning: Don't change here

/*** Set Application Name ***/
$app_name = "Gia Lai Camera - Giải pháp an ninh, văn phòng chuyên nghiệp";

if(!isset($_SESSION['cart']))
{$_SESSION['cart'] = array();}

?>