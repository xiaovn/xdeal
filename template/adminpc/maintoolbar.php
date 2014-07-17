<section class="toolbar">
			<div class="user">
				<div class="avatar">
					<img src="<?php echo $admintemplate_path;?>/img/layout/content/toolbar/user/avatar.png">
					<span>3</span>
				</div>
				<span><?php echo $_SESSION['uUsername'];?></span>
				<ul>
					<li><a href="javascript:$$.settings();">Cài đặt</a></li>
					<li><a href="pages_profile.html">Hồ sơ</a></li>
					<li class="line"></li>
					<li><a href="login.html">Đăng xuất</a></li>
				</ul>
			</div>
			<ul class="shortcuts">
			
				<li>
					<a href="javascript:void(0);"><span class="icon i24_user-business"></span></a>
					<!-- Possible sizes: small/medium/large -->
					<div class="small">
						<h3>Tạo mới tài khoản</h3>
						
						<!-- Button bar -->
						<button class="button flat left grey" onclick="$(this).parent().fadeToggle($$.config.fxSpeed).parent().removeClass('active')">Đóng</button>
						<button class="button flat right" onclick="$(this).parent().fadeToggle($$.config.fxSpeed).parent().removeClass('active')">Tạo</button>
						
						<div class="content">
							<form class="full grid">
								<div class="row no-bg">
									<p class="_100 small">
										<label for="p1_username">Username</label>
										<input type="text" name=p1_username id=p1_username />
									</p>
								</div>
								<div class="row no-bg">
									<p class="_50 small">
										<label for="p1_firstname">Firstname</label>
										<input type="text" name=p1_firstname id=p1_firstname />
									</p>
									<p class="_50 small">
										<label for="p1_lastname">Lastname</label>
										<input type="text" name=p1_lastname id=p1_lastname />
									</p>
								</div>
							</form>
						</div>
					</div><!-- End of popup -->
				</li>
				
				<li>
					<a href="javascript:void(0);"><span class="icon i24_inbox-document"></span></a>
					<!-- Possible sizes: small/medium/large -->
					<div class="small">
						<h3>Write a Message</h3>
						
						<!-- Button bar -->
						<button class="button flat left grey" onclick="$(this).parent().fadeToggle($$.config.fxSpeed).parent().removeClass('active')">Đóng</button>
						<button class="button flat right" onclick="$(this).parent().fadeToggle($$.config.fxSpeed).parent().removeClass('active')">Send</button>
						
						<div class="content">
							<form class="full grid">
								<div class="row no-bg">
									<p class="_100 small">
										<input type="text" name=p2_recipient id=p2_recipient placeholder="Recipient" />
									</p>
									<p class="_100 small">
										<input type="text" name=p2_subject id=p2_subject placeholder="Subject" />
									</p>
									<p class="_100 small">
										<textarea rows=5 style="overflow: hidden; height: 45px; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;" name="p2_message" id="p2_message" placeholder="Message"></textarea>
									</p>
								</div>
							</form>
						</div>
					</div><!-- End of popup -->
				</li>
				
				<li>
					<a href="javascript:void(0);"><span class="icon i24_application-blue"></span></a>
					<!-- Possible sizes: small/medium/large -->
					<div class="small">
						<h3>Information</h3>
						
						<!-- Button bar -->
						<button class="button flat left grey" onclick="$(this).parent().fadeToggle($$.config.fxSpeed).parent().removeClass('active')">Đóng</button>
						
						<div class="content">
							<p>Dữ liệu demo.</p>
						</div>
					</div><!-- End of popup -->
				</li>
				
			</ul><!-- End of .shortcuts -->
			
			<input type="search" data-source="extras/search.php" placeholder="Search..." autocomplete="off" class="tooltip" title="e.g. Peach" data-gravity=s>
		</section>