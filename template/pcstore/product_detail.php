<?php include "header.php";
$productinfo = $productinfo;
?>
<script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.js?v=1.4.4"></script>
<script type="text/javascript" src="<?php echo $template_path;?>/js/jquery.once.js?v=1.2"></script>
<script type="text/javascript" src="<?php echo $template_path;?>/js/rate.js?myr4u1"></script>
<script type="text/javascript" src="<?php echo $template_path;?>/js/fivestar.js?myr4u1"></script>
<script type="text/javascript" src="<?php echo $template_path;?>/js/lib.js?myr4u1"></script>
<script type="text/javascript" src="<?php echo $template_path;?>/js/tabs.js?myr4u1"></script>
<script type="text/javascript" src="<?php echo $template_path;?>/js/custom.js?myr4u1"></script>
<link href="<?php echo $template_path;?>/css/fivestar.css" rel="stylesheet" />
<link href="<?php echo $template_path;?>/css/rating.css" rel="stylesheet" />
<link href="<?php echo $template_path;?>/css/rate.css" rel="stylesheet" />
</head>

<body class="html front not-logged-in one-sidebar sidebar-first page-node">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=628049280613920&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                    <div class="region region-content">
                        <div id="block-system-main" class="block block-system">
                            <div class="content">
                                <div class="product-detail-left">
                                    <div class="image-large">
                                        <img src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($productinfo->productid);?>" alt="<?php echo $productinfo->product_title;?>" title="<?php echo $productinfo->product_title;?>">
                                    </div>
                                    <div class="images-thumb">

                                    <?php echo product::getInstance()->get_product_images($productinfo->productid);?>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $(".clb-slide").colorbox({ rel: 'clb-slide'});
                                            });
                                        </script>
        </div>
    <!--        <a rel="shadowbox" href="">
            </a>-->
    </div>
    <div class="product-detail-info">
        <div class="detail_pro">
            <h1><?php echo $productinfo->product_title;?></h1>
        </div>
        <div class="dooter"></div>
        <div style="font-size: 12px">Nhà sản xuất: <?php echo product::getInstance()->get_manufacturer_info($productinfo->product_manufaceturer);?></div>
        <div class="price_detail">
            <span><?php echo number_format($productinfo->product_price, 0, ',', '.');?> VND</span>
            <font color="#999999" style="font-size:12px">(Chưa bao gồm VAT)</font>
        </div>
        <div class="infopro">
            <div class="in-stock">
                <strong>Kho hàng: </strong>
                <?php
                if($productinfo->product_quantily)
                {
                ?>
                    Còn hàng (Chỉ còn: <?php echo $productinfo->product_quantily;?> sản phẩm)
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

            <div class="baohanh">
                <strong>Bảo hành: </strong><?php echo $productinfo->product_warranty;?> Tháng            </div>

            <div class="khuyenmai">
                                    <strong style="color:red">Khuyến mãi:</strong>
                <?php echo sitesystem::getInstance()->get_promo($productinfo->product_promoid);?>.                            </div>

            <div class="view">
                <strong>Lượt xem: </strong>
                <?php echo $productinfo->product_view;?>            </div>
			<div class="view">
                <strong>Shortlink: </strong>
                <?php 
					$vurl = file_get_contents('http://vurl.us/api.php?url=http://gialaicamera.com'.$_SERVER['REQUEST_URI']);
				?>    <a href="<?php echo $vurl;?>" alt="<?php echo $productinfo->product_title;?>"><?php echo $vurl;?></a>        </div>
			<div><div class="fb-like" data-href="<?php echo "http://gialaicamera.com".$_SERVER['REQUEST_URI'];?>" data-width="300px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></div>
			
        </div>        
    </div>
    <div class="clear"></div>    
    <div class="ho-tro-kh">
        <p class="goimuasp">Hỗ trợ mua hàng: <strong style="color: #ff0000;">059.3.832.842 ext: 803</strong><br>
            Hỗ trợ trực tuyến 
			<a href="ymsgr:SendIM?binhxiao">
                <img src="http://opi.yahoo.com/online?u=binhxiao&amp;m=g&amp;t=1&amp;l=us"></a>
				<a href="skype:live:binh_67?chat"><img src="http://www.skypeassets.com/i/scom/images/skype-buttons/chatbutton_16px.png"></a>
				<a href="skype:thanhnga3011?chat"><img src="http://www.skypeassets.com/i/scom/images/skype-buttons/chatbutton_16px.png"></a>
        </p>
        <p class="amigocamket">
            Chúng tôi cam kết sản phẩm này là chính hãng.
            <br>
            Miễn phí vận chuyển cho đơn hàng > 5tr.
        </p>
        <div class="add-to-cart">
            <form action="<?php echo XC_URL?>/cart/update" method="post" id="uc-product-add-to-cart-form-318" accept-charset="UTF-8">
                <div>
                    <input type="hidden" name="productqty" value="1" />
                    <input type="hidden" name="cartadd" value="true" />
                    <input type="hidden" name="productid" value="<?php echo $productinfo->productid;?>" />
                    <div class="form-actions form-wrapper" id="edit-actions">
                        <input class="node-add-to-cart form-submit" type="submit" id="edit-submit-318" name="op" value="Mua hàng"></div></div></form></div>    </div>
    <div class="product_options">
        <div id="tabbedPanels">
                        <ul class="ttabs">
                <li class="active"><a href="#tab1">Thông tin sản phẩm</a></li>                <li class=""><a href="#tab2">Thông số kỹ thuật</a></li>
                <li class=""><a href="#tab3">Ý kiến khách hàng</a></li>
            </ul>
            <div class="tab_container">
                
                                <div id="tab1" class="tab_content" style="display: block;"><?php echo $productinfo->product_description;?>
								<br>
								<p class="automated_seo_text">
    Mua <strong><?php echo $productinfo->product_title;?></strong> với giá tốt tại Gia Lai Camera. Thanh toán và vận chuyển tận nơi miễn phí cho mọi dòng sản phẩm bao gồm cả <strong>Thiết bị viễn thông, an ninh</strong>. Tư vấn và lắp đặt <strong>thiết bị an ninh</strong>, <strong>viễn thông</strong> trên toàn quốc.</p>
								</div>
								<div id="tab2" class="tab_content" style="display: none;">
                <?php
                $feature = product::getInstance()->get_feature_info($productinfo->productid);
                ?>
					<div class="field field-name-body field-type-text-with-summary field-label-hidden">
						<div class="field-items">
							<div class="field-item even" property="content:encoded">
								<table border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td colspan="2" style="width:541px;height:17px;">
												<p class="rtecenter"><strong>Bộ vi xử lý (CPU)</strong></p>
											</td>
										</tr>
										<tr>
											<td style="width:213px;height:17px;">
												<p class="rtecenter">Tên bộ vi xử lý</p>
											</td>
											<td style="width:328px;height:17px;">
												<p class="rtecenter"><?php echo $feature->cpu;?></p>
											</td>
										</tr>
										<tr>
											<td style="width:213px;height:17px;">
												<p class="rtecenter">Bộ nhớ đệm</p>
											</td>
											<td style="width:328px;height:17px;">
												<p class="rtecenter"><?php echo $feature->cache;?></p>
											</td>
										</tr>
										<tr>
											<td colspan="2" style="width:541px;height:17px;">
												<p class="rtecenter"><strong>Bộ nhớ trong (RAM Laptop)</strong></p>
											</td>
										</tr>
										<tr>
											<td style="width:213px;height:17px;">
												<p class="rtecenter">Dung lượng</p>
											</td>
											<td style="width:328px;height:17px;">
												<p class="rtecenter"><?php echo $feature->ram;?></p>
											</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Ổ cứng (HDD Laptop)</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Dung lượng</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><strong><?php echo $feature->hdd;?></strong></p>
										</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Hiển thị</strong><strong> (Màn hình Laptop)</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Màn hình</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->screen;?></p>
										</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Đồ Họa (VGA)</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Bộ xử lý</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><strong><?php echo $feature->graphic;?></strong></p>
										</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Kết nối (Network)</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Wireless</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->wireless;?></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Bluetooth</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->bluetooth;?></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">3G/ Wimax (4G)</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">&nbsp;</p>
										</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Giao tiếp mở rộng</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Kết nối USB</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">USB 3.0</p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Kết nối HDMI/ VGA</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">có</p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Khe cắm thẻ nhớ</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">8 in 1</p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Tai nghe</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">1x jack 3.5mn</p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Camera&nbsp;</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->camera;?></p>
										</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Pin Laptop</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Dung lượng pin</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->battery;?></p>
										</td>
										</tr><tr><td colspan="2" style="width:541px;height:17px;">
										<p class="rtecenter"><strong>Hệ điều hành (Operating System)</strong></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Hệ điều hành đi kèm</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->os;?></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Hệ điều hành tương thích</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">Windows 7, Windows 8</p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Trọng Lượng</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter">2.0Kg</p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Màu sắc</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->color;?></p>
										</td>
										</tr><tr><td style="width:213px;height:17px;">
										<p class="rtecenter">Xuất xứ</p>
										</td>
										<td style="width:328px;height:17px;">
										<p class="rtecenter"><?php echo $feature->origin;?></p>
										</td>
</tr></tbody></table><p class="rtecenter">&nbsp;</p>
</div></div></div></div>
                <div id="tab3" class="tab_content" style="display: none;">
                    <div class="rating_wrapper">
                        <div class="detail-info rating">
                            <span class="detail-info-label">Đánh giá:</span>
                            <div class="rate-widget-1 rate-widget clear-block rate-average rate-widget-fivestar rate-946c3c6409895c94d8b4b4966fadd218 rate-processed" id="rate-node-318-1-1">
							<div class="rate-ex2-cnt">
            <div id="1" class="rate-btn-1 rate-btn"></div>
            <div id="2" class="rate-btn-2 rate-btn"></div>
            <div id="3" class="rate-btn-3 rate-btn"></div>
            <div id="4" class="rate-btn-4 rate-btn"></div>
            <div id="5" class="rate-btn-5 rate-btn"></div>
        </div>
                                <div id="thankforvote" style="display: none;">
                                    Cảm ơn bạn đã gửi ý kiến đánh giá giúp chúng tôi hỗ trợ khách hàng tốt hơn.

                                </div>
		<div class="rate-info">
            <?php echo product::getInstance()->productrate($productinfo->productid);?>

		</div></div></div>
                    </div>
                                    </div>
            </div>
        </div>
    </div>

    <div class="product_hot left">
        <div class="tabNewsHotL left">
            <h2 class="heading">Sản phẩm được quan tâm</h2>
        </div>
        <?php
        $listbyview = product::getInstance()->get_list_product_by_view(3);
        ?>
        <div class="tabNewsHotR left"></div>
            <div class="content-holder">
                <div class="box_pro_quantam left">
                    <?php
                    foreach($listbyview as $pro)
                    {
                        ?>
						<div class="related-product">
							<div class="image">
								<a href="<?php echo sitesystem::getInstance()->permalink($pro->productid,"product");?>">
									<img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($pro->productid);?>" width="125" height="105" alt="" title="">                </a>
							</div>
							<div class="name">
								<a href="<?php echo sitesystem::getInstance()->permalink($pro->productid,"product");?>"><?php echo $pro->product_title;?></a>
							</div>
							<div class="price">Giá: <span><?php echo number_format($pro->product_price, 0, ',', '.');?> VND</span></div>
						</div>  
                    <?php
                    }
                    ?>
                          
			

    </div></div></div>    
    <div class="product_hot left"><div class="tabNewsHotL left"><h2 class="heading">Sản phẩm cùng mức giá</h2></div>
        <div class="tabNewsHotR left"></div>
        <?php
        $listbyprice = product::getInstance()->get_list_product_by_price($productinfo->product_price,20);
        ?>
            <div class="content-holder"><div class="box_pro_cungmuc left">    
				<?php
                    foreach($listbyprice as $pri)
                    {
                        ?>
						<div class="related-product">
							<div class="image">
								<a href="<?php echo sitesystem::getInstance()->permalink($pri->productid,"product");?>">
									<img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($pri->productid);?>" width="125" height="105" alt="" title="">                </a>
							</div>
							<div class="name">
								<a href="<?php echo sitesystem::getInstance()->permalink($pri->productid,"product");?>"><?php echo $pri->product_title;?></a>
							</div>
							<div class="price">Giá: <span><?php echo number_format($pri->product_price, 0, ',', '.');?> VND</span></div>
						</div>  
                    <?php
                    }
                    ?>			
               </div></div></div>

      </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                                    <aside id="sidebar-second" role="complementary">
                        <div class="region region-sidebar-second">
  <div id="block-views-san-pham-cung-hang-block" class="block block-views">

        <h2>Sản phẩm cùng hãng</h2>
    
  <div class="content">
    <div class="view view-san-pham-cung-hang view-id-san_pham_cung_hang view-display-id-block view-dom-id-c4fc723669d20653b22a55ddff0d2e7f">
        <?php
        $listbymanu = product::getInstance()->get_list_product_by_manufaceturer($productinfo->product_manufaceturer,10);
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
  
  
  
  
  <script>
        // rating script
        $(function(){ 
            $('.rate-btn').hover(function(){
                $('.rate-btn').removeClass('rate-btn-hover');
                var therate = $(this).attr('id');
                for (var i = therate; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-hover');
                };
            });
                            
            $('.rate-btn').click(function(){    
                var therate = $(this).attr('id');
                var dataRate = 'act=rate&post_id=<?php echo $productinfo->productid; ?>&rate='+therate; //
                $('.rate-btn').removeClass('rate-btn-active');
                for (var i = therate; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-active');
                };
                $.ajax({
                    type : "POST",
                    url : "<?php echo XC_URL;?>/product/ajaxrate",
                    data: dataRate,
                    success:function(){
					$("#thankforvote").fadeIn(200);
					}
                });
                
            });
        });
    </script>

  
</div>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                    </aside>  <!-- /#sidebar-first -->
                            </div>           
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		