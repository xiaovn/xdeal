<?php include "header.php";
?>
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
                                                                                                        <!--<h1 class="page-title"></h1>-->
                                                                                                                        <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <div id="node-65" class="node node-article node-full"  typeof="sioc:Item foaf:Document">	
                <h1 class="page-title">
            <?php echo $news2->newstitle;?>  </h1>
                    <span class="submitted"><span property="dc:date dc:created" content="<?php echo $news2->newspostdate;?>" datatype="xsd:dateTime" rel="sioc:has_creator">Gửi bởi <span class="username" xml:lang="" about="" typeof="sioc:UserAccount" property="foaf:name"><?php echo sitesystem::getInstance()->get_user_info($news2->newsauthor,"username");?></span> lúc <?php echo $news2->newspostdate;?></span> </span>
        <div class="content clearfix">
        <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items">
		<div class="field-item even" property="content:encoded">
		<?php echo $news2->newscontent;?>
</div>
</div>
</div>    </div>
    <div class="clearfix"></div>
    </div>
  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                </section> <!-- /#main -->
                            </div>         
        </div>
        <!-- start footer -->
		<?php include "footer.php";?>
        <!-- end footer -->
		