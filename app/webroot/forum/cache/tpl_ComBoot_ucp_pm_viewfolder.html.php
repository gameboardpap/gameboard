<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); if (! $this->_rootref['PROMPT']) {  $this->_tpl_include('ucp_pm_message_header.html'); } if ($this->_rootref['PROMPT']) {  ?>

	<form id="viewfolder" method="post" action="<?php echo (isset($this->_rootref['S_PM_ACTION'])) ? $this->_rootref['S_PM_ACTION'] : ''; ?>">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV'])) ? $this->_rootref['L_EXPORT_AS_CSV'] : ((isset($user->lang['EXPORT_AS_CSV'])) ? $user->lang['EXPORT_AS_CSV'] : '{ EXPORT_AS_CSV }')); ?></h3>
			</div>
			<div class="panel-body">
				<h3><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></h3>
				<fieldset>
					<div class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-4" for="delimiter"><?php echo ((isset($this->_rootref['L_DELIMITER'])) ? $this->_rootref['L_DELIMITER'] : ((isset($user->lang['DELIMITER'])) ? $user->lang['DELIMITER'] : '{ DELIMITER }')); ?>:</label>
							<div class="col-md-8">
								<input class="form-control" type="text" id="delimiter" name="delimiter" value="," />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="enclosure"><?php echo ((isset($this->_rootref['L_ENCLOSURE'])) ? $this->_rootref['L_ENCLOSURE'] : ((isset($user->lang['ENCLOSURE'])) ? $user->lang['ENCLOSURE'] : '{ ENCLOSURE }')); ?>:</label></dt>
							<div class="col-md-8">
								<input class="form-control" type="text" id="enclosure" name="enclosure" value="&#034;" />
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset class="submit-buttons">
					<input type="hidden" name="export_option" value="CSV" />
					<input class="btn btn-default" type="submit" name="submit_export" value="<?php echo ((isset($this->_rootref['L_EXPORT_FOLDER'])) ? $this->_rootref['L_EXPORT_FOLDER'] : ((isset($user->lang['EXPORT_FOLDER'])) ? $user->lang['EXPORT_FOLDER'] : '{ EXPORT_FOLDER }')); ?>" />&nbsp;
					<input class="btn btn-default" type="reset" value="Reset" name="reset" />&nbsp;
					<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

				</fieldset>
			</div>
		</div>
	</form>
<?php } else { if ($this->_rootref['NUM_REMOVED']) {  ?>

		<div class="notice">
			<p><?php echo (isset($this->_rootref['RULE_REMOVED_MESSAGES'])) ? $this->_rootref['RULE_REMOVED_MESSAGES'] : ''; ?></p>
		</div>
	<?php } if ($this->_rootref['NUM_NOT_MOVED']) {  ?>

		<div class="notice">
			<p><?php echo (isset($this->_rootref['NOT_MOVED_MESSAGES'])) ? $this->_rootref['NOT_MOVED_MESSAGES'] : ''; ?><br /><?php echo (isset($this->_rootref['RELEASE_MESSAGE_INFO'])) ? $this->_rootref['RELEASE_MESSAGE_INFO'] : ''; ?></p>
		</div>
	<?php } if (sizeof($this->_tpldata['messagerow'])) {  ?>

		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></th>
						<th><span><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></span></th>
					</tr>
				</thead>
				<tbody class="topiclist cplist pmlist">
					<?php $_messagerow_count = (isset($this->_tpldata['messagerow'])) ? sizeof($this->_tpldata['messagerow']) : 0;if ($_messagerow_count) {for ($_messagerow_i = 0; $_messagerow_i < $_messagerow_count; ++$_messagerow_i){$_messagerow_val = &$this->_tpldata['messagerow'][$_messagerow_i]; ?>

						<tr <?php if ($_messagerow_val['PM_CLASS']) {  ?>class="<?php echo $_messagerow_val['PM_CLASS']; ?>"<?php } ?>>
							<td>
								<div class="pull-left pm-topic-icon">
									<a href="<?php if ($_messagerow_val['S_PM_DELETED']) {  echo $_messagerow_val['U_REMOVE_PM']; } else { echo $_messagerow_val['U_VIEW_PM']; } ?>" class="btn <?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?>btn-info<?php } else { ?>btn-default<?php } ?> btn-lg tooltip-link" title="<?php echo $_topicrow_val['PM_FOLDER_IMG_ALT']; ?>">
										<i class="fa fa-file-text-o"></i>
									</a>
									<?php if ($_messagerow_val['PM_ICON_URL'] && $this->_rootref['S_PM_ICONS']) {  ?>

										<img scr="<?php echo $_messagerow_val['PM_ICON_URL']; ?>" style="background-repeat: no-repeat;">
									<?php } ?>

								</div>
								<?php if ($_messagerow_val['S_PM_DELETED']) {  ?>

									<a href="<?php echo $_messagerow_val['U_REMOVE_PM']; ?>" class="topictitle"><?php echo ((isset($this->_rootref['L_DELETE_MESSAGE'])) ? $this->_rootref['L_DELETE_MESSAGE'] : ((isset($user->lang['DELETE_MESSAGE'])) ? $user->lang['DELETE_MESSAGE'] : '{ DELETE_MESSAGE }')); ?></a><br />
									<span class="error"><?php echo ((isset($this->_rootref['L_MESSAGE_REMOVED_FROM_OUTBOX'])) ? $this->_rootref['L_MESSAGE_REMOVED_FROM_OUTBOX'] : ((isset($user->lang['MESSAGE_REMOVED_FROM_OUTBOX'])) ? $user->lang['MESSAGE_REMOVED_FROM_OUTBOX'] : '{ MESSAGE_REMOVED_FROM_OUTBOX }')); ?></span>
								<?php } else { ?>

									<a href="<?php echo $_messagerow_val['U_VIEW_PM']; ?>" class="topictitle"><?php echo $_messagerow_val['SUBJECT']; ?></a>
								<?php } if ($_messagerow_val['S_AUTHOR_DELETED']) {  ?>

									<br /><em class="small"><?php echo ((isset($this->_rootref['L_PM_FROM_REMOVED_AUTHOR'])) ? $this->_rootref['L_PM_FROM_REMOVED_AUTHOR'] : ((isset($user->lang['PM_FROM_REMOVED_AUTHOR'])) ? $user->lang['PM_FROM_REMOVED_AUTHOR'] : '{ PM_FROM_REMOVED_AUTHOR }')); ?></em>
								<?php } if ($_messagerow_val['S_PM_REPORTED']) {  ?><a href="<?php echo $_messagerow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a><?php } ?>

								<?php echo $_messagerow_val['ATTACH_ICON_IMG']; ?><br />
								<small><?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  echo ((isset($this->_rootref['L_MESSAGE_TO'])) ? $this->_rootref['L_MESSAGE_TO'] : ((isset($user->lang['MESSAGE_TO'])) ? $user->lang['MESSAGE_TO'] : '{ MESSAGE_TO }')); ?> <?php echo $_messagerow_val['RECIPIENTS']; } else { echo ((isset($this->_rootref['L_MESSAGE_BY_AUTHOR'])) ? $this->_rootref['L_MESSAGE_BY_AUTHOR'] : ((isset($user->lang['MESSAGE_BY_AUTHOR'])) ? $user->lang['MESSAGE_BY_AUTHOR'] : '{ MESSAGE_BY_AUTHOR }')); ?> <?php echo $_messagerow_val['MESSAGE_AUTHOR_FULL']; ?> &raquo; <?php echo $_messagerow_val['SENT_TIME']; } ?></small>
								<?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  ?>&raquo; <small><span><?php echo ((isset($this->_rootref['L_SENT_AT'])) ? $this->_rootref['L_SENT_AT'] : ((isset($user->lang['SENT_AT'])) ? $user->lang['SENT_AT'] : '{ SENT_AT }')); ?>: <?php echo $_messagerow_val['SENT_TIME']; ?></span></small><?php } if ($this->_rootref['S_UNREAD']) {  ?>&raquo; <small><?php if ($_messagerow_val['FOLDER']) {  ?><a href="<?php echo $_messagerow_val['U_FOLDER']; ?>"><?php echo $_messagerow_val['FOLDER']; ?></a><?php } else { echo ((isset($this->_rootref['L_UNKNOWN_FOLDER'])) ? $this->_rootref['L_UNKNOWN_FOLDER'] : ((isset($user->lang['UNKNOWN_FOLDER'])) ? $user->lang['UNKNOWN_FOLDER'] : '{ UNKNOWN_FOLDER }')); } ?></small><?php } ?>

							</td>
							<td class="mark"><input type="checkbox" name="marked_msg_id[]" value="<?php echo $_messagerow_val['MESSAGE_ID']; ?>" /></td>
						</tr>
					<?php }} ?>

				</tbody>
			</table>
		</div>
	<?php } else { ?>

		<p><strong>
			<?php if ($this->_rootref['S_COMPOSE_PM_VIEW'] && $this->_rootref['S_NO_AUTH_SEND_MESSAGE']) {  if ($this->_rootref['S_USER_NEW']) {  echo ((isset($this->_rootref['L_USER_NEW_PERMISSION_DISALLOWED'])) ? $this->_rootref['L_USER_NEW_PERMISSION_DISALLOWED'] : ((isset($user->lang['USER_NEW_PERMISSION_DISALLOWED'])) ? $user->lang['USER_NEW_PERMISSION_DISALLOWED'] : '{ USER_NEW_PERMISSION_DISALLOWED }')); } else { echo ((isset($this->_rootref['L_NO_AUTH_SEND_MESSAGE'])) ? $this->_rootref['L_NO_AUTH_SEND_MESSAGE'] : ((isset($user->lang['NO_AUTH_SEND_MESSAGE'])) ? $user->lang['NO_AUTH_SEND_MESSAGE'] : '{ NO_AUTH_SEND_MESSAGE }')); } } else { ?>

				<?php echo ((isset($this->_rootref['L_NO_MESSAGES'])) ? $this->_rootref['L_NO_MESSAGES'] : ((isset($user->lang['NO_MESSAGES'])) ? $user->lang['NO_MESSAGES'] : '{ NO_MESSAGES }')); ?>

			<?php } ?>

		</strong></p>
	<?php } if ($this->_rootref['FOLDER_CUR_MESSAGES'] != 0) {  ?>

		<fieldset class="display-actions">
			<div class="pull-left">
				<label for="export_option">
					<?php echo ((isset($this->_rootref['L_EXPORT_FOLDER'])) ? $this->_rootref['L_EXPORT_FOLDER'] : ((isset($user->lang['EXPORT_FOLDER'])) ? $user->lang['EXPORT_FOLDER'] : '{ EXPORT_FOLDER }')); ?>: <select name="export_option" id="export_option">
						<option value="CSV"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV'])) ? $this->_rootref['L_EXPORT_AS_CSV'] : ((isset($user->lang['EXPORT_AS_CSV'])) ? $user->lang['EXPORT_AS_CSV'] : '{ EXPORT_AS_CSV }')); ?></option><option value="CSV_EXCEL"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV_EXCEL'])) ? $this->_rootref['L_EXPORT_AS_CSV_EXCEL'] : ((isset($user->lang['EXPORT_AS_CSV_EXCEL'])) ? $user->lang['EXPORT_AS_CSV_EXCEL'] : '{ EXPORT_AS_CSV_EXCEL }')); ?></option>
						<option value="XML"><?php echo ((isset($this->_rootref['L_EXPORT_AS_XML'])) ? $this->_rootref['L_EXPORT_AS_XML'] : ((isset($user->lang['EXPORT_AS_XML'])) ? $user->lang['EXPORT_AS_XML'] : '{ EXPORT_AS_XML }')); ?></option>
					</select>
				</label>
				<input class="btn btn-default" type="submit" name="submit_export" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /><br />
			</div>
			<div class="pull-right btn-group">
				<a href="#" class="btn btn-sm btn-success" onclick="marklist('viewfolder', 'marked_msg', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a>
				<a href="#" class="btn btn-sm btn-warning" onclick="marklist('viewfolder', 'marked_msg', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a>
			</div>
			<div class="clearfix"></div>
			<select name="mark_option"><?php echo (isset($this->_rootref['S_MARK_OPTIONS'])) ? $this->_rootref['S_MARK_OPTIONS'] : ''; echo (isset($this->_rootref['S_MOVE_MARKED_OPTIONS'])) ? $this->_rootref['S_MOVE_MARKED_OPTIONS'] : ''; ?></select>
			<input class="btn btn-default" type="submit" name="submit_mark" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" />
		</fieldset>
		<hr />
		<?php if ($this->_rootref['TOTAL_MESSAGES'] || $this->_rootref['S_VIEW_MESSAGE']) {  ?>

			<div class="text-center row">
				<div class="col-md-12">
					<div class="btn-group">
						<?php if ($this->_rootref['TOTAL_MESSAGES']) {  ?><span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['TOTAL_MESSAGES'])) ? $this->_rootref['TOTAL_MESSAGES'] : ''; ?></span><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?>

								<a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a>
								<span class="btn btn-default btn-sm"><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span>
							<?php } else { ?>

								<span class="btn btn-default btn-sm disabled"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></span>
							<?php } } ?>

					</div>
				</div>
			</div>
		<?php } } if ($this->_rootref['FOLDER_CUR_MESSAGES'] != 0) {  ?>

		<fieldset class="display-options">
			<?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a><?php } if ($this->_rootref['NEXT_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } ?>

			<label><?php echo ((isset($this->_rootref['L_DISPLAY'])) ? $this->_rootref['L_DISPLAY'] : ((isset($user->lang['DISPLAY'])) ? $user->lang['DISPLAY'] : '{ DISPLAY }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
			<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
			<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="btn btn-default" /></label>
			<input type="hidden" name="cur_folder_id" value="<?php echo (isset($this->_rootref['CUR_FOLDER_ID'])) ? $this->_rootref['CUR_FOLDER_ID'] : ''; ?>" />
		</fieldset>
	<?php } } if (! $this->_rootref['PROMPT']) {  $this->_tpl_include('ucp_pm_message_footer.html'); } $this->_tpl_include('ucp_footer.html'); ?>