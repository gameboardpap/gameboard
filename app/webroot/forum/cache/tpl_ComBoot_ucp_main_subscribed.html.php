<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h3>
		</div>
		<div class="panel-body">
			<p><?php echo ((isset($this->_rootref['L_WATCHED_EXPLAIN'])) ? $this->_rootref['L_WATCHED_EXPLAIN'] : ((isset($user->lang['WATCHED_EXPLAIN'])) ? $user->lang['WATCHED_EXPLAIN'] : '{ WATCHED_EXPLAIN }')); ?></p>
			<?php if (sizeof($this->_tpldata['forumrow'])) {  ?>

				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php echo ((isset($this->_rootref['L_WATCHED_FORUMS'])) ? $this->_rootref['L_WATCHED_FORUMS'] : ((isset($user->lang['WATCHED_FORUMS'])) ? $user->lang['WATCHED_FORUMS'] : '{ WATCHED_FORUMS }')); ?></th>
								<th class="lastpost"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></th>
								<th class="mark"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
							</tr>
						</thead>
						<tbody class="topiclist cplist">
							<?php $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; ?>

								<tr>
									<td><i class="pcon <?php echo $_forumrow_val['FORUM_IMG_STYLE']; ?>"></i><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" class="forumtitle"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><br /><?php echo $_forumrow_val['FORUM_DESC']; ?></td>
									<td class="lastpost"><?php if ($_forumrow_val['LAST_POST_TIME']) {  ?><span><dfn><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?> </dfn><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_forumrow_val['LAST_POST_AUTHOR_FULL']; ?>

										<a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <br /><?php echo $_forumrow_val['LAST_POST_TIME']; ?></span>
										<?php } else { echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?><br /><?php } ?>

									</td>
									<td class="mark"><center><input type="checkbox" name="f[<?php echo $_forumrow_val['FORUM_ID']; ?>]" id="f<?php echo $_forumrow_val['FORUM_ID']; ?>" /></center></td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div>
			<?php } else if ($this->_rootref['S_FORUM_NOTIFY']) {  ?>

				<p><strong><?php echo ((isset($this->_rootref['L_NO_WATCHED_FORUMS'])) ? $this->_rootref['L_NO_WATCHED_FORUMS'] : ((isset($user->lang['NO_WATCHED_FORUMS'])) ? $user->lang['NO_WATCHED_FORUMS'] : '{ NO_WATCHED_FORUMS }')); ?></strong></p>
			<?php } if (sizeof($this->_tpldata['topicrow'])) {  ?>

				<hr class="dashed"/>
				<div class="text-center">
					<div class="btn-group">
						<?php if ($this->_rootref['TOTAL_TOPICS']) {  ?> <span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?></span><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?>

								<a href="#" class="btn btn-default" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><span class="label"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span></a>
								<span class="btn btn-default btn-sm"><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span>
							<?php } else { ?>

								<span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span>
							<?php } } ?>

					</div>
				</div>
				<div class="spacer"></div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php echo ((isset($this->_rootref['L_WATCHED_TOPICS'])) ? $this->_rootref['L_WATCHED_TOPICS'] : ((isset($user->lang['WATCHED_TOPICS'])) ? $user->lang['WATCHED_TOPICS'] : '{ WATCHED_TOPICS }')); ?></th>
								<th class="lastpost"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></th>
								<th class="mark"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
							</tr>
						</thead>
						<tbody class="topiclist cplist">
							<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?>

								<tr>
									<td<?php if ($_topicrow_val['TOPIC_ICON_IMG']) {  ?> style="background-image: url(<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_topicrow_val['TOPIC_ICON_IMG']; ?>); background-repeat: no-repeat;"<?php } ?> title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>">
										<div class="pull-left forum-topic-icon">
											<span><a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="btn <?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?>btn-info<?php } else { ?>btn-default<?php } ?> btn-lg tooltip-link" title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>">
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
											</a></span>
										</div>
										<div class="pull-right">
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
								<a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle"><strong><?php echo $_topicrow_val['TOPIC_TITLE']; ?></strong></a><br/>
								<small><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?> &raquo; <?php echo $_topicrow_val['FIRST_POST_TIME']; ?></small>
									</td>
									<td class="lastpost"><span><dfn><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?> </dfn><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

										<a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <br /><?php echo $_topicrow_val['LAST_POST_TIME']; ?></span>
									</td>
									<td class="mark"><center><input type="checkbox" name="t[<?php echo $_topicrow_val['TOPIC_ID']; ?>]" id="t<?php echo $_topicrow_val['TOPIC_ID']; ?>" /></center></td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div>
			<?php } else if ($this->_rootref['S_TOPIC_NOTIFY']) {  ?>

				<p><strong><?php echo ((isset($this->_rootref['L_NO_WATCHED_TOPICS'])) ? $this->_rootref['L_NO_WATCHED_TOPICS'] : ((isset($user->lang['NO_WATCHED_TOPICS'])) ? $user->lang['NO_WATCHED_TOPICS'] : '{ NO_WATCHED_TOPICS }')); ?></strong></p>
			<?php } if (sizeof($this->_tpldata['topicrow']) || sizeof($this->_tpldata['forumrow'])) {  ?>

				<fieldset class="text-right">
					<div class="btn-group">
						<a class="btn btn-success btn-sm" href="#" onclick="marklist('ucp', 't', true); marklist('ucp', 'f', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a>
						<a class="btn btn-warning btn-sm" href="#" onclick="marklist('ucp', 't', false); marklist('ucp', 'f', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a>
					</div>
					<input type="submit" name="unwatch" value="<?php echo ((isset($this->_rootref['L_UNWATCH_MARKED'])) ? $this->_rootref['L_UNWATCH_MARKED'] : ((isset($user->lang['UNWATCH_MARKED'])) ? $user->lang['UNWATCH_MARKED'] : '{ UNWATCH_MARKED }')); ?>" class="btn btn-primary btn-sm" />
					<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

				</fieldset>
			<?php } ?>

		</div>
	</div>
</form>

<?php $this->_tpl_include('ucp_footer.html'); ?>