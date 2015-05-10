<?php if (!defined('IN_PHPBB')) exit; ?><nav class="navbar navbar-default navbar-fixed-top navbar-fix" id="header-nav" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle pull-left-mobile" id="main-menu-btn" data-toggle="collapse" data-target="#main-menu">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?></a>
			<button type="button" class="navbar-toggle pull-right-mobile" id="search-menu-btn" data-toggle="collapse" data-target="#search-menu">
				<i class="fa fa-search"></i>
			</button>
			<button type="button" class="navbar-toggle pull-right-mobile" id="user-menu-btn" data-toggle="collapse" data-target="#user-menu">
				<i class="fa fa-user"></i>
			</button>
		</div>
		<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

			<div class="collapse navbar-collapse pull-left-desktop" id="main-menu">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><i class="fa fa-question"></i> <?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></a></li>
					<?php if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?>

						<li class="bb-members"><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>"><i class="fa fa-user"></i> <?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></a></li>
					<?php } ?>

				</ul>
			</div>
		<?php } if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>

			<div class="collapse navbar-collapse pull-left-desktop" id="search-menu"> 
				<form class="navbar-form navbar-left" method="get" id="search" action="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>">
					<div class="input-group">
						<input class="input-medium search form-control" maxlength="128" type="text" name="keywords" id="search_keywords" size="20" placeholder="<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>" />
						<div class="input-group-btn">
							<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
		<?php } ?>

		<div class="collapse navbar-collapse pull-right-desktop" id="user-menu">
			<ul class="nav navbar-nav navbar-right hidden-xs fix-right-nav">
				<li class="dropdown">
					<button type="button" class="btn btn-primary btn-labeled navbar-btn dropdown-toggle" data-toggle="dropdown" ><span class="btn-label"><i class="glyphicon glyphicon-user"></i></span> <?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?> <?php echo (isset($this->_rootref['S_USERNAME'])) ? $this->_rootref['S_USERNAME'] : ''; ?> <?php } ?><span class="caret"></span></button>
					<ul class="dropdown-menu">
						<?php if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?>

							<li>
								<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post" id="navloginform" name="loginform">
									<div class="form-group">
										<input type="text" placeholder="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" name="username" id="username" size="10" class="form-control" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>"/>
									</div>
									<div class="form-group">
										<input type="password" placeholder="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" name="password" id="password" size="10" class="form-control" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>"/>
									</div>
									<?php if ($this->_rootref['S_DISPLAY_FULL_LOGIN']) {  ?>

										<div class="checkbox">
											<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label><?php } ?>

											<br><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label>
										</div>
									<?php } ?>

									<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

									<button type="submit" name="login" class="btn btn-primary btn-block"><i class="glyphicon glyphicon-log-in"></i> <?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?></button>
								</form>
							</li>
							<?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>

								<li class="divider"></li>
								<li><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" class="btn-reg"><button class="btn btn-primary btn-block" type"button"><i class="glyphicon glyphicon-user"></i> <?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></button></a></li>
							<?php } else { ?>

								<li class="divider"></li>
								<li><a href="#" class="btn-reg"><button class="btn btn-primary btn-block disabled" type="button"><i class="glyphicon glyphicon-user"></i> <?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></button></a></li>
							<?php } } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  if ($this->_rootref['S_DISPLAY_PM']) {  ?>

								<li><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><i class="fa fa-envelope"></i>
									<span class="label <?php if ($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD']) {  ?>label-danger<?php } else { ?>label-primary<?php } ?>">
										<?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?>

										<?php if ($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD']) {  ?>

											, <?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'] : ''; ?>

										<?php } ?>

									</span>
									</a>
								</li>
							<?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

								<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><i class="fa fa-file"></i> <?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a></li>
								<li class="divider"></li>
							<?php } ?>

							<li><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="e"><i class="fa fa-wrench"></i> <?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a></li>
							<li class="divider"></li>
							<li><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" class="btn-reg" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x" ><button class="btn btn-danger btn-block" type="button"><i class="fa fa-sign-out"></i> <?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></button></a></li>
						<?php } ?>

					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right visible-xs fix-right-nav">
				<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?><li><?php echo (isset($this->_rootref['S_USERNAME'])) ? $this->_rootref['S_USERNAME'] : ''; ?></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?>

					<li>
						<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post" id="navloginform" name="loginform">
							<div class="form-group">
								<label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></label>
								<input type="text" name="username" id="username" size="10" class="form-control" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>"/>
							</div>
							<div class="form-group">
								<label for="password" class="display-block"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?> <a href="<?php echo (isset($this->_rootref['U_SEND_PASSWORD'])) ? $this->_rootref['U_SEND_PASSWORD'] : ''; ?>" class="pull-right"><?php echo ((isset($this->_rootref['L_FORGOT_PASS'])) ? $this->_rootref['L_FORGOT_PASS'] : ((isset($user->lang['FORGOT_PASS'])) ? $user->lang['FORGOT_PASS'] : '{ FORGOT_PASS }')); ?></a></label>
								<input type="password" name="password" id="password" size="10" class="form-control" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>"/>
							</div>
							<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

							<button type="submit" name="login" class="btn btn-primary btn-block"><?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?></button>
						</form>
					</li>
					<li class="divider"></li>
					<li><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" class="btn-reg"><button type="button" class="btn btn-primary btn-block"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></button></a></li>
				<?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  if ($this->_rootref['S_DISPLAY_PM']) {  ?>

						<li><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><i class="fa fa-envelope"></i>
							<span class="label label-primary">
								<?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?>

								<?php if ($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD']) {  ?>

									, <?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'] : ''; ?>

								<?php } ?>

							</span>
							</a>
						</li>
					<?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

						<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><i class="fa fa-file"></i> <?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a></li>
						<li class="divider"></li>
					<?php } ?>

					<li><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="e"><i class="fa fa-wrench"></i> <?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a></li>
					<li class="divider"></li>
					<li><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" class="btn-reg" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x" ><button class="btn btn-danger btn-block" type="button"><i class="fa fa-sign-out"></i> <?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></button></a></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</nav>