<?php include "header.php";?>
 <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
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
                    
<?php if($_SESSION['spcount'] == 0)
{
?>
<div class="messages status">
<h2 class="element-invisible">Status message</h2>
<strong>Giỏ hàng đang rỗng</strong>. Hãy tiếp tục <a href="<?php echo XC_URL;?>">mua hàng</a>.</div>
<?php
}
else
{
?>
 <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <div id="cart-form-pane">
		<form action="<?php echo XC_URL;?>/cart/update" method="post" id="uc-cart-view-form" accept-charset="UTF-8">
			<div>
				<table class="sticky-enabled tableheader-processed sticky-table">
					<thead>
						<tr>
							<th>Xóa</th>
							<th>Sản phẩm</th>
							<th></th>
							<th><abbr title="Quantity">Số lượng</abbr></th>
							<th>Đơn giá</th>
							<th>Thành tiền</th> 
						</tr>
					</thead>
					<tbody>
					<?php
					$listcart = $_SESSION['cart'];
					for($i = 0; $i < count($listcart);$i++)
					{
					?>
						<tr class="<?php if($i%2){?>even<?php }else{ ?>odd<?php }?>">
							<td class="remove">
							<a href="<?php XC_URL;?>/cart/delete?pid=<?php echo $listcart[$i]['productid'];?>">Xóa</a>
								
							</td>
							<td class="image">
								<a href="<?php echo sitesystem::getInstance()->permalink($listcart[$i]['productid'],"product");?>">
									<img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($listcart[$i]['productid']);?>" width="50" height="50" alt="">
								</a>
							</td>
							<td class="desc">
								<a href="<?php echo sitesystem::getInstance()->permalink($listcart[$i]['productid'],"product");?>"><?php echo product::getInstance()->get_product_info($listcart[$i]['productid'],"product_title")?></a>
							</td>
							<td class="qty">
								<div class="form-item form-type-uc-quantity form-item-items-0-qty">
									<label class="element-invisible" for="edit-items-0-qty">Quantity 
										<span class="form-required" title="This field is required.">*</span>
									</label>
									<input type="text" id="quantity" name="quantity[<?php echo $listcart[$i]['productid'];?>]" value="<?php echo $listcart[$i]['productqty'];?>" size="5" maxlength="6" class="form-text required">
								</div>
							</td>
							<td class="price">
								<span class="uc-price"><?php echo number_format(product::getInstance()->get_product_info($listcart[$i]['productid'],"product_price"), 0, ',', '.');?>  VND</span>
							</td> 
							<td class="price">
								<span class="uc-price"><?php echo number_format(product::getInstance()->get_product_info($listcart[$i]['productid'],"product_price")*$listcart[$i]['productqty'], 0, ',', '.');?>  VND</span>
							</td> 
						</tr>
						<?php }?>
						<tr class="even"><td colspan="6" class="subtotal"><span id="subtotal-title">Tổng giá trị:</span> <span class="uc-price"><?php echo number_format($_SESSION['total'], 0, ',', '.');?> VND</span></td> </tr>
					</tbody>
				</table>
				<div class="entity entity-uc-cart-item uc-cart-item-uc-cart-item clearfix" about="" typeof="">
					<div class="content">
						
					</div>
				</div>
				<input type="hidden" name="form_build_id" value="form-yqwt4VtjOhj7VOmMcG5KQiiKr7BXBJbITDmgDgh6SEU">
				<input type="hidden" name="form_id" value="uc_cart_view_form">
				<div class="form-actions form-wrapper" id="edit-actions">
					<a href="<?php echo XC_URL;?>">Tiếp tục mua hàng</a> &nbsp;
					<a href="<?php echo XC_URL;?>/cart/cartempty" style="margin-left: 10px;">Xóa hết</a>
					<a href="<?php echo XC_URL;?>/cart/checkout" style="margin-left: 10px;">Thanh toán</a>
					<input type="submit" id="edit-checkout--2" name="cartupdate" value="Cập nhật" class="form-submit">
				</div>
			</div>
		</form>
	</div>  
</div>
  
</div> <!-- /.block -->
</div>
<?php }?>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>          
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		