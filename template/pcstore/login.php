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
				<h1 class="page-title" style="margin-left: 10px;">Đăng nhập</h1>
				<hr>
                                                                                                                        <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <form action="<?php echo XC_URL;?>/account/login" method="post" id="user-login" accept-charset="UTF-8"><div><div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Tên đăng nhập <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required">
<div class="description">Điền tên đăng nhập của bạn</div>
</div>
<div class="form-item form-type-password form-item-pass">
  <label for="edit-pass">Mật khẩu <span class="form-required" title="This field is required.">*</span></label>
 <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
<div class="description">Điền mật khẩu</div>
</div>
<input type="hidden" name="form_id" value="user_login">
<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Đăng nhập" class="form-submit"></div></div></form>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>
                            </div>           
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		