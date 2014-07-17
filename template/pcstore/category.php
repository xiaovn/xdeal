<?php include "header.php";?>
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
                <section id="post-content" class="post-content" role="main">
                                                                                                        <!--<h1 class="page-title"></h1>-->
                                                                                                                        <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <div class="view view-san-pham-may-tinh-xach-tay view-id-san_pham_may_tinh_xach_tay view-display-id-page view-dom-id-46a712dfb57b1a9cee74cff2965483ee">
        
      <div class="view-filters">
      <form action="/taxonomy/term/1/0" method="get" id="views-exposed-form-san-pham-may-tinh-xach-tay-page" accept-charset="UTF-8"><div><div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
              <div class="views-exposed-widget views-widget-sort-by">
        <div class="form-item form-type-select form-item-sort-by">
  <label for="edit-sort-by">Sắp xếp theo </label>
 <select id="edit-sort-by" name="sort_by" class="form-select"><option value="sell_price" selected="selected">Giá bán</option><option value="created">Sản phẩm mới</option><option value="sticky">Nổi bật</option><option value="comment_count">Nhận xét</option></select>
</div>
      </div>
      <div class="views-exposed-widget views-widget-sort-order">
        <div class="form-item form-type-select form-item-sort-order">
  <label for="edit-sort-order">Order </label>
 <select id="edit-sort-order" name="sort_order" class="form-select"><option value="ASC" selected="selected">Asc</option><option value="DESC">Desc</option></select>
</div>
      </div>
                <div class="views-exposed-widget views-submit-button">
      <input type="submit" id="edit-submit-san-pham-may-tinh-xach-tay" name="" value="Áp dụng" class="form-submit">    </div>
      </div>
</div>
</div></form>    </div>
  
  
      <div class="view-content">
	  <?php 
	  $c = 1;
	  foreach($listproduct as $pro)
	  {
	  ?>
        <div class="views-row views-row-<?php echo $c;?> views-row-odd views-row-first">
      
			<div class="views-field views-field-rendered-entity">        
				<span class="field-content">    
					<div class="imglist left">
						<a href="<?php echo sitesystem::getInstance()->permalink($pro->productid,"product");?>">
							<img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($pro->productid);?>" width="125" height="105" alt="" title="">        </a>
					</div>
					<div class="infolist left">
						<div class="productName">
							<a href="<?php echo sitesystem::getInstance()->permalink($pro->productid,"product");?>"><?php echo $pro->product_title;?></a>
						</div>
						<div class="summary">
							<?php echo $pro->product_description;?>      </div>
									<div class="warranty">
								<strong>Bảo hành:</strong>
								<?php echo $pro->product_warranty;?>  Tháng            </div>
						
												<div class="offer">
								<strong>Khuyến mãi:</strong>
								<?php
								if($pro->product_promoid)
								{
								?>
									<?php echo sitesystem::getInstance()->get_promo($pro->product_promoid);?>
									<?php
							}   
							?>
							</div>
							</div>
						<div class="pricelist left">
							<div class="price_list"><?php echo number_format($pro->product_price, 0, ',', '.');?> VND</div>
							<div><?php
                if($pro->product_quantily)
                {
                ?>
                    Còn hàng
                <?php
                }
                else
                {
                    ?>
                Hết hàng
                <?php
                }
                ?>
				</div>
							<div class="add-to-cart"><form action="<?php echo XC_URL;?>/cart/update" method="post" id="uc-product-add-to-cart-form-352" accept-charset="UTF-8"><div>
									<input type="hidden" name="productqty" value="1" />
                                    <input type="hidden" name="cartadd" value="true" />
                                    <input type="hidden" name="productid" value="<?php echo $pro->productid;?>" />
						<div class="form-actions form-wrapper" id="edit-actions"><input class="node-add-to-cart form-submit" type="submit" id="edit-submit-352" name="op" value="Mua hàng"></div></div></form></div>    </div>
    </span>  </div>  </div>
	<?php
		}
	?>
  
    </div>
  
      <h2 class="element-invisible">Trang</h2>
	  <div class="item-list"><ul class="pager">
	  <?php

                for ( $page = 1; $page <= $sotrang; $page ++ )
                {
                    $class = "";
                    if($_GET['page'] == $page)
                    {
                        $class = "pager-current";
                    }
                    echo "<li class='pager-item'><a href='?page={$page}'><span class='{$class}'>{$page}</span></a></li>";
                }
            ?>
<li class="pager-next"><a title="Go to next page" href="?page=<?php echo $_GET['page']+1;?>">Tiếp theo ›</a></li>
<li class="pager-last last"><a title="Go to last page" href="?page=<?php echo $sotrang;?>">Cuối » </a></li>
</ul></div>  
  
  
  
  
</div>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                                    <aside id="sidebar-second" role="complementary">
                        <div class="region region-sidebar-second">
  <div id="block-views-san-pham-cung-hang-block" class="block block-views">

        <h2>Sản phẩm hot</h2>
    
  <div class="content">
    <div class="view view-san-pham-cung-hang view-id-san_pham_cung_hang view-display-id-block view-dom-id-c4fc723669d20653b22a55ddff0d2e7f">
        <?php
        $listbymanu = product::getInstance()->get_list_product_by_view(20);
        ?>
  
  
      <div class="view-content">
	  <?php
	  $cc3 = 1;
	  foreach($listbymanu as $promn)
	  {
	  ?>
	  <div class="views-row views-row-<?php echo $cc3?> views-row-odd views-row-first">
		<div class="views-field views-field-uc-product-image">        
			<div class="field-content">
				<a href="<?php echo sitesystem::getInstance()->permalink($promn->productid,"product");?>">
					<img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($promn->productid);?>" width="125" height="105" alt="">
				</a>
			</div>  
		</div>  
		<div>
			<div class="price"><?php echo number_format($promn->product_price, 0, ',', '.');?> VND</div>  
		</div>  
		<div class="views-field views-field-title">        
			<span class="field-content">
				<a href="<?php echo sitesystem::getInstance()->permalink($promn->productid,"product");?>"><?php echo $promn->product_title;?></a></span>  </div>  </div>
	  <?php
	  }
	  ?>
        
  
  
    </div>
  
  
  
  
  
  
</div>  </div>
  
</div> <!-- /.block -->
<!-- /.block -->

</div>
 <!-- /.region -->
                    </aside>  <!-- /#sidebar-first -->
                            </div>         
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		