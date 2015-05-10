<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<div class="page-header">
	<h2><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></h2>
	<?php if ($this->_rootref['FORUM_DESC']) {  ?><p><?php echo (isset($this->_rootref['FORUM_DESC'])) ? $this->_rootref['FORUM_DESC'] : ''; ?></p><?php } ?>

</div>

<?php if ($this->_rootref['FORUM_DESC'] || $this->_rootref['MODERATORS'] || $this->_rootref['U_MCP']) {  ?>

	<div>
		<!-- NOTE: remove the style="display: none" when you want to have the forum description on the forum body --><?php if ($this->_rootref['MODERATORS']) {  ?><p><strong><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?>:</strong> <?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></p><?php } ?>

	</div>
<?php } if ($this->_rootref['S_FORUM_RULES']) {  ?>

	<div class="rules">
		<div class="alert alert-warning">
			<?php if ($this->_rootref['U_FORUM_RULES']) {  ?>

				<a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
			<?php } else { ?>

				<i class="fa fa-exclamation-triangle"></i> <strong><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></strong>
				<hr class="message-inner-separator">
				<p><?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?></p>
			<?php } ?>

		</div>
	</div>
<?php } if ($this->_rootref['S_HAS_SUBFORUM']) {  if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?>

		<div class="row">
			<div class="col-md-12">
				<div class="pull-right">
					<a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" class="btn btn-default btn-sm"><?php echo ((isset($this->_rootref['L_MARK_SUBFORUMS_READ'])) ? $this->_rootref['L_MARK_SUBFORUMS_READ'] : ((isset($user->lang['MARK_SUBFORUMS_READ'])) ? $user->lang['MARK_SUBFORUMS_READ'] : '{ MARK_SUBFORUMS_READ }')); ?></a>
				</div>
			</div>
		</div>
	<?php } $this->_tpl_include('forumlist_body.html'); } if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  if ($this->_rootref['TOTAL_TOPICS'] || $this->_rootref['PAGINATION'] || $this->_rootref['U_MARK_TOPICS']) {  ?>

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="btn-group">
					<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>" class="btn btn-default btn-sm" accesskey="m"><i class="icon-check"></i> <?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a><?php } if ($this->_rootref['TOTAL_TOPICS']) {  ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?></span><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> <a href="#" class="btn btn-default btn-sm" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><span><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span></a><?php } else { ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } } ?>

				</div>
			</div>
		</div>
	<?php } ?>

	<div class="row mobile-fix" <?php if ($this->_rootref['S_HAS_SUBFORUM']) {  ?>style="margin-top: 2em;"<?php } ?>>        
		<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

			<div class="col-md-3 col-xs-12">
				<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>

					<a class="btn btn-danger btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span class="btn-label"><i class="fa fa-lock"></i></span><?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?></a>
				<?php } else { ?>

					<a class="btn btn-primary btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span class="btn-label"><i class="fa fa-pencil-square-o"></i></span> <?php echo ((isset($this->_rootref['L_POST_TOPIC'])) ? $this->_rootref['L_POST_TOPIC'] : ((isset($user->lang['POST_TOPIC'])) ? $user->lang['POST_TOPIC'] : '{ POST_TOPIC }')); ?></a>
				<?php } ?>

			</div>
		<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  ?>

			<div class="col-md-6 text-center col-xs-12">
				<div class="btn-group forum-pagination"> 
					<a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['PREVIOUS_PAGE']) {  ?> disabled<?php } ?>"><i class="fa fa-chevron-left"></i> <?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
					<?php if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } ?>

					<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['NEXT_PAGE']) {  ?> disabled<?php } ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		<?php } if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

			<div class="col-md-3 col-xs-12 pull-right">        
				<form action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>" method="get" id="forum-search" class="form-search pull-right" style="margin:0;">
					<div class="input-group">
						<input class="input-medium search form-control" type="text" name="keywords" id="search_keywords" size="20" placeholder="<?php echo ((isset($this->_rootref['L_SEARCH_FORUM'])) ? $this->_rootref['L_SEARCH_FORUM'] : ((isset($user->lang['SEARCH_FORUM'])) ? $user->lang['SEARCH_FORUM'] : '{ SEARCH_FORUM }')); ?>"/>
						<span class="input-group-btn">
							<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

							<button type="submit" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
						</span>
					</div>
				</form>
			</div>
		<?php } ?>

	</div>
<?php } if ($this->_rootref['S_NO_READ_ACCESS']) {  ?>

	<div class="row">
		<div class="well">
			<strong><?php echo ((isset($this->_rootref['L_NO_READ_ACCESS'])) ? $this->_rootref['L_NO_READ_ACCESS'] : ((isset($user->lang['NO_READ_ACCESS'])) ? $user->lang['NO_READ_ACCESS'] : '{ NO_READ_ACCESS }')); ?></strong>
		</div>
	</div>
	<?php if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

		<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post">
			<div class="row">
				<div class="well well-sm">
					<h3 class="box-heading"><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>&nbsp; &nbsp;<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } ?></h3>
					<div class="content">
						<fieldset class="fields1">
							<dl>
								<dt><label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
								<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" class="form-control" /></dd>
							</dl>
							<dl>
							<dt><label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label></dt>
							<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="form-control" /></dd>
								<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label></dd><?php } ?>

								<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label></dd>
							</dl>
							<dl>
								<dt>&nbsp;</dt>
								<dd><input type="submit" name="login" tabindex="5" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="btn" /></dd>
							</dl>
							<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

						</fieldset>
					</div>
				</div>
			</div>
		</form>
	<?php } } $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; if (! $_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ! $_topicrow_val['S_FIRST_ROW']) {  ?>

				</tbody>
			</table>
		</div>
	<?php } if ($_topicrow_val['S_FIRST_ROW'] || ! $_topicrow_val['S_TOPIC_TYPE_SWITCH']) {  ?>

		<div class="forumbg table-responsive <?php if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ( $_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL'] )) {  ?> announcement<?php } ?>">
			<table class="table table-striped table-bordered">
				<thead class="topiclist">
					<tr class="header">
						<th class="forum-name"><?php if ($this->_rootref['S_DISPLAY_ACTIVE']) {  echo ((isset($this->_rootref['L_ACTIVE_TOPICS'])) ? $this->_rootref['L_ACTIVE_TOPICS'] : ((isset($user->lang['ACTIVE_TOPICS'])) ? $user->lang['ACTIVE_TOPICS'] : '{ ACTIVE_TOPICS }')); } else if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ( $_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL'] )) {  ?><i class="fa fa-bullhorn"></i> <?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); } else { ?><i class="fa fa-comments-o"></i> <?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); } ?></th>
						<th class="posts"><i class="fa fa-reply"></i> <?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></th>
						<th class="views"><i class="fa fa-eye"></i> <?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></th>
						<th class="lastpost"><i class="fa fa-history"></i> <span><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></span></th>   
					</tr>
				</thead>
				<tbody class="topiclist topics">
	<?php } ?>

					<tr class="t-row<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>">                        
						<td class="topic-name <?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>" title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>">
							<div class="pull-left forum-topic-icon">
								<span><a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="btn <?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?>btn-info<?php } else { ?>btn-default<?php } ?> btn-lg tooltip-link" title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>">
									<?php if ($_topicrow_val['S_TOPIC_LOCKED']) {  ?>

										<i class="fa fa-lock fa-fw"></i>
									<?php } else if ($_topicrow_val['S_POST_GLOBAL']) {  ?>

										<i class="fa fa-info-circle fa-fw"></i>
									<?php } else if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?>

										<i class="fa fa-bullhorn fa-fw"></i>
									<?php } else if ($_topicrow_val['S_POST_STICKY']) {  ?>

										<i class="fa fa-thumb-tack fa-fw"></i>
									<?php } else if ($_topicrow_val['S_HAS_POLL']) {  ?>

										<i class="fa fa-comment-o fa-fw"></i>
									<?php } else { ?>

										<i class="fa fa-file-text-o fa-fw"></i>
									<?php } ?> 
								</a></span>
							</div>
							<div class="pull-right topic-pagination">
								<div class="btn-group pagination-line">
									<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?>

										<a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle"></i></a>
									<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?>

										<a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle"></i></a>
									<?php } if ($_topicrow_val['ATTACH_ICON_IMG']) {  ?>

										<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-paperclip"></i></a>
									<?php } if ($_topicrow_val['PAGINATION']) {  ?>

										<?php echo $_topicrow_val['PAGINATION']; ?>

									<?php } if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?>

										<a class="btn btn-xs btn-info" href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><i class="fa fa-angle-right"></i></a>
									<?php } if (! $this->_rootref['S_IS_BOT']) {  ?>

										<a class="btn btn-default btn-xs tooltip-link" href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"  title="<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>"><i class="fa fa-angle-double-right"></i></a>
									<?php } ?>		
								</div>
							</div>
							<div class="forum-topic-icon-mobile">
								<?php if ($_topicrow_val['S_TOPIC_LOCKED']) {  ?>

									<i class="fa fa-lock"></i>
								<?php } else if ($_topicrow_val['S_POST_GLOBAL']) {  ?>

									<i class="fa fa-info-circle"></i>
								<?php } else if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?>

									<i class="fa fa-bullhorn"></i>
								<?php } else if ($_topicrow_val['S_POST_STICKY']) {  ?>

									<i class="fa fa-thumb-tack"></i>
								<?php } else if ($_topicrow_val['S_HAS_POLL']) {  ?>

									<i class="fa fa-comment-o"></i>
								<?php } else { ?>

									<i class="fa fa-file-text-o"></i>
								<?php } ?>

							</div>
							<a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle"><strong><?php echo $_topicrow_val['TOPIC_TITLE']; ?></strong></a><br/>
							<small><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?> &raquo; <?php echo $_topicrow_val['FIRST_POST_TIME']; ?></small>
						</td>
						<td class="posts<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>">
							<span class="badge"><?php echo $_topicrow_val['REPLIES']; ?></span>
						</td>
						<td class="views<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>">
							<span class="badge"><?php echo $_topicrow_val['VIEWS']; ?></span>
						</td>
						<td class="lastpost<?php if ($_topicrow_val['S_POST_GLOBAL']) {  ?> warning-color<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> info-color<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> success-color<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> danger-color<?php } ?>"><span><dfn><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?> </dfn><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

							<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?><br /><?php echo $_topicrow_val['LAST_POST_TIME']; ?></span>
						</td>
					</tr>
		<?php if ($_topicrow_val['S_LAST_ROW']) {  ?>

				</tbody>
			</table>
		</div>
	<?php } }} else { if ($this->_rootref['S_IS_POSTABLE']) {  ?>

			<div class="alert alert-danger">
				<strong><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></strong>
			</div>
	<?php } } if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  ?>

	<div class="row mobile-fix" <?php if ($this->_rootref['S_HAS_SUBFORUM']) {  ?>style="margin-top: 2em;"<?php } ?>>        
		<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

			<div class="col-md-3 col-xs-12">
				<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>

					<a class="btn btn-danger btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span class="btn-label"><i class="fa fa-lock"></i></span> <?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?></a>
				<?php } else { ?>

					<a class="btn btn-primary btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><span class="btn-label"><i class="fa fa-pencil-square-o"></i></span> <?php echo ((isset($this->_rootref['L_POST_TOPIC'])) ? $this->_rootref['L_POST_TOPIC'] : ((isset($user->lang['POST_TOPIC'])) ? $user->lang['POST_TOPIC'] : '{ POST_TOPIC }')); ?></a>
				<?php } ?>

			</div>
		<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  ?>

			<div class="col-md-6 text-center col-xs-12">
				<div class="btn-group forum-pagination"> 
					<a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['PREVIOUS_PAGE']) {  ?> disabled<?php } ?>"><i class="fa fa-chevron-left"></i> <?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
					<?php if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } ?>

					<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['NEXT_PAGE']) {  ?> disabled<?php } ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		<?php } if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

			<div class="col-md-3 col-xs-12 pull-right">        
				<form action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>" method="get" id="forum-search" class="form-search pull-right" style="margin:0;">
					<div class="input-group">
						<input class="input-medium search form-control" type="text" name="keywords" id="search_keywords" size="20" placeholder="<?php echo ((isset($this->_rootref['L_SEARCH_FORUM'])) ? $this->_rootref['L_SEARCH_FORUM'] : ((isset($user->lang['SEARCH_FORUM'])) ? $user->lang['SEARCH_FORUM'] : '{ SEARCH_FORUM }')); ?>"/>
						<span class="input-group-btn">
							<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

							<button type="submit" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
						</span>
					</div>
				</form>
			</div>
		<?php } ?>

    </div>
    <?php if ($this->_rootref['TOTAL_TOPICS'] || $this->_rootref['PAGINATION'] || $this->_rootref['U_MARK_TOPICS']) {  ?>

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="btn-group">
					<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>" class="btn btn-default btn-sm" accesskey="m"><i class="icon-check"></i> <?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a><?php } if ($this->_rootref['TOTAL_TOPICS']) {  ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?></span><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> <a href="#" class="btn btn-default btn-sm" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><span><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span></a><?php } else { ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } } ?>

				</div>
			</div>
		</div>
	<?php } } if ($this->_rootref['S_SELECT_SORT_DAYS'] && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?>

	<div class="well well-sm">
		<form method="post" action="<?php echo (isset($this->_rootref['S_FORUM_ACTION'])) ? $this->_rootref['S_FORUM_ACTION'] : ''; ?>" class="form-inline">
			<fieldset class="display-options">
				<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

					<label><?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
					<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
					<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="btn btn-default" /></label>
				<?php } ?>

			</fieldset>
		</form>
	</div>
<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] && $this->_tpldata['DEFINE']['.']['SHOW_LOGIN_PANEL'] == (1)) {  $this->_tpl_include('login_panel.html'); } if ($this->_tpldata['DEFINE']['.']['DISPLAY_JUMPBOX'] == (1)) {  $this->_tpl_include('jumpbox.html'); } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  $this->_tpl_include('online_panel.html'); } if ($this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-unlock-alt"></i> <?php echo ((isset($this->_rootref['L_FORUM_PERMISSIONS'])) ? $this->_rootref['L_FORUM_PERMISSIONS'] : ((isset($user->lang['FORUM_PERMISSIONS'])) ? $user->lang['FORUM_PERMISSIONS'] : '{ FORUM_PERMISSIONS }')); ?></h3>
		</div>
		<div class="panel-body">
			<p><?php $_rules_count = (isset($this->_tpldata['rules'])) ? sizeof($this->_tpldata['rules']) : 0;if ($_rules_count) {for ($_rules_i = 0; $_rules_i < $_rules_count; ++$_rules_i){$_rules_val = &$this->_tpldata['rules'][$_rules_i]; echo $_rules_val['RULE']; ?><br /><?php }} ?></p>
		</div>
	</div>
<?php } $this->_tpl_include('overall_footer.html'); ?>