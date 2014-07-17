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
                <section id="post-content" role="main">
                                        <div id="content_top"><div class="region region-content-top">
  <div id="block-nivo-slider-nivo-slider" class="block block-nivo-slider">

      
  <div class="content">
	<!-- start slide -->
      <?php include "slider.php";?>
  <!-- end slide -->
    </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
</div>                                                                <!--<h1 class="page-title"></h1>-->
                                                                                                                        <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
  
      </div>
  
</div> <!-- /.block -->
<div id="block-quicktabs-sp-khuyen-mai" class="block block-quicktabs">

        <h2 >Sản phẩm khuyến mại</h2>
    
  <div class="content">
    <div id="tabs" class="quicktabs-wrapper quicktabs-style-basic">
		<div class="item-list">
			<ul class="quicktabs-tabs quicktabs-style-basic">
				<li class="active first">
					<a href="http://gialaicamera.com/category/product/44-camera-quan-sat.html" class="active">Camera quan sát</a>
				</li>
				<li>
					<a href="http://gialaicamera.com/category/product/55-bao-trom-trong-nha.html" class="active">Bộ báo trộm</a>
				</li>
				<li class="last">
					<a href="http://gialaicamera.com/category/product/51-giai-phap-tong-dai-tron-goi.html" class="active">Tổng đài nội bộ</a>
				</li>
			</ul>
		</div>
		<div class="quicktabs_main quicktabs-style-basic">
			<div  id="list-product" class="quicktabs-tabpage ">
				<div id="block-views-sp-khuyen-mai-laptop" class="block block-views">
					<div class="content">
						<div class="view view-sp-khuyen-mai view-id-sp_khuyen_mai view-display-id-laptop view-dom-id-fdde1bfca4b55f44718e664073a8b7fb">
							<div class="view-content">
                                <?php
                                $cc1 = 1;
                                foreach($listpromo as $np)
                                {
                                ?>
                                    <div class="views-row views-row-<?php echo $cc1;?> views-row-odd">
                                        <div class="views-field views-field-title">
										<span class="field-content">
											<a href="<?php echo sitesystem::getInstance()->permalink($np->productid,"product");?>"><?php echo $np->product_title;?></a>
										</span>
                                        </div>
                                        <div>
                                            <div class="product_home_image">
                                                <a href="<?php echo sitesystem::getInstance()->permalink($np->productid,"product");?>">
                                                    <img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($np->productid);?>" width="200" height="155" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product_home_price">
                                            <strong>Giá: </strong>    <span><?php echo number_format($np->product_price, 0, ',', '.');?> VND</span>
                                        </div>
                                        <div>

                                            <div class="km">Khuyến mại: <?php echo sitesystem::getInstance()->get_promo($np->product_promoid);?></div>
                                        </div>
                                        <div>
                                            <div>
                                                <form action="<?php echo XC_URL;?>/cart/update" method="post" id="uc-product-add-to-cart-form-352" accept-charset="UTF-8">
                                                    <div>
                                                        <input type="hidden" name="productqty" value="1" />
                                                        <input type="hidden" name="cartadd" value="true" />
                                                        <input type="hidden" name="productid" value="<?php echo $np->productid;?>" />
                                                        <div class="form-actions form-wrapper" id="edit-actions">
                                                            <input class="node-add-to-cart form-submit" type="submit" id="edit-submit-352" name="op" value="Mua hàng" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    $cc1++;
                                }
                                ?>
							</div>
							<div class="view-footer">
								<p><a href="http://localhost/pcshop/san-pham-khuyen-mai-laptop.html">Xem hết &gt;&gt;</a></p>
							</div>
						</div>  
					</div>  
				</div> 
				<!-- /.block -->
			</div>
		</div>

	</div>  
</div>
  
</div> <!-- /.block -->
<div id="block-block-4" class="block block-block">

      
  <div class="content">
    <p><img alt="" src="<?php echo $template_path;?>/images/iphone_4_banner_learn_more.jpg" style="width: 750px; height: 190px;" /></p>
  </div>
  
</div> <!-- /.block -->
<div id="block-quicktabs-quicktab-sp-moi-ve" class="block block-quicktabs">

        <h2 >Sản phẩm mới về</h2>
    
  <div class="content">
    <div class="quicktabs-wrapper quicktabs-style-basic">
        <div class="item-list">
            <ul class="quicktabs-tabs quicktabs-style-basic">
                <li class="active first"><a href="http://gialaicamera.com/category/product/44-camera-quan-sat.html" class="active">Camera Quan Sát</a></li>
                <li><a href="http://gialaicamera.com/category/product/51-giai-phap-tong-dai-tron-goi.html" class="active">Tổng đài</a></li>
                <li><a href="http://gialaicamera.com/category/product/55-bao-trom-trong-nha.html" class="active">Báo trộm </a></li>
                <li class="last"><a href="http://gialaicamera.com/category/product/72-may-in.html" class="active">Thiết bị văn phòng</a></li>
</ul></div><div id="quicktabs-container-quicktab_sp_moi_ve" class="quicktabs_main quicktabs-style-basic"><div  id="quicktabs-tabpage-quicktab_sp_moi_ve-0" class="quicktabs-tabpage "><div id="block-views-sp-moi-ve-laptop" class="block block-views">

      
  <div class="content">
    <div class="view view-sp-moi-ve">
        <div class="view-content">
          <?php
          $cc = 1;
          foreach($listnewproduct as $pp)
          {
          ?>
          <div class="views-row views-row-<?php echo $cc;?> views-row-odd views-row-first">

              <div class="views-field views-field-title">
                  <span class="field-content">
                      <a href="<?php echo sitesystem::getInstance()->permalink($pp->productid,"product");?>"><?php echo $pp->product_title;?></a>
                  </span>
              </div>
              <div>
                  <div class="product_home_image">
                      <a href="<?php echo sitesystem::getInstance()->permalink($pp->productid,"product");?>">
                          <img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($pp->productid);?>" height="112px" alt="" />
                      </a>
                  </div>
              </div>
              <div class="product_home_price">
                  <strong>Giá: </strong>    <span><?php echo number_format($pp->product_price, 0, ',', '.');?> VND</span>
              </div>
              <div>
                  <?php
                    if($pp->product_promoid)
                  {
                      ?>
                  <div class="km">Khuyến mãi: <?php echo sitesystem::getInstance()->get_promo($pp->product_promoid);?></div>
                  <?php
                  }
                  else
                  {
                      ?>
                      <div class="km">Bảo hành: <?php echo $pp->product_warranty;?> tháng</div>
                  <?php
                  }
                    ?>
              </div>
              <div>
              <form action="<?php echo XC_URL;?>/cart/update" method="post" id="uc-product-add-to-cart-form-352--2" accept-charset="UTF-8">
                  <div>
                      <input type="hidden" name="productqty" value="1" />
                      <input type="hidden" name="cartadd" value="true" />
                      <input type="hidden" name="productid" value="<?php echo $pp->productid;?>" />
                          <div class="form-actions form-wrapper" id="edit-actions--13">
                              <input class="node-add-to-cart form-submit" type="submit" id="edit-submit-352" name="op" value="Mua hàng" />
                          </div>
                  </div>
              </form>
              </div>
          </div>
          <?php
          $cc++;
      }
      ?>

  
  
    </div>

</div>  </div>
  
</div> <!-- /.block -->
</div></div></div>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>           
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		