<aside id="sidebar-first" role="complementary">
                    <div class="region region-sidebar-first">
  <div id="block-block-1" class="block block-block">

      
  <div class="content">
    <p><a href="#" target="_blank"><img alt="" src="<?php echo $template_path;?>/images/500-xperia-docquyen.png" style="width: 204px; height: 145px;" /></a></p>
  </div>
  
</div> <!-- /.block -->
<div id="block-block-2" class="block block-block">

        <h2 >Hỗ trợ trực tuyến</h2>
    
  <div class="content">
    <div class="support_online">
<div class="item">
<div class="label">
			<a href="<?php echo XC_URL?>/contact">KD 1</a>
			</div>
<div class="yahooicon">
			<a href="ymsgr:SendIM?binhxiao"><img border="0" src="http://opi.yahoo.com/online?u=binhxiao&amp;m=g&amp;t=1&amp;l=us" /></a>&nbsp;&nbsp;&nbsp;<a href="skype:live:binh_67?chat"><img src="http://www.skypeassets.com/i/scom/images/skype-buttons/chatbutton_16px.png"></a></div>
<div class="yahooicon">
    0988.027.159&nbsp;&nbsp;&nbsp; (Mr. Bình)</div>
</div>
<br>
<div class="item">
<div class="label">
			<a href="<?php echo XC_URL?>/contact">KD 2</a>
			</div>
<div class="yahooicon">
			<a href="ymsgr:SendIM?ngongak842003"><img border="0" src="http://opi.yahoo.com/online?u=ngongak842003&amp;m=g&amp;t=1&amp;l=us" /></a>&nbsp;&nbsp;&nbsp;<a href="skype:thanhnga3011?chat"><img src="http://www.skypeassets.com/i/scom/images/skype-buttons/chatbutton_16px.png"></a></div>
<div class="yahooicon">
    0935.532.055 &nbsp;&nbsp;&nbsp; (Mrs. Nga)</div>
</div>
<br>
<div class="item">
<div class="label">
			<a href="<?php echo XC_URL?>/contact">KD 3</a>
			</div>
<div class="yahooicon">
			<a href="ymsgr:SendIM?gialaicamera"><img border="0" src="http://opi.yahoo.com/online?u=gialaicamera&amp;m=g&amp;t=1&amp;l=us" /></a>&nbsp;&nbsp;&nbsp;<a href="skype:khangvan44?chat"><img src="http://www.skypeassets.com/i/scom/images/skype-buttons/chatbutton_16px.png"></a></div>
<div class="yahooicon">
    0167.3284.144 &nbsp;(Mr. Khang)</div>
</div>
<div class="support_title">
		Chăm sóc khách hàng</div>
        <div class="item">
<div class="label">
			<a href="<?php echo XC_URL?>/contact">CSKH</a>
			</div>
<div class="yahooicon">
			<a href="ymsgr:SendIM?kenzakivn"><img border="0" src="http://opi.yahoo.com/online?u=kenzakivn&amp;m=g&amp;t=1&amp;l=us" /></a>&nbsp;&nbsp;&nbsp;<a href="skype:kenzakivn?chat"><img src="http://www.skypeassets.com/i/scom/images/skype-buttons/chatbutton_16px.png"></a></div>
<div class="yahooicon">
    059.3.832.842 &nbsp;(CSKH 24/7)</div>
</div>
</div>
<p> </p>
  </div>
  
</div> <!-- /.block -->
<div id="block-user-login" class="block block-user">

        <h2 >Đăng nhập tài khoản</h2>
		
    
  <div class="content">
  <?php if(isset($_SESSION['uID']) && $_SESSION['uID'] != "")
		{
			?>
			Xin chào: <strong><?php echo $_SESSION['uUsername'];?></strong>
			<div class="item-list">
				<ul>
					<li class="first"><a href="#" title="Đơn hàng">Quản lý đơn đặt hàng</a></li>
					<li><a href="#" title="Thông tin tài khoản.">Quản lý tài khoản</a></li>
					<?php if(isset($_SESSION['uGroup']) && $_SESSION['uGroup'] == 7) { ?><li><a href="<?php echo XC_URL;?>/admin" title="Trình quản lý">Admin Panel</a></li> <?php  } ?>
					<li class="last"><a href="<?php echo XC_URL;?>/account/logout" title="Đăng xuất">Đăng xuất</a></li>
</ul></div>
			<?php
		}
		else
		{
		?>
    <form action="<?php echo XC_URL;?>/account/login" method="post" id="user-login-form" accept-charset="UTF-8"><div><div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Tên đăng nhập <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-name" name="username" value="" size="15" maxlength="60" class="form-text required" />
</div>
<div class="form-item form-type-password form-item-pass">
  <label for="edit-pass">Mật khẩu <span class="form-required" title="This field is required.">*</span></label>
 <input type="password" id="edit-pass" name="password" size="15" maxlength="128" class="form-text required" />
</div>
<div class="item-list"><ul><li class="first"><a href="<?php echo XC_URL;?>/account/register" title="Create a new user account.">Tạo tài khoản mới</a></li>
<li class="last"><a href="<?php echo XC_URL;?>/account/forgot" title="Request new password via e-mail.">Lấy lại mật khẩu</a></li>
</ul></div>
<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Đăng nhập" class="form-submit" /></div></div></form> 
<?php
}
?>
 </div>
  
</div> <!-- /.block -->
<div id="block-views-tin-tuc-block" class="block block-views">

        <h2 >Tin tức</h2>
    
  <div class="content">
    <div class="view view-tin-tuc view-id-tin_tuc view-display-id-block view-dom-id-bfdd0d0b527b7721ce3ba7b99be51efc">
        
    <?php
    $listnews = sitesystem::getInstance()->get_list_news(3);
    ?>
  
      <div class="view-content">
      <div class="item-list">    
		<ul>
            <?php
            $cn = 1;
            foreach($listnews as $news)
            {
                ?>
                <li class="views-row views-row-<?php echo $cn;?> views-row-odd views-row-first">
                    <div>        <div class="imgNews left">
					<a href="<?php echo XC_URL;?>/news?post=<?php echo $news->newsid;?>"><img typeof="foaf:Image" src="<?php echo $upload_path;?>/news/<?php echo $news->newsthumbimages;?>" width="70" height="50" alt="" /></a></div>  </div>
                    <div>        <div class="titleNews left"><a href="<?php echo XC_URL;?>/news?post=<?php echo $news->newsid;?>"><?php echo $news->newstitle;?></a></div>  </div></li>
            <?php
            }
            ?>
      </ul></div>    </div>
  
  
  
  
  
  
</div>  </div>
  
</div> <!-- /.block -->
<div id="block-block-3" class="block block-block">

      
  <div class="content">
    <p><img alt="" src="<?php echo XC_URL;?>/banner/bannernho.jpg" style="width: 200px;" /></p>
  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </aside>  