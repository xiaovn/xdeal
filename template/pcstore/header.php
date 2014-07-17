<?php
/**
 * Project: pcshop.
 * File: header.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 16:49 - 27/02/2014
 * Website: www.xiao.vn
 */
include "config.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
	<?php
	if(isset($productinfo->product_title) && $productinfo->product_title != "")
	{
		$title = $productinfo->product_title." - ".$app_name;
		if($productinfo->product_description)
		{
			$desc = $productinfo->product_title." - ".strip_tags(substr($productinfo->product_description,0,200))." - GiaLaiCamera thiết bị an ninh, viễn thông, văn phòng, giải pháp an ninh chuyên nghiệp giá rẻ, giải pháp tổng đài điện thoại, máy chấm công, máy bộ, laptop, linh kiện máy tính";
		}
		else
		{
			$desc = $productinfo->product_title." - GiaLaiCamera thiết bị an ninh, viễn thông, văn phòng, giải pháp an ninh chuyên nghiệp giá rẻ, giải pháp tổng đài điện thoại, máy chấm công, máy bộ, laptop, linh kiện máy tính";
		}
	}
	else
	{
		$title = $app_name;
		$desc = "GiaLaiCamera thiết bị an ninh, viễn thông, văn phòng, giải pháp an ninh chuyên nghiệp giá rẻ, giải pháp tổng đài điện thoại, máy chấm công, máy bộ, laptop, linh kiện máy tính.";
	}
	if(isset($productinfo))
	{
		$ogi = $upload_path."/product/".product::getInstance()->get_product_feature_image($productinfo->productid);
	}
	else
	{
		$ogi = "http://gialaicamera.com/xiao.png";
	}
	?>
    <title><?php echo $title;?></title>
	<meta content="<?php echo $desc;?>" name="description" />
        <meta content="camera gia lai, camera, gia lai, lap dat camera, lap dat camera tai gia lai,camera vantech, may tinh bo, hp, dell, laptop, tong dai, tong dai panasonic, tong dai gia re, chong trom gia re, chong trom ban dem" name="keywords" /> 
        <meta http-equiv="Content-Language" content="vi" />
        <link rel="icon" type="image/png" href="http://gialaicamera.com/xiao.png" />        
        <meta name="author" content="xiao.vn" />
        <meta name="copyright" content="Xiao Media JSC" />
        <link rel="image_src" type="image/jpeg"  href="<?php echo $ogi;?>" />
        <meta property="fb:admins" content="100001020764542"/>
        <meta property="fb:app_id" content="753921844665558"/>
        <meta property="og:type" content="product"/>
        <meta property="og:url" content="<?php echo "http://gialaicamera.com".$_SERVER['REQUEST_URI'];?>"/>
        <meta property="og:image" content="<?php echo $ogi;?>"/>
        <meta property="og:title" content="<?php echo $desc;?>"/>
        <meta property="og:description" content="<?php echo $desc;?>" />
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="canonical" href="<?php echo "http://gialaicamera.com".$_SERVER['REQUEST_URI'];?>" /> 
    
    <link href="<?php echo $template_path;?>/css/system.base.css?myr4u1" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/system.menus.css?myr4u1" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/system.messages.css?myr4u1" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/system.theme.css?myr4u1" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/field.css?myr4u1" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/node.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/search.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/uc_order.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/uc_product.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/uc_roles.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/uc_store.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/user.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/views.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/ckeditor.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/ctools.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/rate.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/uc_cart_block.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/nivo-slider.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/default.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/basic.css" rel="stylesheet" />
    <link href="<?php echo $template_path;?>/css/quicktabs.css" rel="stylesheet" />
	<link href="<?php echo $template_path;?>/css/productlist.css" rel="stylesheet" />
	<link href="<?php echo $template_path;?>/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.js?v=1.4.4"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.once.js?v=1.2"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/drupal.js?myr4u1"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.cookie.js?v=1.0"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.form.js?v=2.52"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/ajax.js?v=7.21"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/progress.js?myr4u1"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.flexslider-min.js?myr4u1"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/nivo_slider.js?myr4u1"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.nivo.slider.pack.js?myr4u1"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/quicktabs.js?myr4u1"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>/js/custom.js?myr4u1"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"pcstore","theme_token":"z2ku_0Lzk-x8ufC6saOT37HP115WDX__u9Xa3WWHLgc","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/jquery.cookie.js":1,"misc\/jquery.form.js":1,"misc\/ajax.js":1,"misc\/progress.js":1,"sites\/all\/themes\/pcstore\/js\/jquery.flexslider-min.js":1,"sites\/all\/modules\/nivo_slider\/js\/nivo_slider.js":1,"sites\/all\/libraries\/nivo-slider\/jquery.nivo.slider.pack.js":1,"sites\/all\/modules\/quicktabs\/js\/quicktabs.js":1,"sites\/all\/themes\/pcstore\/js\/custom.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"sites\/all\/modules\/ubercart\/uc_order\/uc_order.css":1,"sites\/all\/modules\/ubercart\/uc_product\/uc_product.css":1,"sites\/all\/modules\/ubercart\/uc_roles\/uc_roles.css":1,"sites\/all\/modules\/ubercart\/uc_store\/uc_store.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/rate\/rate.css":1,"sites\/all\/modules\/ubercart\/uc_cart\/uc_cart_block.css":1,"sites\/all\/libraries\/nivo-slider\/nivo-slider.css":1,"sites\/all\/libraries\/nivo-slider\/themes\/default\/default.css":1,"sites\/all\/modules\/quicktabs\/quicktabs_tabstyles\/tabstyles\/basic\/basic.css":1,"sites\/all\/modules\/quicktabs\/css\/quicktabs.css":1,"sites\/all\/themes\/pcstore\/css\/style.css":1}},"nivo_slider":{"effect":"random","slices":15,"boxCols":8,"boxRows":4,"animSpeed":500,"pauseTime":3000,"startSlide":0,"directionNav":true,"controlNav":true,"controlNavThumbs":false,"pauseOnHover":true,"manualAdvance":false,"prevText":"Prev","nextText":"Next","randomStart":false},"ajax":{"quicktabs-tab-sp_khuyen_mai-0":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/sp_khuyen_mai\/0\/block\/views_delta_sp_khuyen_mai-laptop\/1"},"quicktabs-tab-sp_khuyen_mai-1":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/sp_khuyen_mai\/1\/block\/views_delta_sp_khuyen_mai-desktop\/1"},"quicktabs-tab-sp_khuyen_mai-2":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/sp_khuyen_mai\/2\/block\/views_delta_sp_khuyen_mai-dien_thoai\/1"},"quicktabs-tab-quicktab_sp_moi_ve-0":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/quicktab_sp_moi_ve\/0\/block\/views_delta_sp_moi_ve-laptop\/1"},"quicktabs-tab-quicktab_sp_moi_ve-1":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/quicktab_sp_moi_ve\/1\/block\/views_delta_sp_moi_ve-desktop\/1"},"quicktabs-tab-quicktab_sp_moi_ve-2":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/quicktab_sp_moi_ve\/2\/block\/views_delta_sp_moi_ve-dian_thoai\/1"},"quicktabs-tab-quicktab_sp_moi_ve-3":{"progress":{"message":"","type":"throbber"},"event":"click","url":"\/quicktabs\/ajax\/quicktab_sp_moi_ve\/3\/block\/views_delta_sp_moi_ve-linh_kien_may_tinh\/1"}},"quicktabs":{"qt_sp_khuyen_mai":{"name":"sp_khuyen_mai","tabs":[{"bid":"views_delta_sp_khuyen_mai-laptop","hide_title":1},{"bid":"views_delta_sp_khuyen_mai-desktop","hide_title":1},{"bid":"views_delta_sp_khuyen_mai-dien_thoai","hide_title":1}],"ajaxPageState":{"theme":"pcstore","theme_token":"z2ku_0Lzk-x8ufC6saOT37HP115WDX__u9Xa3WWHLgc"}},"qt_quicktab_sp_moi_ve":{"name":"quicktab_sp_moi_ve","tabs":[{"bid":"views_delta_sp_moi_ve-laptop","hide_title":1},{"bid":"views_delta_sp_moi_ve-desktop","hide_title":1},{"bid":"views_delta_sp_moi_ve-dian_thoai","hide_title":1},{"bid":"views_delta_sp_moi_ve-linh_kien_may_tinh","hide_title":1}],"ajaxPageState":{"theme":"pcstore","theme_token":"z2ku_0Lzk-x8ufC6saOT37HP115WDX__u9Xa3WWHLgc"}}}});
//--><!]]>
</script>