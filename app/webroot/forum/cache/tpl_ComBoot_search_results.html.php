<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<div class="page-header">
	<h2><?php if ($this->_rootref['SEARCH_TITLE']) {  echo (isset($this->_rootref['SEARCH_TITLE'])) ? $this->_rootref['SEARCH_TITLE'] : ''; } else { echo (isset($this->_rootref['SEARCH_MATCHES'])) ? $this->_rootref['SEARCH_MATCHES'] : ''; } if ($this->_rootref['SEARCH_WORDS']) {  ?>: <a href="<?php echo (isset($this->_rootref['U_SEARCH_WORDS'])) ? $this->_rootref['U_SEARCH_WORDS'] : ''; ?>"><?php echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; ?></a><?php } ?>

	</h2>
</div>
<?php if ($this->_rootref['IGNORED_WORDS']) {  ?> <p><?php echo ((isset($this->_rootref['L_IGNORED_TERMS'])) ? $this->_rootref['L_IGNORED_TERMS'] : ((isset($user->lang['IGNORED_TERMS'])) ? $user->lang['IGNORED_TERMS'] : '{ IGNORED_TERMS }')); ?>: <strong><?php echo (isset($this->_rootref['IGNORED_WORDS'])) ? $this->_rootref['IGNORED_WORDS'] : ''; ?></strong></p><?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['SEARCH_MATCHES'] || $this->_rootref['PAGE_NUMBER']) {  ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="btn-group">
					<span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['SEARCH_MATCHES'])) ? $this->_rootref['SEARCH_MATCHES'] : ''; ?></span>
					<?php if ($this->_rootref['PAGINATION']) {  ?> <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>" class="btn btn-default btn-sm no-btn"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a><?php } else { ?> <span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } ?>

				</div>
			</div>
		</div>
		<div class="row">
			<?php if ($this->_rootref['SEARCH_MATCHES']) {  ?>

				<div class="col-md-3">
					<?php if ($this->_rootref['SEARCH_TOPIC']) {  ?>

						<a class="btn btn-warning btn-labeled" href="<?php echo (isset($this->_rootref['U_SEARCH_TOPIC'])) ? $this->_rootref['U_SEARCH_TOPIC'] : ''; ?>"><span class="btn-label"><i class="fa fa-arrow-left"></i></span><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?>: <?php echo (isset($this->_rootref['SEARCH_TOPIC'])) ? $this->_rootref['SEARCH_TOPIC'] : ''; ?></a>
					<?php } else { ?>

						<a class="btn btn-warning btn-labeled" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?>"><span class="btn-label"><i class="fa fa-arrow-left"></i></span><?php echo ((isset($this->_rootref['L_RETURN_TO_SEARCH_ADV'])) ? $this->_rootref['L_RETURN_TO_SEARCH_ADV'] : ((isset($user->lang['RETURN_TO_SEARCH_ADV'])) ? $user->lang['RETURN_TO_SEARCH_ADV'] : '{ RETURN_TO_SEARCH_ADV }')); ?></a>
					<?php } ?>

				</div>
			<?php } if ($this->_rootref['SEARCH_MATCHES']) {  ?><div class="col-md-6 text-center"><?php } else { ?><div class="col-md-12 text-center"><?php } ?>

				<div class="btn-group topic-pagination">
					<a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['PREVIOUS_PAGE']) {  ?> disabled<?php } ?>"><i class="fa fa-chevron-left"></i> <?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
					<?php if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } ?>

					<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['NEXT_PAGE']) {  ?> disabled<?php } ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
			<?php if ($this->_rootref['SEARCH_MATCHES']) {  ?>

				<div class="col-md-3">
					<?php if ($this->_rootref['SEARCH_IN_RESULTS']) {  ?>

						<div class="input-group">
							<input type="text" name="add_keywords" id="add_keywords" value="" class="input-medium form-control" placeholder="<?php echo ((isset($this->_rootref['L_SEARCH_IN_RESULTS'])) ? $this->_rootref['L_SEARCH_IN_RESULTS'] : ((isset($user->lang['SEARCH_IN_RESULTS'])) ? $user->lang['SEARCH_IN_RESULTS'] : '{ SEARCH_IN_RESULTS }')); ?>"/>
							<span class="input-group-btn">
								<input class="btn btn-default" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
							</span>
						</div>
					<?php } ?>

				</div>
			<?php } ?>

		</div>
	</form>
<?php } if ($this->_rootref['S_SHOW_TOPICS']) {  if (sizeof($this->_tpldata['searchresults'])) {  ?>

		<table class="table table-bordered table-striped">
			<thead class="topiclist">
				<tr class="icon">
					<th><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
					<th class="posts"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></th>
					<th class="views"><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></th>
					<th class="lastpost"><span><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></span></th>
				</tr>			
			</thead>
			<tbody class="topiclist topics">
				<?php $_searchresults_count = (isset($this->_tpldata['searchresults'])) ? sizeof($this->_tpldata['searchresults']) : 0;if ($_searchresults_count) {for ($_searchresults_i = 0; $_searchresults_i < $_searchresults_count; ++$_searchresults_i){$_searchresults_val = &$this->_tpldata['searchresults'][$_searchresults_i]; ?>				
					<tr>
						<td>
							<div class="pull-left forum-topic-icon">
								<span><a href="<?php echo $_searchresults_val['U_VIEW_TOPIC']; ?>" class="btn <?php if ($_searchresults_val['S_UNREAD_TOPIC']) {  ?>btn-info<?php } else { ?>btn-default<?php } ?> btn-lg tooltip-link" title="<?php echo $_searchresults_val['TOPIC_FOLDER_IMG_ALT']; ?>">
									<i class="fa fa-file-text-o"></i>
								</a></span>
							</div>
							<div class="pull-right">
								<div class="btn-group pagination-line">
									<?php if ($_searchresults_val['S_TOPIC_UNAPPROVED'] || $_searchresults_val['S_POSTS_UNAPPROVED']) {  ?>

										<a href="<?php echo $_searchresults_val['U_MCP_QUEUE']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle"></i></a>
									<?php } if ($_searchresults_val['S_TOPIC_REPORTED']) {  ?>

										<a href="<?php echo $_searchresults_val['U_MCP_REPORT']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle"></i></a>
									<?php } if ($_searchresults_val['ATTACH_ICON_IMG']) {  ?>

										<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-paperclip"></i></a>
									<?php } if ($_searchresults_val['PAGINATION']) {  ?>

										<?php echo $_searchresults_val['PAGINATION']; ?>

									<?php } if ($_searchresults_val['S_UNREAD_TOPIC']) {  ?>

										<a class="btn btn-xs btn-info" href="<?php echo $_searchresults_val['U_NEWEST_POST']; ?>"><i class="fa fa-angle-right"></i></a>
									<?php } if (! $this->_rootref['S_IS_BOT']) {  ?>

										<a class="btn btn-default btn-xs tooltip-link" href="<?php echo $_searchresults_val['U_LAST_POST']; ?>"  title="<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>"><i class="fa fa-angle-double-right"></i></a>
									<?php } ?>		
								</div>
							</div>
							<a href="<?php echo $_searchresults_val['U_VIEW_TOPIC']; ?>" class="topictitle"><strong><?php echo $_searchresults_val['TOPIC_TITLE']; ?></strong></a><br/>
							<small><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_searchresults_val['TOPIC_AUTHOR_FULL']; ?> &raquo; <?php echo $_searchresults_val['FIRST_POST_TIME']; ?> &raquo; <?php echo ((isset($this->_rootref['L_IN'])) ? $this->_rootref['L_IN'] : ((isset($user->lang['IN'])) ? $user->lang['IN'] : '{ IN }')); ?> <a href="<?php echo $_searchresults_val['U_VIEW_FORUM']; ?>"><?php echo $_searchresults_val['FORUM_TITLE']; ?></a></small>
						</td>
						<td class="posts"><?php echo $_searchresults_val['TOPIC_REPLIES']; ?></td>
						<td class="views"><?php echo $_searchresults_val['TOPIC_VIEWS']; ?></td>
						<td class="lastpost"><span>
							<?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_searchresults_val['LAST_POST_AUTHOR_FULL']; ?>

							<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_searchresults_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?><br /><?php echo $_searchresults_val['LAST_POST_TIME']; ?><br /> </span>
						</td>
					</tr>
				<?php }} ?>

			</tbody>
		</table>
	<?php } else { ?>

		<div class="row">
			<div class="well">
			<strong><?php echo ((isset($this->_rootref['L_NO_SEARCH_RESULTS'])) ? $this->_rootref['L_NO_SEARCH_RESULTS'] : ((isset($user->lang['NO_SEARCH_RESULTS'])) ? $user->lang['NO_SEARCH_RESULTS'] : '{ NO_SEARCH_RESULTS }')); ?></strong>
			</div>
		</div>
	<?php } } else { $_searchresults_count = (isset($this->_tpldata['searchresults'])) ? sizeof($this->_tpldata['searchresults']) : 0;if ($_searchresults_count) {for ($_searchresults_i = 0; $_searchresults_i < $_searchresults_count; ++$_searchresults_i){$_searchresults_val = &$this->_tpldata['searchresults'][$_searchresults_i]; ?>

		<div class="search post">
			<?php if ($_searchresults_val['S_IGNORE_POST']) {  ?>

				<div class="postbody">
					<?php echo $_searchresults_val['L_IGNORE_POST']; ?>

				</div>
			<?php } else { ?>

				<div class="panel <?php if ($_searchresults_val['S_POST_REPORTED']) {  ?> panel-danger<?php } else { ?> panel-primary<?php } ?>">
					<div class="panel-heading">
		    			<h3 class="panel-title"><a href="<?php echo $_searchresults_val['U_VIEW_POST']; ?>"><?php echo $_searchresults_val['POST_SUBJECT']; ?></a></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<dl>
									<dt class="author"><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_searchresults_val['POST_AUTHOR_FULL']; ?></dt>
									<dd><?php echo $_searchresults_val['POST_DATE']; ?></dd>
									<dd>&nbsp;</dd>
									<dd><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <a href="<?php echo $_searchresults_val['U_VIEW_FORUM']; ?>"><?php echo $_searchresults_val['FORUM_TITLE']; ?></a></dd>
									<dd><?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?>: <a href="<?php echo $_searchresults_val['U_VIEW_TOPIC']; ?>"><?php echo $_searchresults_val['TOPIC_TITLE']; ?></a></dd>
									<dd><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?>: <strong><?php echo $_searchresults_val['TOPIC_REPLIES']; ?></strong></dd>
									<dd><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?>: <strong><?php echo $_searchresults_val['TOPIC_VIEWS']; ?></strong></dd>
								</dl>
							</div>
							<div class="col-md-9">
								<?php echo $_searchresults_val['MESSAGE']; ?>

							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<?php if (! $_searchresults_val['S_IGNORE_POST']) {  ?>

							<a href="<?php echo $_searchresults_val['U_VIEW_POST']; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_JUMP_TO_POST'])) ? $this->_rootref['L_JUMP_TO_POST'] : ((isset($user->lang['JUMP_TO_POST'])) ? $user->lang['JUMP_TO_POST'] : '{ JUMP_TO_POST }')); ?></a>
						<?php } ?>

					</div>
				</div>
			<?php } ?>

		</div>
	<?php }} else { ?>

		<div class="row">
			<div class="well">
			<strong><?php echo ((isset($this->_rootref['L_NO_SEARCH_RESULTS'])) ? $this->_rootref['L_NO_SEARCH_RESULTS'] : ((isset($user->lang['NO_SEARCH_RESULTS'])) ? $user->lang['NO_SEARCH_RESULTS'] : '{ NO_SEARCH_RESULTS }')); ?></strong>
			</div>
		</div>
	<?php } } if ($this->_rootref['PAGINATION'] || sizeof($this->_tpldata['searchresults']) || $this->_rootref['S_SELECT_SORT_KEY'] || $this->_rootref['S_SELECT_SORT_DAYS']) {  ?>

	<div class="well well-sm">
		<form method="post" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
			<fieldset class="display-options">
				<?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a><?php } if ($this->_rootref['NEXT_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } if ($this->_rootref['S_SELECT_SORT_DAYS'] || $this->_rootref['S_SELECT_SORT_KEY']) {  ?>

					<label><?php if ($this->_rootref['S_SHOW_TOPICS']) {  echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); } else { echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></label><label><?php } ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; if ($this->_rootref['S_SELECT_SORT_KEY']) {  ?></label> <label><?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
					<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; } ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="btn btn-default" /></label>
				<?php } ?>

			</fieldset>
		</form>
	</div>
<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['SEARCH_MATCHES'] || $this->_rootref['PAGE_NUMBER']) {  ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
		<div class="row">
			<?php if ($this->_rootref['SEARCH_MATCHES']) {  ?>

				<div class="col-md-3">
					<?php if ($this->_rootref['SEARCH_TOPIC']) {  ?>

						<a class="btn btn-warning btn-labeled" href="<?php echo (isset($this->_rootref['U_SEARCH_TOPIC'])) ? $this->_rootref['U_SEARCH_TOPIC'] : ''; ?>"><span class="btn-label"><i class="fa fa-arrow-left"></i></span><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?>: <?php echo (isset($this->_rootref['SEARCH_TOPIC'])) ? $this->_rootref['SEARCH_TOPIC'] : ''; ?></a>
					<?php } else { ?>

						<a class="btn btn-warning btn-labeled" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?>"><span class="btn-label"><i class="fa fa-arrow-left"></i></span><?php echo ((isset($this->_rootref['L_RETURN_TO_SEARCH_ADV'])) ? $this->_rootref['L_RETURN_TO_SEARCH_ADV'] : ((isset($user->lang['RETURN_TO_SEARCH_ADV'])) ? $user->lang['RETURN_TO_SEARCH_ADV'] : '{ RETURN_TO_SEARCH_ADV }')); ?></a>
					<?php } ?>

				</div>
			<?php } if ($this->_rootref['SEARCH_MATCHES']) {  ?><div class="col-md-6 text-center"><?php } else { ?><div class="col-md-12 text-center"><?php } ?>

				<div class="btn-group topic-pagination">
					<a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['PREVIOUS_PAGE']) {  ?> disabled<?php } ?>"><i class="fa fa-chevron-left"></i> <?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
					<?php if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } ?>

					<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="btn btn-default btn-sm<?php if (! $this->_rootref['NEXT_PAGE']) {  ?> disabled<?php } ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
			<?php if ($this->_rootref['SEARCH_MATCHES']) {  ?>

				<div class="col-md-3">
					<?php if ($this->_rootref['SEARCH_IN_RESULTS']) {  ?>

						<div class="input-group">
							<input type="text" name="add_keywords" id="add_keywords" value="" class="input-medium form-control" placeholder="<?php echo ((isset($this->_rootref['L_SEARCH_IN_RESULTS'])) ? $this->_rootref['L_SEARCH_IN_RESULTS'] : ((isset($user->lang['SEARCH_IN_RESULTS'])) ? $user->lang['SEARCH_IN_RESULTS'] : '{ SEARCH_IN_RESULTS }')); ?>"/>
							<span class="input-group-btn">
								<input class="btn btn-default" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
							</span>
						</div>
					<?php } ?>

				</div>
			<?php } ?>

		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="btn-group">
					<span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['SEARCH_MATCHES'])) ? $this->_rootref['SEARCH_MATCHES'] : ''; ?></span>
					<?php if ($this->_rootref['PAGINATION']) {  ?> <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>" class="btn btn-default btn-sm no-btn"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a><?php } else { ?> <span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span><?php } ?>

				</div>
			</div>
		</div>
	</form>
<?php } $this->_tpl_include('jumpbox.html'); $this->_tpl_include('overall_footer.html'); ?>