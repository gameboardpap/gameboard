<?php if (!defined('IN_PHPBB')) exit; $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>

				</tbody>
			</table>
		</div>
	<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>

		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead class="topiclist">
					<tr>
						<th class="forum-name"><?php if ($_forumrow_val['S_IS_CAT']) {  ?><i class="fa fa-sitemap"></i> <a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { ?><i class="fa fa-folder-open"></i> <?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></th>
						<th class="topics"><i class="fa fa-comments-o"></i> <?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
						<th class="posts"><i class="fa fa-pencil-square-o"></i> <?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></th>
						<th class="lastpost"><i class="fa fa-history"></i> <span><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></span></th>
					</tr>
				</thead>
				<tbody class="topiclist forums">
	<?php } if (! $_forumrow_val['S_IS_CAT']) {  ?>

				<tr>
					<td class="forum-name" title="<?php echo $_forumrow_val['FORUM_FOLDER_IMG_ALT']; ?>" >
						<span class="pull-left forum-icon">
							<a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" class="btn btn-lg <?php if ($_forumrow_val['S_UNREAD_FORUM']) {  ?>btn-info<?php } else { ?>btn-default<?php } ?> tooltip-link" title="<?php echo $_forumrow_val['FORUM_FOLDER_IMG_ALT']; ?>">
								<?php if ($_forumrow_val['S_IS_LINK']) {  ?>

									<i class="fa fa-globe fa-fw"></i>
								<?php } else if ($_forumrow_val['S_LOCKED_FORUM']) {  ?>

									<i class="fa fa-lock fa-fw"></i>
								<?php } else if ($_forumrow_val['FORUM_ICON']) {  ?>

									<i class="<?php echo $_forumrow_val['FORUM_ICON']; ?>"></i>
								<?php } else { ?>

									<i class="fa fa-folder fa-fw"></i>
								<?php } ?>

							</a>
						</span>
						<?php if ($this->_rootref['S_ENABLE_FEEDS'] && $_forumrow_val['S_FEED_ENABLED']) {  ?><!-- <a class="feed-icon-forum" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo $_forumrow_val['FORUM_ID']; ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/feed.gif" alt="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" /></a> --><?php } if ($_forumrow_val['FORUM_IMAGE']) {  ?><span class="forum-image"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></span><?php } ?>

						<div class="forum-icon-mobile">
							<?php if ($_forumrow_val['S_IS_LINK']) {  ?>

								<i class="fa fa-globe fa-fw"></i>
							<?php } else if ($_forumrow_val['S_LOCKED_FORUM']) {  ?>

								<i class="fa fa-lock fa-fw"></i>
							<?php } else if ($_forumrow_val['FORUM_ICON']) {  ?>

								<i class="<?php echo $_forumrow_val['FORUM_ICON']; ?>"></i>
							<?php } else { ?>

								<i class="fa fa-folder fa-fw"></i>
							<?php } ?>

						</div>
						<a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" class="forumtitle"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><br />
						<small><?php echo $_forumrow_val['FORUM_DESC']; ?></small>
						<?php if ($_forumrow_val['MODERATORS']) {  ?>

							<br /><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; ?>

						<?php } if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?><br /><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; } ?>

					</td>
					<?php if ($_forumrow_val['CLICKS']) {  ?>

						<td class="redirect"><span><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></span></td>
					<?php } else if (! $_forumrow_val['S_IS_LINK']) {  ?>

						<td class="topics"><span class="badge"><?php echo $_forumrow_val['TOPICS']; ?></span></td>
						<td class="posts"><span class="badge"><?php echo $_forumrow_val['POSTS']; ?></span></td>
						<td class="lastpost"><span>
							<?php if ($_forumrow_val['U_UNAPPROVED_TOPICS']) {  ?><a href="<?php echo $_forumrow_val['U_UNAPPROVED_TOPICS']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a><?php } if ($_forumrow_val['LAST_POST_TIME']) {  ?><dfn><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></dfn> <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_forumrow_val['LAST_POSTER_FULL']; ?>

							<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?><br /><?php echo $_forumrow_val['LAST_POST_TIME']; } else { echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?><br />&nbsp;<?php } ?></span>
						</td>
					<?php } ?>

				</tr>
	<?php } if ($_forumrow_val['S_LAST_ROW']) {  ?>

				</tbody>
			</table>
		</div>
	<?php } }} else { ?>

	<div class="alert alert-danger">
		<strong><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></strong>
	</div>
<?php } ?>