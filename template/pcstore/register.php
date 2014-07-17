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
                                                                                                        <h1 class="page-title" style="margin-left: 10px;">Đăng ký</h1>
				<hr>                                                         <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <form class="user-info-from-cookie" enctype="multipart/form-data" action="<?php echo XC_URL;?>/account/register" method="post" id="user-register-form" accept-charset="UTF-8"><div><div id="edit-account" class="form-wrapper"><div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Tên đăng nhập <span class="form-required" title="This field is required.">*</span></label>
 <input class="username form-text required" type="text" id="edit-name" name="username" value="" size="60" maxlength="60">
<div class="description">Cho phép có khoảng trắng, dấu chấm câu, dấu gạch ngang, dấu nháy đơn và dấu gạch dưới.</div>
</div>
<div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Mật khẩu<span class="form-required" title="This field is required.">*</span></label>
 <input class="username form-text required" type="password" id="edit-name" name="password" value="" size="60" maxlength="60">
</div>
<div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Nhập lại mật khẩu <span class="form-required" title="This field is required.">*</span></label>
 <input class="username form-text required" type="password" id="edit-name" name="repass" value="" size="60" maxlength="60">
</div>
<div class="form-item form-type-textfield form-item-mail">
  <label for="edit-mail">Địa chỉ e-mail <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-mail" name="email" value="" size="60" maxlength="254" class="form-text required">
<div class="description">Nhập địa chỉ e-mail tồn tại. Tất cả e-mail từ hệ thống sẽ được gửi tới địa chỉ này. Địa chỉ e-mail này sẽ không được hiển thị ra ngoài và chỉ được sử dụng để lấy lại mật khẩu mới hoặc nhận tin tức, thông báo nếu bạn có yêu cầu.</div>
</div>
<input type="hidden" name="timezone" value="Asia/Ho_Chi_Minh">
</div><input type="hidden" name="form_build_id" value="form-2DNsk3unUeMxnpSpZQYbLSeRyCavtp-oowGwx_1_TP4">
<input type="hidden" name="form_id" value="user_register_form">
<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="sumitregsiter" value="Tạo tài khoản mới" class="form-submit"></div></div></form>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>           
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		