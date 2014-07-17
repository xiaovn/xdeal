<?php include "header.php";?>
<link href="<?php echo $template_path;?>/css/uc_cart.css" rel="stylesheet" />
</head>
<body class="html front not-logged-in one-sidebar sidebar-first page-node">
    <div id="wrapper">
    <header id="header" role="banner">

                    <div id="banner">
                <div class="region region-banner">
  <div id="block-block-5" class="block block-block">

      
  <div class="content">
    <p><img alt="" src="<?php echo $template_path;?>/images/banner.png" /></p>
  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
            </div>
            <div class="clear"></div>
            
        <div class="clear"></div>

        <!-- start main-menu -->
		<?php include "nav.php";?>
        <!-- end main-menu -->
    </header>

    <div id="container">
		<!-- start main-header -->
		<?php include "mainhead.php";?>
        <!-- end main-header -->
            <div class="clear"></div>
                <div class="content-sidebar-wrap">
                            <!-- /#sidebar-first -->
							<?php include "sidebar.php";?>
                            <!-- /#sidebar-first -->
                        <div id="content">
                <section id="post-content" role="main">
                                                                                                        <!--<h1 class="page-title"></h1>-->
                                                                                                                        <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <form class="uc-cart-checkout-form" action="" method="post" id="uc-cart-checkout-form" accept-charset="UTF-8">
	<div>
		<fieldset class="form-wrapper" id="cart-pane">
			<legend>
				<span class="fieldset-legend">Giỏ hàng của bạn</span>
			</legend>
			<div class="fieldset-wrapper">
				<table class="cart-review sticky-enabled tableheader-processed sticky-table">
					<thead>
						<tr>
							<th class="qty">
								<abbr title="Quantity">Số lượng</abbr>
							</th>
							<th class="products">Sản phẩm</th>
							<th class="products">Đơn giá</th>
							<th class="price">Thành tiền</th> 
						</tr>
					</thead>
					<tbody>
					<?php
					$listcart = $_SESSION['cart'];
					for($i = 0; $i < count($listcart);$i++)
					{
					?>
						<tr class="<?php if($i%2){?>even<?php }else{ ?>odd<?php }?>">
						<td class="qty"><?php echo $listcart[$i]['productqty'];?></td>
						<td class="products">
							<a href="<?php echo sitesystem::getInstance()->permalink($listcart[$i]['productid'],"product");?>"><?php echo product::getInstance()->get_product_info($listcart[$i]['productid'],"product_title")?></a>
						</td>
						<td class="price">
								<span class="uc-price"><?php echo number_format(product::getInstance()->get_product_info($listcart[$i]['productid'],"product_price"), 0, ',', '.');?>  VND</span>
						</td> 
						<td class="price"><span class="uc-price"><?php echo number_format(product::getInstance()->get_product_info($listcart[$i]['productid'],"product_price") * $listcart[$i]['productqty'], 0, ',', '.') ;?> VND</span></td> </tr>
						<?php }?>
						
 <tr class="subtotal even"><td colspan="4" class="subtotal"><span id="subtotal-title">Tổng giá trị:</span> <span class="uc-price"><?php echo number_format($_SESSION['total'], 0, ',', '.');?> VND</span></td> </tr>
</tbody>
</table>
                <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=<?php echo sitesystem::getInstance()->get_meta("nganluong");?>&product_name=<?php echo $_SESSION['orderid'];?>&price=<?php echo $_SESSION['total'];?>&return_url=<?php echo XC_URL;?>" ><img src="https://www.nganluong.vn/data/images/buttons/11.gif"  border="0" /></a>
            </div></fieldset>
<fieldset class="collapsible form-wrapper collapse-processed" id="billing-pane">
    <legend>
        <span class="fieldset-legend">
            <a class="fieldset-title" href="#">
                Thông tin hóa đơn</a><span class="summary"></span></span></legend><div class="fieldset-wrapper" style=""><div class="fieldset-description">Nhập thông tin và địa chỉ giao hàng của bạn tại đây.</div><div id="billing-address-pane"><div class="uc-store-address-field form-wrapper" id="edit-panes-billing-address"><div class="form-item form-type-textfield form-item-panes-billing-billing-first-name">
  <label for="edit-panes-billing-billing-first-name"><span class="form-required" title="This field is required.">*</span> Họ tên </label>
 <input type="text" id="edit-panes-billing-billing-first-name" name="shippingname" value="<?php echo sitesystem::getInstance()->get_user_info($_SESSION['uID'],"fullname");?>" size="32" maxlength="128" class="form-text">
</div>
<div class="form-item form-type-textfield form-item-panes-billing-billing-phone">
  <label for="edit-panes-billing-billing-phone"><span class="form-required" title="This field is required.">*</span> Điện thoại </label>
 <input type="text" id="edit-panes-billing-billing-phone" name="shippingphone" value="<?php echo sitesystem::getInstance()->get_user_info($_SESSION['uID'],"phone");?>" size="16" maxlength="32" class="form-text">
</div>
<div class="form-item form-type-textfield form-item-panes-billing-billing-street1">
  <label for="edit-panes-billing-billing-street1"><span class="form-required" title="This field is required.">*</span> Địa chỉ </label>
 <input type="text" id="edit-panes-billing-billing-street1" name="shippingaddress" value="<?php echo sitesystem::getInstance()->get_user_info($_SESSION['uID'],"address");?>" size="32" maxlength="128" class="form-text">
</div>
</div></div><div class="next-button"></div></div></fieldset>
<fieldset class="collapsible form-wrapper collapse-processed" id="comments-pane"><legend><span class="fieldset-legend"><a class="fieldset-title" href="#"> Yêu cầu thêm</a><span class="summary"></span></span></legend><div class="fieldset-wrapper" style=""><div class="fieldset-description">Điền ghi chú hoặc câu hỏi liên quan tới đơn hàng của bạn vào ô dưới đây</div><div class="form-item form-type-textarea form-item-panes-comments-comments">
  <label for="edit-panes-comments-comments">Yêu cầu thêm </label>
 <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-panes-comments-comments" name="ordercomment" cols="60" rows="5" class="form-textarea"></textarea><div class="grippie"></div></div>
</div>
</div></fieldset>
<div class="form-actions form-wrapper" id="edit-actions">
	<input type="submit" id="edit-continue" name="dathang" value="Đặt hàng" class="form-submit"></div></div>
</form>
</div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>          
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		