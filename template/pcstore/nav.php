<?php
/**
 * Project: pcshop.
 * File: nav.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 19:21 - 27/02/2014
 * Website: www.xiao.vn
 */
 ?>
 <nav id="main-menu"  role="navigation">
            <a class="nav-toggle" href="#">Navigation</a>
            <div class="menu-navigation-container">
                <ul class="menu"><li class="first leaf"><a href="<?php echo XC_URL;?>" title="" class="active">Trang chủ</a></li>
				<li class="expanded"><a href="#" title="">Camera an ninh</a>
				 <?php echo sitesystem::getInstance()->get_menu(1);?>
            </li>
<li class="expanded"><a href="#" title="">Tổng đài nội bộ</a><?php echo sitesystem::getInstance()->get_menu(2);?></li>
<li class="expanded"><a href="#" title="">Báo trộm - báo cháy</a><?php echo sitesystem::getInstance()->get_menu(3);?></li>
<li class="expanded"><a href="#" title="">Máy chấm công</a><?php echo sitesystem::getInstance()->get_menu(4);?></li>
<li class="expanded"><a href="#" title="">Thiết bị viễn thông</a><?php echo sitesystem::getInstance()->get_menu(5);?></li>
<li class="expanded"><a href="#" title="">Thiết bị mạng</a><?php echo sitesystem::getInstance()->get_menu(6);?></li>
<li class="last expanded"><a href="#" title="">Máy văn phòng</a><?php echo sitesystem::getInstance()->get_menu(7);?></li>
</ul>            </div>
            <div class="clear"></div>
        </nav>