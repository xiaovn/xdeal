<div id="head">
                <div class="region region-header">
  <div id="block-uc-cart-cart" class="block block-uc-cart">

        <h2 ><a href="<?php echo XC_URL;?>/cart"><span class="cart-block-icon-empty" title="View your shopping cart."></span></a><span class="cart-block-title-bar">Giỏ hàng</span></h2>
    
  <div class="content">
    <div class="cart-block-summary"><table><tbody><tr><td class="cart-block-summary-items"><span class="num-items">
                        <?php

                        if(isset($_SESSION['spcount']))
                        {
                            echo $_SESSION['spcount'];
                        }
                        else
                        {
                            echo "0";
                        }
                        ?></span> sản phẩm</td><td class="cart-block-summary-total"><label>Tổng tiền:</label> <span class="uc-price"><?php

                        if(isset($_SESSION['total']))
                        {
                            echo number_format($_SESSION['total'], 0, ',', '.');
                        }
                        else
                        {
                            echo "0";
                        }
                        ?> VND</span></td></tr></tbody></table></div>  </div>
  
</div> <!-- /.block -->
<div id="block-views-exp-advansearch-page" class="block block-views">

        <h2 >Tìm kiếm sản phẩm</h2>
    
  <div class="content">
    <form action="<?php echo XC_URL;?>/search" method="post" id="views-exposed-form-advansearch-page" accept-charset="UTF-8"><div><div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
          <div id="edit-name--2-wrapper" class="views-exposed-widget views-widget-filter-title">
                        <div class="views-widget">
          <div class="form-item form-type-textfield form-item-name">
 <input type="text" id="edit-name--2" name="keyword" value="" size="30" maxlength="128" class="form-text" />
</div>
        </div>
              </div>
          <div id="edit-cat-wrapper" class="views-exposed-widget views-widget-filter-cat">
                        <div class="views-widget">
          <div class="form-item form-type-select form-item-cat">
 <select id="edit-cat" name="catid" class="form-select">
     <option value="All" selected="selected">- Chọn danh mục -</option>
      <?php
      $listcat = product::getInstance()->get_category(0);
      foreach($listcat as $cat)
      {
          ?>
          <option value="<?php echo $cat->catid;?>"><?php echo $cat->catname;?></option>
     <?php
      }
      ?>
     </select>
</div>
        </div>
              </div>
                    <div class="views-exposed-widget views-submit-button">
      <input type="submit" id="edit-submit-advansearch" name="" value="Tìm kiếm" class="form-submit" />    </div>
      </div>
</div>
</div></form>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
            </div>