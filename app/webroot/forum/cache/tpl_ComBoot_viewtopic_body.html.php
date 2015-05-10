<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['FORUM_DESC']) {  ?>

	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo (isset($this->_rootref['FORUM_DESC'])) ? $this->_rootref['FORUM_DESC'] : ''; ?>

		</div>
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
<?php } ?>


<div class="row">
	<div class="col-md-12 text-center">
		<div class="btn-group">
			<?php if ($this->_rootref['U_VIEW_UNREAD_POST'] && ! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>" class="btn btn-default btn-sm"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a><?php } ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?></span>
			<?php if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>" class="btn btn-default btn-sm no-btn"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a><?php } else { ?> <span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } } ?>

		</div>
	</div>
</div>

<div class="row mobile-fix">
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_REPLY_INFO']) {  ?>

		<div class="col-md-3">
			<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>

				<a class="btn btn-danger btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); ?>"><span class="btn-label"><i class="fa fa-lock"></i></span> <?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?></a>
			<?php } else { ?>

				<a class="btn btn-primary btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); ?>"><span class="btn-label"><i class="fa fa-pencil-square-o"></i></span> <?php echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); ?></a>
			<?php } ?>

		</div>
	<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  ?>

		<div class="col-md-6 text-center">
			<div class="btn-group topic-pagination">
				<a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['PREVIOUS_PAGE']) {  ?> disabled<?php } ?>"><i class="fa fa-chevron-left"></i> <?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
				<?php if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } ?>

				<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['NEXT_PAGE']) {  ?> disabled<?php } ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?> <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	<?php } if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

		<div class="col-md-3">
			<form method="get" id="topic-search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>" class="form-search pull-right no-margin">
				<div class="input-group">
					<input class="input-medium form-control"  type="text" name="keywords" id="search_keywords" size="20" placeholder="<?php echo ((isset($this->_rootref['LA_SEARCH_TOPIC'])) ? $this->_rootref['LA_SEARCH_TOPIC'] : ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? addslashes($this->_rootref['L_SEARCH_TOPIC']) : ((isset($user->lang['SEARCH_TOPIC'])) ? addslashes($user->lang['SEARCH_TOPIC']) : '{ SEARCH_TOPIC }'))); ?>"/>
					<span class="input-group-btn">
						<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

						<button type="submit" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
					</span>
				</div>
			</form>
		</div>
	<?php } ?>

</div>
<div class="clearfix"></div>

<?php if ($this->_rootref['S_HAS_POLL']) {  ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?></h3>
			</div>
			<div class="panel-body">
				<p class="author"><?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); if ($this->_rootref['S_CAN_VOTE'] && $this->_rootref['L_POLL_LENGTH']) {  ?><br /><?php } if ($this->_rootref['S_CAN_VOTE']) {  echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); } ?></p>
				<fieldset class="polls">
				<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>

					<div class="row <?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>voted" title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); } ?>">
						<?php if ($_poll_option_val['POLL_OPTION_VOTED'] || $this->_rootref['S_DISPLAY_RESULTS']) {  ?><div class="col-md-3"><?php } else { ?><div class="col-md-12"><?php } if ($this->_rootref['S_CAN_VOTE']) {  if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?><div class="checkbox"><?php } else { ?><div class="radio"><?php } ?>

								<label for="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></label>
								<?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?>

									<input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
								<?php } else { ?>

									<input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
								<?php } ?>

								</div>
							<?php } else { ?>

								<?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?>

							<?php } ?>

						</div>
						<?php if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>

							<div class="col-md-7 vote-progress">
								<div class="progress">
									<div class="progress-bar <?php if ($_poll_option_val['POLL_OPTION_PCT'] < (33)) {  ?>progress-bar-danger<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (66)) {  ?>progress-bar-warning<?php } else { ?>progress-bar-success<?php } ?>"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php if ($_poll_option_val['POLL_OPTION_PCT'] < (10)) {  ?>10%<?php } else { echo $_poll_option_val['POLL_OPTION_PERCENT']; } ?>;">
										<?php if ($_poll_option_val['POLL_OPTION_RESULT'] == 0) {  echo ((isset($this->_rootref['L_NO_VOTES'])) ? $this->_rootref['L_NO_VOTES'] : ((isset($user->lang['NO_VOTES'])) ? $user->lang['NO_VOTES'] : '{ NO_VOTES }')); } else { echo $_poll_option_val['POLL_OPTION_PERCENT']; } ?>

									</div>
								</div>
							</div>
							<div class="col-md-2 vote-progress">
								<?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?>

							</div>
						<?php } ?>

					</div>
				<?php }} ?>

				<div class="clearfix"></div>
				<?php if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>

					<div class="text-center center-block">
						<span class="btn btn-default disabled"><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo (isset($this->_rootref['TOTAL_VOTES'])) ? $this->_rootref['TOTAL_VOTES'] : ''; ?></span>
					</div>
				<?php } ?>

				<div class="spacer"></div>
				<?php if ($this->_rootref['S_CAN_VOTE']) {  ?>

					<div class=" text-center center-block">
						<div class="btn-group">
							<input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="btn btn-success" />
							<?php if (! $this->_rootref['S_DISPLAY_RESULTS']) {  ?><a class="btn btn-warning" href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a><?php } ?>

						</div>
					</div>
				<?php } ?>

				</fieldset>
			</div>
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

			<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		</div>
	</form>
	<hr />
<?php } $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if ($_postrow_val['S_FIRST_UNREAD']) {  ?><a id="unread"></a><?php } ?>

	<div id="p<?php echo $_postrow_val['POST_ID']; ?>">
		<div class="panel <?php if ($_postrow_val['S_UNREAD_POST']) {  ?>panel-info<?php } else if ($_postrow_val['S_POST_REPORTED']) {  ?>panel-danger<?php } else { ?>panel-primary<?php } ?>">
			<div class="panel-heading">
				<h3 class="panel-title<?php if ($_postrow_val['S_FIRST_ROW']) {  ?> first<?php } ?> pull-left"><?php if ($_postrow_val['POST_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_postrow_val['POST_ICON_IMG']; ?>" width="<?php echo $_postrow_val['POST_ICON_IMG_WIDTH']; ?>" height="<?php echo $_postrow_val['POST_ICON_IMG_HEIGHT']; ?>" alt="" /> <?php } ?><a href="#p<?php echo $_postrow_val['POST_ID']; ?>"><?php echo $_postrow_val['POST_SUBJECT']; ?></a></h3>
				<?php if ($_postrow_val['S_POST_UNAPPROVED'] || $_postrow_val['S_POST_REPORTED']) {  ?>

					<p class="rules pull-right no-margin-bottom">
						<?php if ($_postrow_val['S_POST_UNAPPROVED']) {  echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_APPROVE']; ?>"><strong><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></strong></a><br /><?php } if ($_postrow_val['S_POST_REPORTED']) {  echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_REPORT']; ?>"><strong><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></strong></a><?php } ?>

					</p>
				<?php } ?>

				<div class="clearfix"></div>
			</div>
			<div class="panel-body no-padding badger-left <?php if ($_postrow_val['S_ONLINE'] && ! $_postrow_val['S_IGNORE_POST']) {  ?>badger-success" data-badger="ONLINE<?php } else { ?>badger-danger" data-badger="OFFLINE<?php } ?>">
				<div class="row no-margin">
				<?php if (! $_postrow_val['S_IGNORE_POST']) {  ?>

					<div class="col-md-3 col-xs-12 post-info post-info-left">
						<dl id="profile<?php echo $_postrow_val['POST_ID']; ?>" class="no-margin-xs">
							<dt class="avatar text-center rounded">
								<?php if ($_postrow_val['POSTER_AVATAR']) {  if ($_postrow_val['U_POST_AUTHOR']) {  ?><a href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo $_postrow_val['POSTER_AVATAR']; ?></a><?php } else { echo $_postrow_val['POSTER_AVATAR']; } ?><br />
								<?php } else { ?>

									<img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/default_avatar.jpg" alt="avatar">
								<?php } ?>

							</dt>
							<dd class="text-center">
								<?php if (! $_postrow_val['U_POST_AUTHOR']) {  ?><strong><?php echo $_postrow_val['POST_AUTHOR_FULL']; ?></strong> <?php } else { echo $_postrow_val['POST_AUTHOR_FULL']; } ?>

							</dd>
							<?php if ($_postrow_val['RANK_TITLE'] || $_postrow_val['RANK_IMG']) {  ?><dd class="text-center"><span class="badge"><?php echo $_postrow_val['RANK_TITLE']; ?></span><?php if ($_postrow_val['RANK_TITLE'] && $_postrow_val['RANK_IMG']) {  ?><br /><?php } echo $_postrow_val['RANK_IMG']; ?></dd><?php } ?>

						</dl>
						<dl class="hidden-xs">
							<dt>
								<hr/>
							</dt>
							<?php if ($_postrow_val['POSTER_POSTS'] != ('')) {  ?><dd><strong><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>:</strong> <?php echo $_postrow_val['POSTER_POSTS']; ?></dd><?php } if ($_postrow_val['POSTER_JOINED']) {  ?><dd><strong><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</strong> <?php echo $_postrow_val['POSTER_JOINED']; ?></dd><?php } if ($_postrow_val['POSTER_FROM']) {  ?><dd><strong><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</strong> <?php echo $_postrow_val['POSTER_FROM']; ?></dd><?php } if ($_postrow_val['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
								<dd><strong><?php echo $_postrow_val['PROFILE_FIELD1_NAME']; ?>:</strong> <?php echo $_postrow_val['PROFILE_FIELD1_VALUE']; ?></dd>
							<?php } $_custom_fields_count = (isset($_postrow_val['custom_fields'])) ? sizeof($_postrow_val['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$_postrow_val['custom_fields'][$_custom_fields_i]; ?>

								<dd><strong><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</strong> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?></dd>
							<?php }} if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_PM'] || $_postrow_val['U_EMAIL'] || $_postrow_val['U_WWW'] || $_postrow_val['U_MSN'] || $_postrow_val['U_ICQ'] || $_postrow_val['U_YIM'] || $_postrow_val['U_AIM'] || $_postrow_val['U_JABBER']) {  ?>

									<dd><div class="spacer"></div></dd>
									<dd>
										<div class="btn-group">
											<?php if ($_postrow_val['U_PM']) {  ?>

												<a class="btn btn-mini btn-primary" href="<?php echo $_postrow_val['U_PM']; ?>" target="_blank" title="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>"><i class="fa fa-comment"></i></a>
											<?php } if ($_postrow_val['U_EMAIL']) {  ?>

												<a class="btn btn-mini btn-primary" href="<?php echo $_postrow_val['U_EMAIL']; ?>" target="_blank" title="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?>"><i class="fa fa-envelope"></i></a>
											<?php } if ($_postrow_val['U_WWW']) {  ?>

												<a class="btn btn-mini btn-primary" href="<?php echo $_postrow_val['U_WWW']; ?>" target="_blank" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo $_postrow_val['U_WWW']; ?>"><i class="fa fa-globe"></i></a>
											<?php } if ($_postrow_val['U_MSN'] || $_postrow_val['U_ICQ'] || $_postrow_val['U_AIM'] || $_postrow_val['U_JABBER']) {  ?>

												<div class="btn-group pull-left">
													<a class="btn btn-mini btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
														<i class="icon-plus-sign"></i>
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<?php if ($_postrow_val['U_MSN']) {  ?><li class="msnm"><a href="<?php echo $_postrow_val['U_MSN']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>"><i class="icon-comment"></i> MSN</a></li><?php } if ($_postrow_val['U_ICQ']) {  ?><li class="icq"><a href="<?php echo $_postrow_val['U_ICQ']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>"><i class="icon-comment"></i> ICQ</a></li><?php } if ($_postrow_val['U_YIM']) {  ?><li class="yahoo"><a href="<?php echo $_postrow_val['U_YIM']; ?>" onclick="popup(this.href, 780, 550); return false;" title="<?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>"><i class="icon-comment"></i> YIM</a></li><?php } if ($_postrow_val['U_AIM']) {  ?><li class="aim"><a href="<?php echo $_postrow_val['U_AIM']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>"><i class="icon-comment"></i> AIM</a></li><?php } if ($_postrow_val['U_JABBER']) {  ?><li class="jabber"><a href="<?php echo $_postrow_val['U_JABBER']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>"><i class="icon-comment"></i> Jabber</a></li><?php } ?>

													</ul>
												</div>
											<?php } ?>

										</div>
									</dd>
									<dd><div class="clearfix"></div></dd>
								<?php } } ?>

						</dl>
					</div>
				<?php } ?>

				<div class="col-md-9 col-xs-12 post-content post-content-right">
					<?php if ($_postrow_val['S_IGNORE_POST']) {  ?>

						<div class="ignore"><?php echo $_postrow_val['L_IGNORE_POST']; ?></div>
					<?php } else { ?>

						<div class="row post-head hidden-xs no-margin-bottom">
							<div class="col-md-6 col-xs-6 author">
								<?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <strong><?php echo $_postrow_val['POST_AUTHOR_FULL']; ?></strong> &raquo; <?php echo $_postrow_val['POST_DATE']; ?>

							</div>
							<div class="col-md-6 col-xs-6 no-padding">
							<?php if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_EDIT'] || $_postrow_val['U_DELETE'] || $_postrow_val['U_REPORT'] || $_postrow_val['U_WARN'] || $_postrow_val['U_INFO'] || $_postrow_val['U_QUOTE']) {  ?>

									<div class="btn-toolbar topic-buttons" role="toolbar">
										<div class="btn-group">
											<?php if ($this->_rootref['U_EMAIL_TOPIC']) {  ?><a class="btn btn-info" href="<?php echo (isset($this->_rootref['U_EMAIL_TOPIC'])) ? $this->_rootref['U_EMAIL_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?>"><i class="fa fa-envelope"></i></a><?php } if ($this->_rootref['U_EMAIL_PM']) {  ?><a class="btn btn-info" href="<?php echo (isset($this->_rootref['U_EMAIL_PM'])) ? $this->_rootref['U_EMAIL_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?>"><i class="fa fa-envelope"></i></a><?php } if ($this->_rootref['U_PRINT_TOPIC']) {  ?><a class="btn btn-info" href="<?php echo (isset($this->_rootref['U_PRINT_TOPIC'])) ? $this->_rootref['U_PRINT_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?>" accesskey="p" class="print"><i class="fa fa-print"></i></a><?php } if ($this->_rootref['U_PRINT_PM']) {  ?><a class="btn btn-info" href="<?php echo (isset($this->_rootref['U_PRINT_PM'])) ? $this->_rootref['U_PRINT_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?>" accesskey="p" class="print"><i class="fa fa-print"></i></a><?php } ?>

										</div>
										<div class="btn-group">
											<?php if ($_postrow_val['U_EDIT']) {  ?><a class="btn btn-warning" href="<?php echo $_postrow_val['U_EDIT']; ?>" title="<?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?>"><i class="fa fa-pencil"></i></a><?php } if ($_postrow_val['U_DELETE']) {  ?><a class="btn btn-danger" href="<?php echo $_postrow_val['U_DELETE']; ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>"><i class="fa fa-trash-o"></i></a><?php } ?>

										</div>
										<div class="btn-group">
											<?php if ($_postrow_val['U_REPORT']) {  ?><a class="btn btn-danger" href="<?php echo $_postrow_val['U_REPORT']; ?>" title="<?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?>"><i class="fa fa-exclamation"></i></a><?php } if ($_postrow_val['U_WARN']) {  ?><a class="btn btn-warning" href="<?php echo $_postrow_val['U_WARN']; ?>" title="<?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?>"><i class="fa fa-minus"></i></a><?php } if ($_postrow_val['U_INFO']) {  ?><a class="btn btn-primary" href="<?php echo $_postrow_val['U_INFO']; ?>" title="<?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>"><i class="fa fa-info"></i></a><?php } if ($_postrow_val['U_QUOTE']) {  ?><a class="btn btn-success" href="<?php echo $_postrow_val['U_QUOTE']; ?>" title="<?php echo ((isset($this->_rootref['L_REPLY_WITH_QUOTE'])) ? $this->_rootref['L_REPLY_WITH_QUOTE'] : ((isset($user->lang['REPLY_WITH_QUOTE'])) ? $user->lang['REPLY_WITH_QUOTE'] : '{ REPLY_WITH_QUOTE }')); ?>"><i class="fa fa-quote-left"></i></a><?php } ?>

										</div>
									</div>
								<?php } } ?>

							</div>
						</div>
						<div class="content">
							<?php echo $_postrow_val['MESSAGE']; ?>

						</div>
						<?php if ($_postrow_val['S_HAS_ATTACHMENTS']) {  ?>

							<div class="panel panel-default attachbox panel-collapsible">
								<div class="panel-heading">
									<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></h3>
									<span class="pull-right panel-right clickable panel-collapsed"><i class="fa fa-chevron-down"></i></span>
								</div>
								<div class="panel-body" style="display:none">
									<?php $_attachment_count = (isset($_postrow_val['attachment'])) ? sizeof($_postrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_postrow_val['attachment'][$_attachment_i]; ?>

										<?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?>

									<?php }} ?>

								</div>
							</div>
						<?php } if ($_postrow_val['S_DISPLAY_NOTICE']) {  ?><div class="rules"><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></div><?php } } ?>

				</div>
				</div>
			</div>
			<?php if ($_postrow_val['SIGNATURE']) {  ?>

				<div class="panel-body no-padding text-center">
					<div id="sig<?php echo $_postrow_val['POST_ID']; ?>" class="signature"><?php echo $_postrow_val['SIGNATURE']; ?></div>
				</div>
			<?php } ?>

			<div class="panel-footer post-footer">
				<?php if ($_postrow_val['EDITED_MESSAGE'] || $_postrow_val['EDIT_REASON'] || $_postrow_val['BUMPED_MESSAGE']) {  ?>

					<div class="panel-foo">
						<?php echo $_postrow_val['EDITED_MESSAGE']; ?>

						<?php if ($_postrow_val['EDIT_REASON']) {  ?><br/><strong><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?>:</strong> <em><?php echo $_postrow_val['EDIT_REASON']; ?></em><?php } if ($_postrow_val['BUMPED_MESSAGE']) {  ?><br/><?php echo $_postrow_val['BUMPED_MESSAGE']; } ?>

					</div>
				<?php } ?>

				<div class="to-top pull-right"><a href="#content-wrapper" class="top" title="<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?>"><i class="fa fa-chevron-up"></i></a></div>
			</div>
		</div>
	</div>
<?php }} if ($this->_rootref['S_QUICK_REPLY']) {  $this->_tpl_include('quickreply_editor.html'); } ?>


<div class="row mobile-fix">
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_REPLY_INFO']) {  ?>

		<div class="col-md-3">
			<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>

				<a class="btn btn-danger btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); ?>"><span class="btn-label"><i class="fa fa-lock"></i></span> <?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?></a>
			<?php } else { ?>

				<a class="btn btn-primary btn-labeled" href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); ?>"><span class="btn-label"><i class="fa fa-pencil-square-o"></i></span> <?php echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); ?></a>
			<?php } ?>

		</div>
	<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  ?>

		<div class="col-md-6 text-center">
			<div class="btn-group topic-pagination">
				<a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['PREVIOUS_PAGE']) {  ?> disabled<?php } ?>"><i class="fa fa-chevron-left"></i> <?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
				<?php if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } ?>

				<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['NEXT_PAGE']) {  ?> disabled<?php } ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?> <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	<?php } if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

		<div class="col-md-3">
			<form method="get" id="topic-search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>" class="form-search pull-right no-margin">
				<div class="input-group">
					<input class="input-medium form-control"  type="text" name="keywords" id="search_keywords" size="20" placeholder="<?php echo ((isset($this->_rootref['LA_SEARCH_TOPIC'])) ? $this->_rootref['LA_SEARCH_TOPIC'] : ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? addslashes($this->_rootref['L_SEARCH_TOPIC']) : ((isset($user->lang['SEARCH_TOPIC'])) ? addslashes($user->lang['SEARCH_TOPIC']) : '{ SEARCH_TOPIC }'))); ?>"/>
					<span class="input-group-btn">
						<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

						<button type="submit" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
					</span>
				</div>
			</form>
		</div>
	<?php } ?>

</div>

<div class="row">
	<div class="col-md-12 text-center">
		<div class="btn-group">
			<?php if ($this->_rootref['U_VIEW_UNREAD_POST'] && ! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>" class="btn btn-default btn-sm"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a><?php } ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?></span>
			<?php if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>" class="btn btn-default btn-sm no-btn"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a><?php } else { ?> <span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } } ?>

		</div>
	</div>
</div>

<?php if ($this->_rootref['S_NUM_POSTS'] > (1) || $this->_rootref['PREVIOUS_PAGE']) {  ?>

	<div class="well well-sm text-center">
		<form id="viewtopic" method="post" action="<?php echo (isset($this->_rootref['S_TOPIC_ACTION'])) ? $this->_rootref['S_TOPIC_ACTION'] : ''; ?>">
			<fieldset class="display-options">
				<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

				<label><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
				<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label> <label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="btn btn-default" /></label>
				<?php } ?>

			</fieldset>
		</form>
	</div>
<?php } $this->_tpl_include('jumpbox.html'); if ($this->_rootref['S_TOPIC_MOD']) {  ?>

	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_QUICK_MOD'])) ? $this->_rootref['L_QUICK_MOD'] : ((isset($user->lang['QUICK_MOD'])) ? $user->lang['QUICK_MOD'] : '{ QUICK_MOD }')); ?></h3>
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo (isset($this->_rootref['S_MOD_ACTION'])) ? $this->_rootref['S_MOD_ACTION'] : ''; ?>" class="form-inline pull-right">
				<fieldset class="quickmod">
					<?php echo (isset($this->_rootref['S_TOPIC_MOD'])) ? $this->_rootref['S_TOPIC_MOD'] : ''; ?> <input type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="btn btn-default" />
					<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

				</fieldset>
			</form>
		</div>
	</div>
<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] && $this->_tpldata['DEFINE']['.']['SHOW_LOGIN_PANEL'] == (1)) {  $this->_tpl_include('login_panel.html'); } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  $this->_tpl_include('online_panel.html'); } $this->_tpl_include('overall_footer.html'); ?>