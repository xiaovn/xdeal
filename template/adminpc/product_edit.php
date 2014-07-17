<?php include "config.php";?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link rel="dns-prefetch" href="//themes.googleusercontent.com" />
	
	<link rel="dns-prefetch" href="//ajax.googleapis.com" />
	<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
	<link rel="dns-prefetch" href="//agorbatchev.typepad.com" />
	
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Admin Panel - ABC Computer</title>
	<meta name="description" content="Mango is a slick and responsive Admin Template build with modern techniques like HTML5 and CSS3 to be used for backend solutions of any size." />
	<meta name="author" content="Ken Zaki">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<!-- iPhone: Don't render numbers as call links -->
	<meta name="format-detection" content="telephone=no" />
	
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
	
	
	
	
	
	
	
	<!-- The Styles -->
	<!-- ---------- -->
	
	<!-- Layout Styles -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/style.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/grid.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/layout.css">
	
	<!-- Icon Styles -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/icons.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/fonts/font-awesome.css">
	<!--[if IE 8]><link rel="stylesheet" href="css/fonts/font-awesome-ie7.css"><![endif]-->
	
	<!-- External Styles -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery-ui-1.8.21.custom.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.chosen.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.cleditor.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.colorpicker.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.elfinder.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.jgrowl.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/jquery.plupload.queue.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/syntaxhighlighter/shCore.css" />
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/external/syntaxhighlighter/shThemeDefault.css" />
	
	<!-- Elements -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/elements.css">
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/forms.css">
	
	<!-- OPTIONAL: Print Stylesheet for Invoice -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/print-invoice.css">
	
	<!-- Typographics -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/typographics.css">
	
	<!-- Responsive Design -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/media-queries.css">
	
	<!-- Bad IE Styles -->
	<link rel="stylesheet" href="<?php echo $admintemplate_path;?>/css/ie-fixes.css">
	
	
	
	
	
	
	
	<!-- The Scripts -->
	<!-- ----------- -->
	
	
	<!-- JavaScript at the top (will be cached by browser) -->
	
	<!-- Load Webfont loader -->
	<script type="text/javascript">
		window.WebFontConfig = {
			google: { families: [ 'PT Sans:400,700' ] },
			active: function(){ $(window).trigger('fontsloaded') }
		};
	</script>
	<script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script>
	
	<!-- Essential polyfills -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/polyfills/respond.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/polyfills/matchmedia.js"></script>
	<!--[if lt IE 9]><script src="<?php echo $admintemplate_path;?>/js/mylibs/polyfills/selectivizr-min.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="<?php echo $admintemplate_path;?>/js/mylibs/charts/excanvas.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="<?php echo $admintemplate_path;?>/js/mylibs/polyfills/classlist.js"></script><![endif]-->
	
	
	
	<!-- Grab frameworks from CDNs -->
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	
		<!-- Do the same with jQuery UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
	<script>window.jQuery.ui || document.write('<script src="js/libs/jquery-ui-1.8.21.min.js"><\/script>')</script>
	
		<!-- Do the same with Lo-Dash.js -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.4.2/lodash.min.js"></script>
	<script>window._ || document.write('<script src="js/libs/lodash.min.js"><\/script>')</script>
	
	
	
	<!-- scripts concatenated and minified via build script -->
	
	<!-- General Scripts -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.hashchange.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.idle-timer.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.plusplus.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.jgrowl.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.scrollTo.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/jquery.ui.multiaccordion.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/number-functions.js"></script>
	
	<!-- Forms -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.autosize.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.checkbox.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.chosen.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.cleditor.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.colorpicker.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.ellipsis.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.fileinput.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.fullcalendar.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.maskedinput.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.mousewheel.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.placeholder.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.pwdmeter.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.ui.datetimepicker.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.ui.spinner.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/jquery.validate.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/uploader/plupload.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/uploader/plupload.html5.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/uploader/plupload.html4.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/uploader/plupload.flash.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		
	<!-- Charts -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/charts/jquery.flot.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/charts/jquery.flot.orderBars.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/charts/jquery.flot.pie.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/charts/jquery.flot.resize.js"></script>
	
	<!-- Explorer -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/explorer/jquery.elfinder.js"></script>
	
	<!-- Fullstats -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/fullstats/jquery.css-transform.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/fullstats/jquery.sparkline.js"></script>
	
	<!-- Syntax Highlighter -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/syntaxhighlighter/shCore.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/syntaxhighlighter/shAutoloader.js"></script>
	
	<!-- Dynamic Tables -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/dynamic-tables/jquery.dataTables.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/dynamic-tables/jquery.dataTables.tableTools.js"></script>
	
	<!-- Gallery -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/gallery/jquery.fancybox.js"></script>
	
	<!-- Tooltips -->
	<script src="<?php echo $admintemplate_path;?>/js/mylibs/tooltips/jquery.tipsy.js"></script>
	
	<!-- Do not touch! -->
	<script src="<?php echo $admintemplate_path;?>/js/mango.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/plugins.js"></script>
	<script src="<?php echo $admintemplate_path;?>/js/script.js"></script>
	
	<!-- Your custom JS goes here -->
	<script src="<?php echo $admintemplate_path;?>/js/app.js"></script>
	
	<!-- end scripts -->
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<!----------------------->
	<!-- Some dialogs etc. -->

	<!-- The loading box -->
	<div id="loading-overlay"></div>
	<div id="loading">
		<span>Loading...</span>
	</div>
	<!-- End of loading box -->
	
	<!-- The lock screen -->
	<div id="lock-screen" title="Screen Locked">
		
		<a href="login.html" class="header right button grey flat">Logout</a>
		
		<p>Due to the inactivity of this session, your account was temporarily locked.</p>
		<p>To unlock your account, simply slide the button and enter your password.</p>
		
		<div class="actions">
			<div id="slide_to_unlock">
				<img src="img/elements/slide-unlock/lock-slider.png" alt="slide me" />
				<span>slide to unlock</span>
			</div>
			<form action="#" method="GET" />
				<input type="password" name="pwd" id="pwd" placeholder="Enter your password here..." autocorrect="off" autocapitalize="off" /> <input type="submit" name="send" value="Unlock" disabled="" /> <input type="reset" value="X" />
			</form>
		</div><!-- End of .actions -->
		
	</div><!-- End of lock screen -->
	
	<!-- The settings dialog -->
	<div id="settings" class="settings-content" data-width="450">
	
		<ul class="tabs center-elements">
			<li><a href="#settings-1"><img src="img/icons/packs/fugue/24x24/user-business.png" alt="" /><span>Account Settings</span></a></li>
			<li><a href="#settings-2"><img src="img/icons/packs/fugue/24x24/balloon.png" alt="" /><span>Notifications</span></a></li>
			<li><a href="#settings-3"><img src="img/icons/packs/fugue/24x24/credit-card.png" alt="" /><span>Invoicing</span></a></li>
		</ul>
		
		<div class="change_password">
			<form action="#" method="GET" class="validate" id="settings_password" />
				<p>
					<label for="settings-password">New Password:</label> <input type="password" id="settings-password" class="required strongpw small password meter" />
				</p>
			</form>
			<div class="actions">
				<div class="right">
					<input form="settings_password" type="reset" value="Cancel" class="grey" />
					<input form="settings_password" type="submit" value="OK" />
				</div>
			</div>
		</div><!-- End of .change_password -->
		
		<div class="content">
		
			<div id="settings-1">
				<form action="#" method="GET" />
					<p>
						<label for="settings-name">Name:</label> <input type="text" id="settings-name" class="medium" />
					</p>
					<p>
						<label for="settings-descr">Descripton:</label> <input type="text" id="settings-descr" class="medium" />
					</p>
					<p class="divider" />
					<p>
						<label for="settings-pw">Password: </label> <input class="grey change_password_button" type="button" id="settings-pw" value="Change Password..." data-lang-changed="Password changed" />
					</p>
				</form>
			</div><!-- End of #settings-1 -->
			
			<div id="settings-2">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				<form action="#" method="GET" />
					<div class="spacer"></div>
					<p class="divider" />
					<div class="spacer"></div>
					<p>
						<label for="settings-email">Email Address:</label> <input type="text" id="settings-email" class="medium" />
					</p>
					<p>
						<label for="settings-interval">Interval: </label>
						<select name="settings-interval" id="settings-interval" data-placeholder="Choose an Interval">
							<option value="" />
							<option value="Never" />Never
							<option value="Daily" />Daily
							<option value="Weekly" />Weekly
							<option value="Monthly" />Monthly
							<option value="Yearly" />Yearly
						</select>
					</p>
				</form>
			</div><!-- End of #settings-2 -->
			
			<div id="settings-3">
				<form action="#" method="GET" />
					<p>
						<label for="settings-card-number">Card number:</label> <input type="text" id="settings-card-number" class="medium" />
					</p>
					<p>
						<label for="settings-cvv">CVV:</label> <input type="text" id="settings-cvv" class="medium" />
					</p>
					<p>
						<label for="settings-expiration">Expiration: </label>
						<select sname="settings-expiration" id="settings-expiration" data-placeholder="Choose an Expiration">
							<option value="" />
							<option value="2012" />2012
							<option value="2013" />2013
							<option value="2014" />2014
							<option value="2015" />2015
						</select>
					</p>
				</form>
			</div><!-- End of #settings-3 -->
			
		</div><!-- End of .content -->
		
		<div class="actions">
			<div class="left">
				<button class="grey cancel">Cancel</button>
			</div>
			<div class="right">
				<button class="save">Save</button>
				<button class="hide saving" disabled="">Saving...</button>
			</div>
		</div><!-- End of .actions -->
		
	</div><!-- End of settings dialog -->
	
	<!-- Add Client Example Dialog -->
	<div style="display: none;" id="dialog_add_client" title="Add Client Example Dialog">
		<form action="" class="full validate" />
			<div class="row">
				<label for="d2_username">
					<strong>Username</strong>
				</label>
				<div>
					<input class="required" type="text" name="d2_username" id="d2_username" />
				</div>
			</div>
			<div class="row">
				<label for="d2_email">
					<strong>Email Address</strong>
				</label>
				<div>
					<input class="required" type="text" name="d2_email" id="d2_email" />
				</div>
			</div>
			<div class="row">
				<label for="d2_role">
					<strong>Role</strong>
				</label>
				<div>
					<select style="padding-bottom: 10px" name="d2_role" id="d2_role" class="search required" data-placeholder="Choose a Role">
						<option value="" />
						<option value="Applicant" />Applicant 
						<option value="Member" />Member 
						<option value="Moderator" />Moderator 
						<option value="Administrator" />Administrator 
					</select>
				</div>
			</div>
		</form>
		<div class="actions">
			<div class="left">
				<button class="grey cancel">Cancel</button>
			</div>
			<div class="right">
				<button class="submit">Add User</button>
			</div>
		</div>
	</div><!-- End if #dialog_add_client -->
	
	<script>
	$$.ready(function() {
		$( "#dialog_add_client" ).dialog({
			autoOpen: false,
			modal: true,
			width: 400,
			open: function(){ $(this).parent().css('overflow', 'visible'); $$.utils.forms.resize() }
		}).find('button.submit').click(function(){
			var $el = $(this).parents('.ui-dialog-content');
			if ($el.validate().form()) {
				$el.find('form')[0].reset();
				$el.dialog('close');
			}
		}).end().find('button.cancel').click(function(){
			var $el = $(this).parents('.ui-dialog-content');
			$el.find('form')[0].reset();
			$el.dialog('close');;
		});
		
		$( ".open-add-client-dialog" ).click(function() {
			$( "#dialog_add_client" ).dialog( "open" );
			return false;
		});
	});
	</script>
	<!--  End of Add Client Example Dialog -->
	
	<!-- Message Dialog -->
	<div style="display: none;" id="dialog_message" title="Conversation: John Doe">
		<div class="spacer"></div>
		<div class="messages full chat">
			
			<div class="msg reply">
				<img src="img/icons/packs/iconsweets2/25x25/user-2.png" />
				<div class="content">
					<h3><a href="pages_profile.html">John Doe</a> <span>says:</span><small>3 hours ago</small></h3>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
					et dolore magna aliquyam erat, sed diam voluptua.</p>
				</div>
			</div>
			
			<div class="msg">
				<img src="img/icons/packs/iconsweets2/25x25/user-2.png" />
				<div class="content">
					<h3><a href="pages_profile.html">Peter Doe</a> <span>says:</span><small>5 hours ago</small></h3>
					<p>At vero eos et accusam et justo duo dolores et ea rebum.
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		
		</div><!-- End of .messages -->
		
		<div class="actions">
			<div class="left">
				<input style="width: 330px;" type="text" name="d3_message" id="d3_message" placeholder="Type your message..." />
			</div>
			<div class="right">
				<button>Send</button>
				<button class="grey">Cancel</button>
			</div>
		</div><!-- End of .actions -->
		
	</div><!-- End of #dialog_message -->
	
	<script>
	$$.ready(function() {
		$( "#dialog_message" ).dialog({
			autoOpen: false,
			width: 500,
			modal: true
		}).find('button').click(function(){
			$(this).parents('.ui-dialog-content').dialog('close');
		});
		
		$( ".open-message-dialog" ).click(function() {
			$( "#dialog_message" ).dialog( "open" );
			return false;
		});
	});
	</script>
	<!-- End of Message Dialog -->
	
	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->
	
	<!-- The toolbar at the top -->
	<?php include "toptoolbar.php";?><!-- End of #toolbar -->
	
	<!-- The header containing the logo -->
	<?php include "logoheader.php";?><!-- End of header -->
	
	<!-- The container of the sidebar and content box -->
	<div role="main" id="main" class="container_12 clearfix">
	
		<!-- The blue toolbar stripe -->
		<?php include "maintoolbar.php";?>
		<!-- End of .toolbar-->
		
		<!-- The sidebar -->
		<?php include "sidebar.php";?>
		<!-- End of sidebar -->

		<!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort="true">
﻿			<h1 class="grid_12">Thông tin sản phẩm - Mã sản phẩm: <?php echo $productid;?></h1>

			<form action="?action=update" enctype="multipart/form-data"  method="post" class="grid_12">
				<fieldset>
					<legend>Thông tin sản phẩm</legend>
					<div class="row">
						<label for="f1_disabled">
							<strong>Mã sản phẩm</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $product->productid;?>" disabled name=f1_disabled id=f1_disabled />
						</div>
					</div>
					<div class="row">
						<label for="product_title">
							<strong>Tên sản phẩm</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $product->product_title;?>" name="product_title" id="product_title" />
						</div>
					</div>
					<div class="row">
						<label for="product_category">
							<strong>Danh mục sản phẩm</strong>
						</label>
						<div>
							<select name="product_category" id="product_category" class="search" data-placeholder="<?php echo product::getInstance()->get_category_info($product->product_category);?>">
							<?php
							$listcat = product::getInstance()->get_category("*");
							?>
								<option value=""></option>
                                <?php
								foreach($listcat as $cat)
								{
                                ?>
								<option value="<?php echo $cat->catid;?>"><?php echo $cat->catname;?></option> 
								<?php }?>
							</select>
						</div>
					</div>
					<div class="row not-on-phone">
						<label for="f1_wysiwyg">
							<strong>Mô tả</strong>
						</label>
						<div>
							<textarea class="editor" name="product_description" id="f1_wysiwyg" ><?php echo $product->product_description;?></textarea>
						</div>
					</div>
					<div class="row">
						<label for="f2_select2">
							<strong>Nhà sản xuất</strong>
						</label>
						<div>
							<select name="product_manufaceturer" id="product_manufaceturer" class="search" data-placeholder="<?php echo product::getInstance()->get_manufacturer_info($product->product_manufaceturer);?>">
							<?php
							$listmanu = product::getInstance()->get_list_product_manufaceturer();
							?>
								<option value=""></option>
                                <?php
								foreach($listmanu as $manu)
								{
                                ?>
								<option value="<?php echo $manu->manuid;?>"><?php echo $manu->manuname;?></option>
								<?php }?>
							</select>
						</div>
					</div>
					<div class="row">
						<label for="product_price">
							<strong>Giá</strong>
						</label>
						<div>
							<input data-type="spinner" min=0 max=2000000000 value="<?php echo $product->product_price;?>" id="product_price" name="product_price" />
						</div>
					</div>
					<div class="row">
						<label for="product_warranty">
							<strong>Bảo hành</strong>
							<small>(tháng)</small>
						</label>
						<div>
							<input data-type="spinner" min=0 max=200 value="<?php echo $product->product_warranty;?>" id="product_warranty" name="product_warranty" />
						</div>
					</div>
				
				</fieldset><!-- End of fieldset -->
				
				<fieldset class="not-on-phone">
					<legend>Trạng thái sản phẩm</legend>
					<div class="row">
						<label for="product_quantily">
							<strong>Số lượng trong kho</strong>
						</label>
						<div>
							<input data-type="spinner" min=0 max=200000 value="<?php echo $product->product_quantily - $product->product_discount;?>" id="product_quantily" name="product_quantily" />
						</div>
					</div>
					
					<div class="row">
						<label>
							<strong>Trạng thái</strong>
						</label>
						<div>
							<div><input type="radio" name="product_onsale"  checked=checkd id="f4_rb1" value="1"><label for="f4_rb1">Đang bán</label></div>
							<div><input type="radio" name="product_onsale" id="f4_rb2" value="2"><label for="f4_rb2">Tạm hết hàng</label></div>
							<div><input type="radio" name="product_onsale" id="f4_rb3" value="0"><label for="f4_rb3">Hết hàng</label></div>
						</div>
					</div>
					
					<div class="row">
						<label for="product_promoid">
							<strong>Khuyến mãi</strong>
						</label>
						<div>
							<select name="product_promoid" id="product_promoid" class="search" data-placeholder="<?php echo product::getInstance()->get_promo_detail($product->product_promoid);?>">
							<?php
							$listpromo = product::getInstance()->get_promo_list();
							?>
								<option value=""></option>
                                <?php
								foreach($listpromo as $promo)
								{
                                ?>
								<option value="<?php echo $promo->promoid;?>"><?php echo $promo->promovalue;?></option>
								<?php }?>
							</select>
						</div>
					</div>
						<div class="row not-on-phone">
						<label for="product_image">
							<strong>Ảnh sản phẩm</strong>
						</label>
						<div>
							<input type="file" id="product_image" name="product_image" />
						</div>
					</div>
				</fieldset><!-- End of fieldset -->
                <?php
                $features = product::getInstance()->get_desc_feature($product->productid);
                ?>
				<fieldset>
					<legend>Thông số sản phẩm</legend>
					
					<div class="row">
						<label for="fos">
							<strong>Hệ điều hành</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->os;?>" name="fos" id="fos" />
						</div>
					</div>
					<div class="row">
						<label for="flanguage">
							<strong>Ngôn ngữ</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->language;?>" name="flanguage" id="flanguage" />
						</div>
					</div>
					<div class="row">
						<label for="fcpu">
							<strong>CPU</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->cpu;?>" name="fcpu" id="fcpu" />
						</div>
					</div>
					<div class="row">
						<label for="fcache">
							<strong>Bộ nhớ đệm cache</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->cache;?>" name="fcache" id="fcache" />
						</div>
					</div>
					<div class="row">
						<label for="fram">
							<strong>Bộ nhớ RAM</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->ram;?>" name="fram" id="fram" />
						</div>
					</div>
					<div class="row">
						<label for="fhdd">
							<strong>Ổ cứng</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->hdd;?>" name="fhdd" id="fhdd" />
						</div>
					</div>
					<div class="row">
						<label for="fgraphic">
							<strong>Đồ họa</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->graphic;?>" name="fgraphic" id="fgraphic" />
						</div>
					</div>
					<div class="row">
						<label for="fscreen">
							<strong>Màn hình</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->screen;?>" name="fscreen" id="fscreen" />
						</div>
					</div>
					<div class="row">
						<label for="fusb">
							<strong>USB</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->usb;?>" name="fusb" id="fusb" />
						</div>
					</div>
					<div class="row">
						<label>
							<strong>Các tính năng I/O</strong>
						</label>
						<div>
							<div><input type="checkbox" <?php if($features->audio){?>checked="checked"<?php }?>  name="faudio" id="faudio" /> <label for="faudio">Audio</label></div>
							<div><input type="checkbox" <?php if($features->hdmi){?>checked="checked"<?php }?> name="fhdmi" id="fhdmi" /> <label for="fhdmi">HDMI</label></div>
							<div><input type="checkbox" <?php if($features->memorystick){?>checked="checked"<?php }?> name="fmemorystick" id="fmemorystick" /> <label for="fmemorystick">Memorystick</label></div>
							<div><input type="checkbox" <?php if($features->sdstick){?>checked="checked"<?php }?> name="fsdstick" id="fsdstick" /> <label for="fsdstick">SDstick</label></div>
						</div>
					</div>
					<div class="row">
						<label for="fcamera">
							<strong>Camera</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->camera;?>" name="fcamera" id="fcamera" />
						</div>
					</div>
					<div class="row">
						<label for="fwireless">
							<strong>Wireless</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->wireless;?>" name="fwireless" id="fwireless" />
						</div>
					</div>
					<div class="row">
						<label for="fbluetooth">
							<strong>Bluetooth</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->bluetooth;?>" name="fbluetooth" id="fbluetooth" />
						</div>
					</div>
					<div class="row">
						<label for="fbattery">
							<strong>Pin</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->battery;?>" name="fbattery" id="fbattery" />
						</div>
					</div>
					<div class="row">
						<label>
							<strong>Màu</strong>
						</label>
						<div>
						<?php
						$colors = explode(",",$features->color);
						?>
							<div><input type="checkbox" <?php if(in_array('red', $colors)){?>checked="checked"<?php }?> name="fcolor[]" value="red" id="fcolor" /> <label for="faudio">Đỏ</label></div>
							<div><input type="checkbox" <?php if(in_array('blue', $colors)){?>checked="checked"<?php }?> name="fcolor[]" value="blue" id="fcolor" /> <label for="faudio">Xanh dương</label></div>
							<div><input type="checkbox" <?php if(in_array('green', $colors)){?>checked="checked"<?php }?> name="fcolor[]" value="green" id="fcolor" /> <label for="faudio">Xanh lá</label></div>
							<div><input type="checkbox" <?php if(in_array('black', $colors)){?>checked="checked"<?php }?> name="fcolor[]" value="black" id="fcolor" /> <label for="faudio">Đen</label></div>
							<div><input type="checkbox" <?php if(in_array('white', $colors)){?>checked="checked"<?php }?>  name="fcolor[]" value="white" id="fcolor" /> <label for="faudio">Trắng</label></div>
						</div>
					</div>
					<div class="row">
						<label for="forigin">
							<strong>Xuất sứ</strong>
						</label>
						<div>
							<input type="text" value="<?php echo $features->origin;?>" name="forigin" id="forigin" />
						</div>
					</div>
				</fieldset><!-- End of fieldset -->
				<fieldset>
					
						<div class="actions">
						<div class="left">
							<input type="reset" value="Hủy" />
						</div>
						<div class="right">
							<input type="submit" value="Lưu" name="submit" />
						</div>
					</div>
					
					
				</fieldset>
				<!-- End of fieldset -->
				
			</form><!-- End of form -->
			
			<!-- End of .grid_4 -->
		</section><!-- End of #content -->
		
	</div><!-- End of #main -->
	
	<!-- The footer -->
	<?php include "footer.php";?><!-- End of footer -->
	
	<!-- Spawn $$.loaded -->
	<script>
		$$.loaded();
	</script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>