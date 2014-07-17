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
                                        <div class="messages status">
<strong><?php echo $status;?></strong>. Click <a href="<?php echo XC_URL;?>">vào đây</a> để trở về trang chủ.</div>                                                             <!--<h1 class="page-title"></h1>-->
                                                                                                                        <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
      </div>
  
</div> <!-- /.block -->
 <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>           
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		